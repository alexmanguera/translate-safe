<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request; // this is particular for Request class to work

use App\Http\Requests;
use App\Http\Controllers\Controller;

class dynamic extends Controller
{
    //
	
	public function display_page()
	{
		$uri = Request::path();
		
		$page_title = str_replace('_translation','', $uri);
		$page_title_lc = str_replace('-',' ', $page_title);
		$page_title_uc = ucwords($page_title_lc);
		
		return view('dynamic', compact('page_title_uc', 'page_title_lc'));
	}
}
