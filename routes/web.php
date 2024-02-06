<?php

use App\Http\Controllers\CategoryManagerController;
use App\Http\Controllers\ProductManagerController;
use App\Http\Controllers\UserManagerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [CategoryManagerController::class, 'index']);

// To get the user's sent information
// Route::get('/users', function(Request $request){
//     dd($request);
//     return null;
// });

// What we give to user on what they request
// Route::get('/get-text', function(){
//     return response('Hello Vryan!!!', 200)
//                 ->header('Content-Type', 'text/plain');
// });

// Route::get('/user/{id}/{group}', function($id, $group){
//     return response($id.$group, 200);
// });

// Return JSON file
// Route::get('/request-json', function(){
//     return response()->json(['name' => 'Ayow vryan', 'age' => '22']);
// });

// Route::get('/home', function () {
//     return view('home.home');
// });

// User Manager Route
// Route::get('/UserManager/{id}', [UserManagerController::class, 'show']);
Route::get('/UserManager', [UserManagerController::class, 'index'])->middleware('auth');

// Category Manager Route
// Route::get('/CategoryManager', [CategoryManagerController::class, 'index']);

// Product Manager Route
// Route::get('/ProductManager', [ProductManagerController::class, 'index']);

// Login
Route::get('/login', [UserManagerController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login/process', [UserManagerController::class, 'process']);

// Register
Route::get('/register', [UserManagerController::class, 'register']);

// Logout
Route::post('/logout', [UserManagerController::class, 'logout']);

// Home
Route::get('/home', function () {
    return view('home.home');
})->middleware('auth')->name('home');

Route::post('/store', [UserManagerController::class, 'store']);

Route::get('/add/user', [UserManagerController::class, 'create']);
Route::post('/add/user', [UserManagerController::class, 'store']);


Route::get('/user/{id}', [UserManagerController::class, 'show']);
Route::post('/user/{id}', [UserManagerController::class, 'update']);