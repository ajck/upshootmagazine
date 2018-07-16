<?php

// Main controller code. Displays index page, adds owners and motorbikes to the database and returns the entered data for the tables, finds the closest owner. All grouped in one controller as this is such a small project.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	// Display the index page:
    public function showIndexPage()
		{
        return view('index', array('page' => 'index'));
		}
	
	// Add a magazine to the database:
	public function addMag(Request $request)
		{
		// Use Laravel validation to check all fields are present:
		$this->validate($request, [
        'name' => 'required',
        'price' => 'required',
        'cover' => 'required',
        'colour' => 'required',
        'size' => 'required',
        'theme' => 'required'
		]);
		
		// Create a new magazine record in the database:
		$mag = Mag::create(['name' => $request->input('name'), 'price' => $request->input('price'), 'cover' => $request->input('cover'), 'colour' => $request->input('colour'), 'size' => $request->input('size'), 'theme' => $request->input('theme')]);	
		
		// Send mag data as JSON response over AJAX:
		return response()->json(['id' => $mag->id, 'name' => $mag->name, 'price' => $mag->price, 'cover' => $mag->cover, 'colour' => $mag->colour, 'size' => $mag->size, 'theme' => $mag->theme]);
		}

	// Delete a magazine from the database:
	public function deleteMag(Request $request)
		{
		// Use Laravel validation to check all fields are present:
		$this->validate($request, [
        'id' => 'required' // With more time, id would be further validated to ensure it was within range etc.
		]);
		
		// Find and delete magazine with the correct ID:
		$mag = App\Magazine::find($request->input('id'))->delete();

		// Send magazine id as JSON response over AJAX:
		return response()->json(['id' => $request->input('id')]);
		}


}
