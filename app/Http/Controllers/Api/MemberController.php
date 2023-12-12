<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberResource;
use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{

	public function index(Request $request)
	{
		$email = $request->email ?? null;
		$password = $request->password ?? null;
		$Member = Member::query();
		if (!empty($email) && !empty($password)) {
			$Member = Member::where("email", $email)->where("password", $password);
		}
		return MemberResource::collection($Member->get());
	}

	public function store(StoreMemberRequest $request)
	{
		$Member = Member::create($request->validated());
		return MemberResource::make($Member);
	}


	public function show(Member $Member)
	{
		return MemberResource::make($Member);
	}


	public function update(UpdateMemberRequest $request, Member $Member)
	{
		$Member->update($request->validated());
		return MemberResource::make($Member);
	}

	public function destroy(Member $Member)
	{
		$Member->delete();
		return response()->noContent();
	}
}
