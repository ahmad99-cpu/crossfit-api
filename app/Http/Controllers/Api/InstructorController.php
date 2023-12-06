<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\InstructorResource;
use App\Models\instructor;
use App\Http\Requests\StoreinstructorRequest;
use App\Http\Requests\UpdateinstructorRequest;

class InstructorController extends Controller
{

    public function index()
    {
        return InstructorResource::collection(instructor::all());
    }

    public function store(StoreinstructorRequest $request)
    {
        $instructor = instructor::create($request->validated());
        return InstructorResource::make($instructor);
    }

    public function show(instructor $instructor)
    {
        return InstructorResource::make($instructor);
    }

    public function update(UpdateinstructorRequest $request, instructor $instructor)
    {
        $instructor->update($request->validated());
        return InstructorResource::make($instructor);
    }

    public function destroy(instructor $instructor)
    {
        $instructor->delete();
        return response()->noContent();
    }
}
