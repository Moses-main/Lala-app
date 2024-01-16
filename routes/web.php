<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dogs/create', [DogController::class, 'create'])->name('dogs.create');
// Route::post('/dogs', [DogController::class, 'store']);

// Dynamic routes
// Route::get('test/{name}', function($name){
//     return view('test', ['name' => $name]);
// });

Route::get('/newdog', function(){
    return view('newdog');
});

// // Route to send the name of the dog to the database
// Route::post('/dogs',[DogController::class, 'create']);

// // Route to get the names of the dog in the table
// Route::get('/dogs', function () {return view('newdog');})->name('dogs');

Route::post('/dogs',[DogController::class, 'create'])->name('dog.create');
   
Route::get('/dogs', function () {return view('welcome');})->name('dogs');