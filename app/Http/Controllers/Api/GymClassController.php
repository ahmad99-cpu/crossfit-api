<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GymClassResource;
use App\Models\gymClass;
use App\Http\Requests\StoregymClassRequest;
use App\Http\Requests\UpdategymClassRequest;

class GymClassController extends Controller
{

    public function index()
    {
        return GymClassResource::collection(gymClass::all());
    }

    public function store(StoregymClassRequest $request)
    {
        $gymClass = gymClass::create($request->validated());

        return GymClassResource::make($class);
    }

    public function show(gymClass $gymClass)
    {
        return GymClassResource::make($gymClass);
    }

    public function update(UpdategymClassRequest $request, gymClass $gymClass)
    {
        $gymClass->update($request->validated());
        return GymClassResource::make($gymClass);
    }

    public function destroy(gymClass $gymClass)
    {
        $gymClass->delete();
        return response()->noContent();
    }
}
