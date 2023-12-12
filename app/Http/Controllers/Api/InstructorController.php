<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\InstructorResource;
use App\Models\Instructor;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;

class InstructorController extends Controller
{

	public function index()
	{
		return InstructorResource::collection(Instructor::all());
	}

	public function store(StoreInstructorRequest $request)
	{
		$Instructor = Instructor::create($request->validated());
		return InstructorResource::make($Instructor);
	}

	public function show(Instructor $Instructor)
	{
		return InstructorResource::make($Instructor);
	}

	public function update(UpdateInstructorRequest $request, Instructor $Instructor)
	{
		$Instructor->update($request->validated());
		return InstructorResource::make($Instructor);
	}

	public function destroy(Instructor $Instructor)
	{
		$Instructor->delete();
		return response()->noContent();
	}
}
