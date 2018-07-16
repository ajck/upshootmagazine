<?php

Route::get('/', 'MainController@showIndexPage'); // Show index page

Route::post('addmag', 'MainController@addMag'); // Route for adding an owner, via AJAX
Route::post('deletemag', 'MainController@deleteMag'); // Route for adding a motorbike, via AJAX
