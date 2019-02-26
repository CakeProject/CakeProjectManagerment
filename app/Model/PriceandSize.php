<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PriceandSize extends Model
{
    protected $fillable = [
            'size','price'
        ];
        public function property()
        {
            return $this->hasMany('App\Model\Property');
        }
}
