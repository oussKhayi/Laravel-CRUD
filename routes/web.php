<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// GET request and return view or text :
Route::get('/Home', fn() => "<h1>Home</h1>"); //using an arrow function
Route::get('/nav', function () {
    return view('layouts/header');
});

Route::get('/', function () {
    return view('welcome');
});

// POST params using Get request :
Route::get('/params/{name}', function ($name){
    if($name === 'oussama'){
        return "welcome back admin";
    }
    return "hello mr $name" ;
});
Route::get('param/{id}', fn($id)=>$id);  //using an arrow function






// POST data using get-html-form with Post request :
Route::get('/create', function () {
    return view('create');
});
Route::post('/post-user',  function (Request $request) {
    $fullname = $request->input('fullname');
    $email = $request->input('email');
    $age = $request->input('age');
    return view('read', compact('email','fullname','age'));
});


// Route Controller --resource :
Route::resource('index', PostController::class);