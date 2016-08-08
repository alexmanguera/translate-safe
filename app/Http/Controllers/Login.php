<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Form;
use Input;
use DB;
use Auth;
use Session;
use HTML;

class Login extends Controller
{
	
	 public function authenticate()
    {
		$email = Input::get('email');
		$password = Input::get('password');
		
			$result = DB::table('users')
						->where('email', '=', $email)
						->where('password', '=', $password)
						->get();
			
			foreach($result as $user)
			{
				$first_name = $user->first_name;
				$last_name = $user->last_name;
			}
			if($result)
			{
				Session::put('sess_email', $email); // Put a key / value pair in the session
				Session::put('sess_fullname', $first_name.' '.$last_name); // Put a key / value pair in the session
				
				Session::flash('message', 'Welcome! '.Session::get('sess_email')); 
				//Session::flash('alert-class', 'alert-danger'); // additional custom message you may wish to pass
			
				return redirect()->intended('admin');
			}
			else
			{
				
				Session::flash('message', 'Invalid Email Address and/or Password!');
			
				return redirect()->intended('/admin/login');	
			}			
    }
	
	public function logout()
	{
		Session::flush(); // Remove all of the items from the session
		
		return redirect()->intended('/admin/login');	
	}
}
