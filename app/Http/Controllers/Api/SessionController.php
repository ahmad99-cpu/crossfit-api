<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SessionResource;
use App\Models\Session;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;

class SessionController extends Controller
{

	public function index()
	{
		return SessionResource::collection(Session::all())->groupBy('day');
	}


	public function store(StoreSessionRequest $request)
	{
		$Session = Session::create($request->validated());
		// return SessionResource::make($Session);
		return new SessionResource($Session);
	}


	public function show(Session $Session)
	{
		return SessionResource::make($Session);
	}


	public function update(UpdateSessionRequest $request, Session $Session)
	{
		$Session->update($request->validated());
		return SessionResource::make($Session);
	}

	public function schedule(){
		return $this->scheduleFormat(Session::all());
	}

	public function destroy(Session $Session)
	{
		$Session->delete();
		return response()->noContent();
	}

	public function scheduleFormat($sessions) {
		return collect(SessionResource::collection($sessions)->groupBy('day'))->map(
			function ($v) {
				return $v->keyBy('period');
			}
		);
	}
}
