<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    	protected $fillable = [
            'color'
        ];
        public function property()
        {
            return $this->hasMany('App\Model\Property');
        }
}
