<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceandSizeController extends Controller
{
     public function index()
    {
        $size = PriceandSize::find($size_id);
		$size->properties()->attach($property_id);
		dd($size);
		// return view('property.index');

    }
}
