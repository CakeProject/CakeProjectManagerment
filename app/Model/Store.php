<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    	protected $fillable = [
            'store_name'
        ];
        public function property()
        {
            return $this->belongsToMany('App\Model\Property');
        }
}
