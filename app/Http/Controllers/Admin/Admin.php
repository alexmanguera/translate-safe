<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Session;
use URL;
use View;
use Input;
use Date;
use CURLFile;

use \Uploadcare;

ini_set('max_execution_time', 300);

class Admin extends Controller
{
    //	
	public function __construct()
	{
		
		$pending_quotes = $this->count_pending_quotes();
		View::share('pending_quotes', $pending_quotes);
		
		$pending_orders = $this->count_pending_orders();
		View::share('pending_orders', $pending_orders);
		
		// OHT API KEYS (SandBox)
		//$this->oht_secret_key = 'a757762b97a79b6ddca87272219e5664';
		//$this->oht_public_key = '6dKPFntcRhVGjDpMYmBx';
		//$this->oht_resource_file_url = 'https://sandbox.onehourtranslation.com/api/2/resources/file';
		//$this->oht_project_translation_url = 'https://sandbox.onehourtranslation.com/api/2/projects/translation';
		
		// OHT API KEYS (Production)
		$this->oht_secret_key = 'f842982de14982abdbfd171d65fbabc6';
		$this->oht_public_key = '7rDxpFhtqdQjmgNMZ8wG';
		$this->oht_resource_file_url = 'https://www.onehourtranslation.com/api/2/resources/file';
		$this->oht_project_translation_url = 'https://www.onehourtranslation.com/api/2/projects/translation';
	}
	
	// ======================================================
	// ORDERS
	public function dashboard()
	{
		if(!Session::has('sess_email'))
		{
			return redirect()->intended('admin/login');
		}
		
		return view('admin.home');
	}
	
	public function listorders()
	{			
		if(!Session::has('sess_email'))
		{
			return redirect()->intended('admin/login');
		}
		
		$result = DB::table('checkout')->get();
		
		return view('admin.orders', compact('result'));
	}
	
	public function vieworder($orderid)
	{
		$result = DB::table('checkout')
						->where('checkout_id', '=', $orderid)
						->get();
		foreach($result as $order)
		{
			$checkout_id = $order->checkout_id; 
			$checkout_name = $order->checkout_name; 
			$checkout_email = $order->checkout_email; 
			$checkout_order_total = $order->checkout_order_total; 
			$checkout_language_from = $order->checkout_language_from; 
			$checkout_language_to = $order->checkout_language_to; 
			$checkout_total_page_count = $order->checkout_total_page_count; 
			$checkout_delivery_estimate = $order->checkout_delivery_estimate; 
			$checkout_urgency = $order->checkout_urgency; 
			$checkout_delivery = $order->checkout_delivery; 
			$checkout_certification = $order->checkout_certification;
			
			$uploadcare_uuid_group = $order->uploadcare_uuid_group;
			$uploadcare_uuid_group = str_replace('https://api.uploadcare.com/groups/','',$uploadcare_uuid_group);
			$uploadcare_uuid_group = str_replace('?format=json','',$uploadcare_uuid_group);
			
			$checkout_status = $order->checkout_status; 	
			$checkout_notes = $order->checkout_notes;
			$oht_translation_project_id = $order->oht_translation_project_id;
			$timestamp = $order->timestamp; 
		}
		//echo $uploadcare_uuid_group;
		// ===============================
		// query the files
		$result2 = DB::table('uploadcare_files')
						->where('uuid_group', '=', $uploadcare_uuid_group)
						->get();
					
		return view('admin.orderview', compact(
												'checkout_id',
												'checkout_name',
												'checkout_email',
												'checkout_order_total',
												'checkout_language_from',
												'checkout_language_to',
												'checkout_total_page_count',
												'checkout_delivery_estimate',
												'checkout_urgency',
												'checkout_delivery',
												'checkout_certification',
												'uploadcare_uuid_group',
												'checkout_status',
												'checkout_notes',
												'oht_translation_project_id',
												'timestamp',
												'result2'
											));
	}
	
