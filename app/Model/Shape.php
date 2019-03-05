<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    	protected $fillable = [
    	        'shape'
    	    ];
    	    public function property()
    	    {
    	        return $this->hasMany('App\Model\Property');
    	    }
}
