<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberSessionResource;
use App\Models\MemberSession;
use App\Http\Requests\StoreMemberSessionRequest;
use App\Http\Requests\UpdateMemberSessionRequest;

class MemberSessionController extends Controller
{

	public function index()
	{
		return MemberSessionResource::collection(MemberSession::all());
	}

	public function store(StoreMemberSessionRequest $request)
	{
		$memberSession = MemberSession::create($request->validated());
		return MemberSessionResource::make($memberSession);
	}

	public function show(MemberSession $memberSession)
	{
		return MemberSessionResource::make($memberSession);
	}

	public function update(UpdateMemberSessionRequest $request, MemberSession $memberSession)
	{
		$memberSession->update($request->validated());
		return MemberSessionResource::make($memberSession);
	}

	public function destroy(MemberSession $memberSession)
	{
		$memberSession->delete();
		return response()->noContent();
	}
}
