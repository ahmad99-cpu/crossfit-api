<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberClassResource;
use App\Models\MemberClass;
use App\Http\Requests\StoreMemberClassRequest;
use App\Http\Requests\UpdateMemberClassRequest;
use Illuminate\Http\Request;

class MemberClassController extends Controller
{
	private $loadWith = ['member'];
	public function index(Request $request)
	{
		$menmber_id = $request->member_id ?? null;
		$MemberClass = MemberClass::query()->with($this->loadWith);
		if (!empty($menmber_id)) {
			$MemberClass->where("member_id", $menmber_id);
		}
		return MemberClassResource::collection($MemberClass->get());
	}

	public function store(StoreMemberClassRequest $request)
	{
		$MemberClass = MemberClass::create($request->validated());
		return MemberClassResource::make($MemberClass);
	}

	public function show(MemberClass $MemberClass)
	{
		return MemberClassResource::make($MemberClass->load($this->loadWith));
	}


	public function update(UpdateMemberClassRequest $request, MemberClass $MemberClass)
	{
		$MemberClass->update($request->validated());
		return MemberClassResource::make($MemberClass);
	}


	public function destroy(MemberClass $MemberClass)
	{
		$MemberClass->delete();
		return response()->noContent();
	}
}
