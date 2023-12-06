<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BookingResource;
use App\Models\booking;
use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;

class BookingController extends Controller {

	public function index() {
		return BookingResource::collection(booking::all());
	}

    public function store(StorebookingRequest $request)
    {
        $booking = booking::create($request->validated());
        return BookingResource::make($booking);
    }


	public function show(booking $booking)
    {
        return BookingResource::make($booking);
    }


	public function update(UpdatebookingRequest $request, booking $booking) {
		$booking->update($request->validated());
		return BookingResource::make($booking);
	}


	public function destroy(booking $booking) {
		$booking->delete();
		return response()->noContent();
	}
}
