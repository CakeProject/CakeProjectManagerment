<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    function routetesting($id)
    {
    	if($id < 5)
    	{
    		return "Less than 5";
    	}
    	else
    	{
    		return "bigger than or equal to 5";
    	}
    }
}
