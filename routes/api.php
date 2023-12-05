<?php
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\GymClassController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\InstructorController;
use App\Http\Controllers\Api\PersonalTrainerController;
use App\Http\Controllers\Api\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/gym-classes', GymClassController::class);
Route::apiResource('/products', ProductController::class);
Route::apiResource('/members', MemberController::class);
Route::apiResource('/instructors', InstructorController::class);
Route::apiResource('/personal-trainers', PersonalTrainerController::class);
Route::apiResource('/sessions', SessionController::class);
Route::apiResource('/booking', BookingController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});
