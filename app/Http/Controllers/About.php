<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session; // to be able to use the Session class

class About extends Controller
{
    //
	public function __construct()
	{

	}

	public function aboutus()
	{
		$users = array("ian", "alex", "jaypee", "hannah");
		foreach($users as $key => $value)
		{
			if($value == 'hannah')
			{
				$name = $value;
			}
			
		}
		
		
		$this->userid = Session::get('userid', 'default'); // retrieve values from a session
		$this->username = Session::get('username', 'default'); // retrieve values from a session
		$this->hehe = 'hehe';
				
		//$this->remove_session();
		$testing = $this->userid;
		
		return view('about', compact('name', 'testing'));
	}
}
