<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PersonalTrainerResource;
use App\Models\PersonalTrainer;
use App\Http\Requests\StorePersonalTrainerRequest;
use App\Http\Requests\UpdatePersonalTrainerRequest;

class PersonalTrainerController extends Controller
{

	public function index()
	{
		return PersonalTrainerResource::collection(PersonalTrainer::all());
	}


	public function store(StorePersonalTrainerRequest $request)
	{
		$PersonalTrainer = PersonalTrainer::create($request->validated());
		return PersonalTrainerResource::make($PersonalTrainer);
	}


	public function show(PersonalTrainer $PersonalTrainer)
	{
		return PersonalTrainerResource::make($PersonalTrainer);
	}


	public function update(UpdatePersonalTrainerRequest $request, PersonalTrainer $PersonalTrainer)
	{
		$PersonalTrainer->updated($request->validated());
		return PersonalTrainerResource::make($PersonalTrainer);
	}


	public function destroy(PersonalTrainer $PersonalTrainer)
	{
		$PersonalTrainer->delete();
		return response()->noContent();
	}
}
