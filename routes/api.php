<?php
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\GymClassController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\InstructorController;
use App\Http\Controllers\Api\PersonalTrainerController;
use App\Http\Controllers\Api\SessionController;
use App\Http\Controllers\Api\MemberClassController;
use App\Http\Controllers\Api\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/gym_classes', GymClassController::class);
Route::apiResource('/products', ProductController::class);
Route::apiResource('/members', MemberController::class);
Route::apiResource('/instructors', InstructorController::class);
Route::apiResource('/personal_trainers', PersonalTrainerController::class);
Route::apiResource('/sessions', SessionController::class);
Route::apiResource('/member_classes', MemberClassController::class);
Route::apiResource('/bookings', BookingController::class);
Route::get('/schedule', [SessionController::class, 'schedule']);
Route::post('/upload', [FileUpload::class, 'fileUpload']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});