	public function order_update_status()
	{
		$status = Input::get('order_status');
		$order_id = Input::get('order_id');
		$language_from = Input::get('language_from');
		$language_to = Input::get('language_to');
		
		$l_from = strpos($language_from, '|')+1;
		$l_from_a = strlen($language_from);
		$language_from = substr($language_from, $l_from, $l_from_a);
		
		$l_to = strpos($language_to, '|')+1;
		$l_to_a = strlen($language_to);
		$language_to = substr($language_to, $l_to, $l_to_a);

		// ============================================================================
		$message = '';
		if($status == 'In Progress')
		{
			$uuid_group = Input::get('uuid_group'); 
			$uuid_group = str_replace('https://api.uploadcare.com/groups/','',$uuid_group);
			$uuid_group = str_replace('?format=json','',$uuid_group);	
			
			if($this->process_overall_oht_submission($order_id, $uuid_group, $language_from, $language_to))
			{
				// update the DB
				DB::table('checkout')->where('checkout_id', '=', $order_id)
						->update(array('checkout_status' => $status));
						
				$message = ' | <span class="text-primary">Job Order has been successfully submitted to OHT</span>';
				Session::flash('message', 'Order Status Updated!'.$message); 
			}else{
				$message = '<span class="text-danger">Failed to create Job Order | [ OHT Message: '.$this->oht_create_translation_project_error.' ]</span>';
				Session::flash('message', $message); 
			}
		}
		else
		{
			// update the DB
			DB::table('checkout')->where('checkout_id', '=', $order_id)
					->update(array('checkout_status' => $status));
					
			Session::flash('message', 'Order Status Updated!');
		}
		// ============================================================================		
		return redirect()->intended('admin/order/view/'.$order_id);		
	}
	
	public function order_update_notes()
	{
		$notes = Input::get('order_notes');
		$order_id = Input::get('order_id');
		
		DB::table('checkout')->where('checkout_id', '=', $order_id)
						->update(array('checkout_notes' => $notes));
						
		Session::flash('message', 'Order Notes Updated!'); 
		return redirect()->intended('admin/order/view/'.$order_id);		
	}
	
	
	
	
	
	
	
	// ======================================================
	// QUOTES
	public function listquotes()
	{			
		if(!Session::has('sess_email'))
		{
			return redirect()->intended('admin/login');
		}
		
		$result = DB::table('quotes')->get();
		
		return view('admin.quote', compact('result'));
	}
	
	public function viewquote($quoteid)
	{
		$result = DB::table('quotes')
						->where('quote_key_id', '=', $quoteid)
						->get();
		foreach($result as $quote)
		{
			$quote_key_id = $quote->quote_key_id; 
			$contact_name = $quote->contact_name; 
			$contact_company_name = $quote->contact_company_name; 
			$contact_email = $quote->contact_email; 
			$contact_phone = $quote->contact_phone; 
			$notarization = $quote->notarization; 
			$physical = $quote->physical; 
			$language_from = $quote->language_from; 
			$language_to = $quote->language_to; 
			$quote_status = $quote->quote_status; 
			$timestamp = $quote->timestamp; 
			$uploadcare_uuid_group = $quote->uploadcare_uuid_group; 
		}
		
		// ===============================
		// query the files
		$result2 = DB::table('uploadcare_files')
						->where('quote_key_id', '=', $quote_key_id)
						->get();
					
		return view('admin.quoteview', compact('quote_key_id','contact_name','contact_company_name','contact_email','contact_phone','notarization','physical','language_from','language_to','quote_status','timestamp', 'result2'));
	}
	
	public function count_pending_quotes()
	{
		$result = DB::table('quotes')->where('quote_status', '=', 'Requested')->count();
		
		return $result.' pending';
	}
	
	public function count_pending_orders()
	{
		$result = DB::table('checkout')->where('checkout_status', '=', 'Received')->count();
		
		return $result.' pending';
	}
	
	
	
	
	
