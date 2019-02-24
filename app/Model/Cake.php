<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
		protected $fillable = [
	        'name'
	    ];
	    public function property()
	    {
	        return $this->hasMany('App\Model\Property');
	    }
}