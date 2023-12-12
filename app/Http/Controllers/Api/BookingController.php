<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{

	public function index()
	{
		return BookingResource::collection(Booking::all());
	}

	public function store(StoreBookingRequest $request)
	{
		$Booking = Booking::create($request->validated());
		return BookingResource::make($Booking);
	}


	public function show(Booking $Booking)
	{
		return BookingResource::make($Booking);
	}


	public function update(UpdateBookingRequest $request, Booking $Booking)
	{
		$Booking->update($request->validated());
		return BookingResource::make($Booking);
	}


	public function destroy(Booking $Booking)
	{
		$Booking->delete();
		return response()->noContent();
	}
}
