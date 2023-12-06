<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberClassResource;
use App\Models\memberClass;
use App\Http\Requests\StorememberClassRequest;
use App\Http\Requests\UpdatememberClassRequest;

class MemberClassController extends Controller
{

    public function index()
    {
        return MemberClassResource::collection(memberClass:all());
    }

    public function store(StorememberClassRequest $request)
    {
        $memberClass = memberClass::create($request->validated());
        // return MemberClassResource::make($memberClass);
        return new MemberClassResource($memberClass);
    }

    public function show(memberClass $memberClass)
    {
        return MemberClassResource::make($memberClass);
    }


    public function update(UpdatememberClassRequest $request, memberClass $memberClass)
    {
        $memberClass->update($request->validated());
        return MemberClassResource::make($memberClass);
    }


    public function destroy(memberClass $memberClass)
    {
        $memberClass->delete();
        return response()->noContent();
    }
}
