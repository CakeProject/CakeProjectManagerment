<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    	protected $fillable = [
            'color_name',
        ];
        public function property()
        {
            return $this->belongsToMany('App\Model\Property');
        }
}
