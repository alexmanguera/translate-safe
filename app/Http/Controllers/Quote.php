<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
use Form;
use Input;
use DB;

use \Uploadcare;

class Quote extends Controller
{
	
	public function validate_first()
	{
		if(!Session::has('quote_session_key'))
		{
			Session::put('quote_session_key', str_random(25));	
		}
		return view('quote');
	}

	public function submitquote()
	{
		if(Session::has('quote_session_key'))
		{			
			$quote_key_id = rand(100,999).'-'.rand(100000,999999);
			
			$language_from_full = Input::get('language_from_full');
			$language_to_full = Input::get('language_to_full');
			$contact_name = Input::get('contact_name');
			$contact_company_name = Input::get('contact_company_name');
			$contact_email = Input::get('contact_email');
			$contact_phone = Input::get('contact_phone');
			$notarization = Input::get('notarization');
			$physical = Input::get('physical');

			// ===============================
			// uploadcare API
			$uploadcare_file = Input::get('qs-file');
			$uploadcare_file = str_replace('http://www.ucarecdn.com/','',$uploadcare_file);
			$uploadcare_group_id = $uploadcare_file;
			$uploadcare_file = 'https://api.uploadcare.com/groups/'.$uploadcare_file.'?format=json';

			$url = $uploadcare_file;

			$options = array(
			  'http'=>array(
				'method'=>"GET",
				'header'=>"Authorization: Uploadcare.Simple 5040c4f4e8f90bd0da34:2310b69f2d975ad5896d\r\n"
			 )
			);

			$context = stream_context_create($options);
			$file = file_get_contents($url, false, $context);

			$obj = json_decode($file);
			$obj = $obj->files;
			//var_dump($obj);
			foreach($obj as $key => $value)
			{
				$quote_files[] = $obj[$key]; // get the file details for each uploaded files
			}
			
			// ===============================
			// store to dbase all file details
			foreach($quote_files as $ucare)
			{
				DB::table('uploadcare_files')->insert([
					'uuid' => $ucare->uuid,
					'original_file_url' => $ucare->original_file_url,
					'url' => $ucare->url,
					'original_filename' => $ucare->original_filename,
					'datetime_uploaded' => $ucare->datetime_uploaded,
					'size' => $ucare->size,
					'uuid_group' => $uploadcare_group_id,
					'upload_type' => "Source",			
					'quote_key_id' => $quote_key_id			
				]);			
			}
			// ===============================
			
			
			
			
			
			DB::table('quotes')->insert([
				'quote_key_id' => $quote_key_id,
				'language_from' => $language_from_full,
				'language_to' => $language_to_full,
				'contact_name' => $contact_name,
				'contact_company_name' => $contact_company_name,
				'contact_email' => $contact_email,
				'contact_phone' => $contact_phone,
				'notarization' => $notarization,
				'physical' => $physical,
				'uploadcare_uuid_group' => $uploadcare_file,
				'quote_status' => "Requested"				
			]);
			
			
		
			$curr_datetime = date("F j, Y, h:i:s A"); 
			
			Session::forget('quote_session_key');
			Session::flash('error', 'quote already submitted!');
			
			return view('quote_summary', compact('quote_key_id','language_from_full','language_to_full', 'curr_datetime', 'quote_files'));
		}
		else
		{
			return redirect()->intended('quote');
		}
		
	}
	
}
