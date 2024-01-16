<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Models\Dog;

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

// Dynamic routes
// Route::get('test/{name}', function($name){
//     return view('test', ['name' => $name]);
// });


// ROUTE TO THE FORM FOR ADDING A NEW DOG
// Route::get('/newdog', function(){
//     return view('newdog');
// });


// ROUTE TO SAVE A NEW DOG TO THE DATABASE
Route::post('/dogs',[DogController::class, 'create'])->name('dog.create');

// ROUTE TO DISPLAY THE DOGS IN THE DATABASE   
Route::get('/', function () {
    $dogs = Dog::all();
    return view('dogs',['dogs'=>$dogs]);
})->name('index');