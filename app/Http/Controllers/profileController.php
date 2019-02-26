<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Sopport\facades\Input;
use Illuminate\Sopport\facades\File;
use Illuminate\Sopport\facades\URL;
use App\Profile;
use Auth ;

class profileController extends Controller
{
    public function profile()
    {
    	return view('profiles.profile');
    }
    public function addProfile(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'designation' => 'required',
    		'profile_pic' => 'required'
    	]);

    	$profiles = new Profile;
    	$profiles->name = $request->input('name');
    	$profiles->user_id = Auth::user()->id;
    	$profiles->designation = $request->input('designation');

    	if (input::hasFile('profile_pic'))
    	{
    		$file = input::file('profile_pic');
    		$file->move(public_path(). '/uploads/', $file->getClientOriginalName());
    		$url = URL::to("/").'/uploads/'.$file->getClientOriginalName();
    		return $url;
    		exit();
    	}
    	$profiles->profile_pic = $url;
    	$profiles->save();
    	return redirect('status','Profile Add successfully');
    	
    	
    }
}
