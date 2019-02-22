<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['shape','flavour','color','image','description'];
    
    public function flavour()
    {
        return $this->belongsToMany('App\Model\Flavour');
    }
    public function cake()
    {
        return $this->belongsToMany('App\Model\Cake');
    }
    public function store()
    {
        return $this->belongsToMany('App\Model\Store');
    }
    public function shape()
    {
        return $this->belongsToMany('App\Model\Shape');
    }

}
