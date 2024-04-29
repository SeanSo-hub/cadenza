<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//all listings
Route::get('/', [ListingController::class, 'index']);

//show create
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing
Route::post('/listings', [ListingController::class, 'store']);

//edit listing
Route::get('/listings/{id}/edit',[ListingController::class, 'edit']);
Route::put('/listings/{id}',[ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{id}',[ListingController::class, 'destroy']);

//show single listing 
Route::get('/listings/{id}', [ListingController::class, 'show']);

//show signup
Route::get('/signup', [UserController::class, 'create']);

//create users
Route::post('/users', [UserController::class, 'store']);

//log out
Route::post('/logout', [UserController::class, 'logout']);

//show login
Route::get('/login', [UserController::class, 'login']);

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

 