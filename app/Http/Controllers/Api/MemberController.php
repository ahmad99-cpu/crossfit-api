<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberResource;
use App\Models\member;
use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;

class MemberController extends Controller
{

    public function index()
    {
        return MemberResource::collection(member::all());
    }

    public function store(StorememberRequest $request)
    {
        $member = member::create($request->validated());
        return MemberResource::make($member);
    }


    public function show(member $member)
    {
        return MemberResource::make($member);
    }


    public function update(UpdatememberRequest $request, member $member)
    {
        $member->update($request->validated());
        return MemberResource::make($employee);
    }

    public function destroy(member $member)
    {
        $member->delete();
        return response()->noContent();
    }
}
