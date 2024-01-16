<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    // validate the form
    public function create(Request $request){
        $this->validate($request, ['name'=>'required',]);
    
        // store the dog into the database
        Dog::create($request->all());

        // redirect to the index route
        return to_route('index');
    }

    public function delete($id){
        $dog = Dog::find($id);
        $dog->delete();

        return to_route('index');
    }

    

    




    // public function create()
    // {
    //     return view('newdog'); // You can create a form in resources/views/dogs/create.blade.php
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     Dog::create([
    //         'name' => $request->input('name'),
    //     ]);

    //     return redirect()->route('/newdog')->with('success', 'Dog name stored successfully!');
    // }

}
