<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
	protected $fillable = [
        'flavour'
    ];
    public function property()
    {
        return $this->hasMany('App\Model\Property');
    }
}
