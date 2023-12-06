<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SessionResource;
use App\Models\session;
use App\Http\Requests\StoresessionRequest;
use App\Http\Requests\UpdatesessionRequest;

class SessionController extends Controller
{

    public function index()
    {
        return SessionResource::collection(session::all());
    }


    public function store(StoresessionRequest $request)
    {
        $session = session::create($request->validated());
        // return SessionResource::make($session);
        return new SessionResource($session);
    }


	public function show(session $session) {
		return SessionResource::make($session);
	}


	public function update(UpdatesessionRequest $request, session $session) {
		$session->update($request->validated());
		return SessionResource::make($session);
	}


	public function destroy(session $session) {
		$session->delete();
		return response()->noContent();
	}
}
