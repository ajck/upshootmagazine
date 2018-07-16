<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
	// Only allow these fields to be set in the DB:
    protected $fillable = ['name', 'motorbike_id', 'location'];

}
