<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberResource;
use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{

	public function index()
	{
		return MemberResource::collection(Member::all());
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
