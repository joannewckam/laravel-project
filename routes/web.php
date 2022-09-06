<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Common Resource Routes:
// index - show all listings
// show- show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// example:
// Route::get('/hello', function(){
//     return response('Hello world', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });
// Route::get('/posts/{id}', function($id){
//     ddd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');
// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request -> city;
// });