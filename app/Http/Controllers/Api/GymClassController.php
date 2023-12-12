<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GymClassResource;
use App\Models\GymClass;
use App\Http\Requests\StoreGymClassRequest;
use App\Http\Requests\UpdateGymClassRequest;

class GymClassController extends Controller
{

	public function index()
	{
		return GymClassResource::collection(GymClass::all());
	}

	public function store(StoreGymClassRequest $request)
	{
		$GymClass = GymClass::create($request->validated());

		return GymClassResource::make($GymClass);
	}

	public function show(GymClass $GymClass)
	{
		return GymClassResource::make($GymClass);
	}

	public function update(UpdateGymClassRequest $request, GymClass $GymClass)
	{
		$GymClass->update($request->validated());
		return GymClassResource::make($GymClass);
	}

	public function destroy(GymClass $GymClass)
	{
		$GymClass->delete();
		return response()->noContent();
	}
}
