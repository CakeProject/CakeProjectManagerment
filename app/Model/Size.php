<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
	protected $table = "sizes";
    protected $fillable = [
            'size'
        ];
    // public function property()
    // {
    //     return $this->hasMany('App\Model\Property');
    // }
    public function properties()
    {
    	 return $this->belongsToMany('App\Property','property_size');
    }
}