	// ======================================================
	// UPLOADCARE FILES
	public function delete_uploadcare_file()
	{
		// ===============================
		// uploadcare API
		
		// to determine which page view to return
		$origin = Input::get('origin');
		if($origin == 'order')
		{
			$id = Input::get('orderid');
			$page = 'order';
		}
		else
		{
			$id = Input::get('quoteid'); 
			$page = 'quotes';
		}
		
		
		$uuid = Input::get('uuid');
		$quoteid = Input::get('quoteid'); 
		
		if(!empty($uuid))
		{
			foreach($uuid as $value)
			{
				$uploadcare_file = 'https://api.uploadcare.com/files/'.$value.'/';

				$url = $uploadcare_file;

				$options = array(
				  'http'=>array(
					'method'=>"DELETE",
					//'header'=>"Authorization: Uploadcare.Simple 5040c4f4e8f90bd0da34:2310b69f2d975ad5896d\r\n"
					'header'=>"Authorization: Uploadcare.Simple 43e80fc682364d8060be:2f411bff64944e81a08f\r\n" // UPDATE THESE API KEYS
				 )
				);

				$context = stream_context_create($options);
				$file = file_get_contents($url, false, $context);
				//print($file);
				// ===============================
				
				DB::table('uploadcare_files')->where('uuid', '=', $value)->delete();
				
				Session::flash('message', 'File/s Successfully Deleted!'); 
			}
		}
				
		return redirect()->intended('admin/'.$page.'/view/'.$id);
	}
	
	
	
	
	// ======================================================
	// CUSTOMERS
	public function listcustomers()
	{
		if(!Session::has('sess_email'))
		{
			return redirect()->intended('admin/login');
		}
		
		$resulta = DB::table('checkout')->groupBy('checkout_email')->get();
		
		foreach($resulta as $checkout)
		{
			$resultx[] = array(
							'name' => $checkout->checkout_name,
							'email' => $checkout->checkout_email,
							'company' => '',
							'phone' => ''
							);
		}

		$resultb = DB::table('quotes')->groupBy('contact_email')->get();
		
		foreach($resultb as $quote)
		{
			$resultx[] = array(
							'name' => $quote->contact_name,
							'email' => $quote->contact_email,
							'company' => $quote->contact_company_name,
							'phone' => $quote->contact_phone
							);
		}
		
		return view('admin.customers', compact('resultx'));
	}
	
	
	
	
	// ======================================================
	// TRANSLATE
	public function translateform(Request $request)
	{
		$texts = $request->texts;
		return view('admin.translate_form', compact('texts'));
	}
	
	// OHT machine translate method
	/*
	public function translatethis(Request $request)
	{		
		$texts = $request->texts;
		$text_to_translate = urlencode($texts);
		$url = "https://sandbox.onehourtranslation.com/api/2/mt/translate/text?secret_key=".$this->oht_secret_key."&public_key=".$this->oht_public_key."&source_language=en-us&target_language=fr-fr&source_content=".$text_to_translate;

		$file = file_get_contents($url);
		$obj = json_decode($file);
		$obj = $obj->results;
		$result = $obj->TranslatedText;
		//var_dump($result);
		//echo $result;
		
		Session::flash('translate_done', 'ok');
		return view('admin.translate_form', compact('result','texts'));
	}
	*/
	
