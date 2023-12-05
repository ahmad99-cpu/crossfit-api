<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PersonalTrainerResource;
use App\Models\personalTrainer;
use App\Http\Requests\StorepersonalTrainerRequest;
use App\Http\Requests\UpdatepersonalTrainerRequest;

class PersonalTrainerController extends Controller
{

    public function index()
    {
        return PersonalTrainerResource::collection(personalTrainer::all());
    }


    public function store(StorepersonalTrainerRequest $request)
    {
        $personalTrainer = personalTrainer::create($request->validated());
        return PersonalTrainerResource::make($personalTrainer);
    }


    public function show(personalTrainer $personalTrainer)
    {
        return PersonalTrainerResource::make($personalTrainer);
    }


    public function update(UpdatepersonalTrainerRequest $request, personalTrainer $personalTrainer)
    {
        $personalTrainer->updated($request->validated());
        return PersonalTrainerResource::make($personalTrainer);
    }


    public function destroy(personalTrainer $personalTrainer)
    {
        $personalTrainer->delete();
        return response()->noContent();
    }
}
