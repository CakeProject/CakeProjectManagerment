<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['cake_id','flavour_id','shape_id','color_id','image','description','price'];

    public function cake()
    {
        return $this->belongsTo('App\Model\Cake');
    }
    public function flavour()
    {
        return $this->belongsTo('App\Model\Flavour');
    }
    public function shape()
    {
        return $this->belongsTo('App\Model\Shape');
    }
    public function color()
    {
        return $this->belongsTo('App\Model\Color');
    }

    public function price()
    {
        return $this->belongsTo('App\Model\Property');
    }
    public function sizes()
    {
         return $this->belongsToMany('App\Model\Size','property_size');
    }


}