	// download the file from cdn of UploadCare
	function process_overall_oht_submission($order_id, $uuid_group, $language_from, $language_to)
	{		
		$result = DB::table('uploadcare_files')
						->where('uuid_group', '=', $uuid_group)
						->get();
		
		$total_oht_process = false;
		$file_resource_creation_success = false;
		
		foreach($result as $result2)
		{
			$original_file_url = $result2->original_file_url;
			$uuid = $result2->uuid;
			
			$file_url = $original_file_url;
			$filename = rtrim(basename($file_url).PHP_EOL); // rtrim to remove whitespace at the end.
			
			$temp_path = 'resources\assets\uploads\\'.$filename;
			$save_to = base_path($temp_path);
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_POST, 0); 
			curl_setopt($ch,CURLOPT_URL,$file_url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$file_content = curl_exec($ch);
			curl_close($ch);
	 
			$downloaded_file = fopen($save_to, 'w');
			fwrite($downloaded_file, $file_content);
			fclose($downloaded_file);
			
			// =======================================================
			if($this->oht_create_file_resource($save_to, $uuid))
			{
				$pre_oht_file_resource_id[] = $this->oht_file_resource_id;
				$file_resource_creation_success = true;
			}
			else
			{
				echo "ERROR create file resource id";
				echo $this->oht_file_resource_error;
			}
			// =======================================================
		}
		
		if($file_resource_creation_success)
		{
			$final_oht_file_resource_id = implode(',', $pre_oht_file_resource_id);
			// ===========================================================================
			if($this->oht_create_translation_project($order_id, $final_oht_file_resource_id, $language_from, $language_to))
			{
				$total_oht_process = true;
			}else{
				$this->oht_create_translation_project_error = $this->oht_create_translation_project_error;
				$total_oht_process = false;
			}
		}
		else
		{
			$total_oht_process = false;
		}
		
		if($total_oht_process)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	// create a file resource request to OHT
	public function oht_create_file_resource($save_to, $uuid)
	{
		//$url = 'https://sandbox.onehourtranslation.com/api/2/resources/file';
		$url = $this->oht_resource_file_url;
		
		$path = $save_to;
		$cfile = curl_file_create($path);
		
		$fields = array(
			'secret_key' => $this->oht_secret_key,
			'public_key' => $this->oht_public_key,
			'upload' => $cfile
		);
		
		$ch = curl_init($url); ///THE URL YOU WANT TO SEND 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
		curl_setopt($ch, CURLOPT_POST, 1); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields); 
		//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml')); //YOUR HEADER TYPE 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		
		$output = curl_exec($ch); 
		//echo nl2br($output); 
		
		$obj = json_decode($output);
		$oht_file_status = $obj->status;
		$oht_file_status_msg = $obj->status->msg;
		$oht_file_results = $obj->results;
		$oht_file_resource_error = $obj->errors;
		
		if($oht_file_status_msg == "ok")
		{
			$oht_file_resource_id = $oht_file_results[0];
			
			// insert the created file_resource id from OHT to database
			DB::table('uploadcare_files')->where('uuid', '=', $uuid)
				->update(array('oht_file_resource_id' => $oht_file_resource_id));

			curl_close($ch);
			
			//echo $oht_file_status_msg;
			//echo "<br>";
			//echo $oht_file_resource_id;
			
			$this->oht_file_resource_id = $oht_file_resource_id;
			return true;
		}
		else
		{
				$this->oht_file_resource_error = $oht_file_resource_error[0];
				return false;
		}
	}
	
	// create a translation project to OHT (requires file resource_id's)
	public function oht_create_translation_project($order_id, $final_oht_file_resource_id, $language_from, $language_to)
	{						
		$url = 'https://sandbox.onehourtranslation.com/api/2/projects/translation';
		$url = $this->oht_project_translation_url;
		
		$fields = array(
			'secret_key' => $this->oht_secret_key,
			'public_key' => $this->oht_public_key,
			'source_language' => $language_from,
			'target_language' => $language_to,
			'sources' => $final_oht_file_resource_id
		);
		
		
		$ch = curl_init($url); ///THE URL YOU WANT TO SEND 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
		curl_setopt($ch, CURLOPT_POST, 1); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		
		$output = curl_exec($ch); 
		//echo nl2br($output); 
		
		$obj = json_decode($output);
		$oht_status = $obj->status;
		$oht_message = $oht_status->msg;
		$oht_results = $obj->results;
		$oht_errors = $obj->errors;

		//echo $oht_message;
		//echo $order_id;
	
		if($oht_message == "ok")
		{
			$oht_project_id = $oht_results->project_id;
			echo $oht_project_id;
			
			// insert the created project_id from OHT to database
			DB::table('checkout')->where('checkout_id', '=', $order_id)
				->update(array('oht_translation_project_id' => $oht_project_id));
			
			return true;
		}else{
			$this->oht_create_translation_project_error = $oht_message;
			return false;
		}
		
		curl_close($ch);
	}
	

	
} // end class
