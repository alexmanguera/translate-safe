<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Uploadcare;

use DB;
use Session;
use Input;
use Validator;
use Redirect;
use Braintree_Configuration;
use Braintree_ClientToken;
use Braintree_Transaction;



use PayPal\Api\Address;
use PayPal\Api\CreditCard;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\AmountDetails;

class checkout extends Controller
{
    //
	
	public function __construct()
	{
		// BRAINTREE API KEYS
		// username: bigscalemedia password: password123
		Braintree_Configuration::environment('sandbox');
		Braintree_Configuration::merchantId('bnsnx4j3zyhx92b3');
		Braintree_Configuration::publicKey('9kcg7jxqr2wp4ngv');
		Braintree_Configuration::privateKey('f288f36c3522ddda5e1f9f1ed00867d3');
	}
	
	public function submit_documents()
	{
		Session::put('checkout_session_key', str_random(25));
		
		return view('checkout');
	}
	
	public function translation_details()
	{		
		$name = Input::get('name');
		$email = Input::get('email');
		$document = Input::get('qs-file');
			
		if($document == null)
		{
			Session::flash('message', 'You need to upload your file/s to continue!');
			Session::flash('name', $name);
			Session::flash('email', $email);
			return redirect()->intended('checkout');
		}
		else
		{		
			// ===============================
			// uploadcare API
			$uploadcare_file = $document;
			$uploadcare_file = str_replace('http://www.ucarecdn.com/','',$uploadcare_file);
			$uploadcare_group_id = $uploadcare_file;
			$uploadcare_file = 'https://api.uploadcare.com/groups/'.$uploadcare_file.'?format=json';

			$url = $uploadcare_file;

			$options = array(
			  'http'=>array(
				'method'=>"GET",
				//'header'=>"Authorization: Uploadcare.Simple 5040c4f4e8f90bd0da34:2310b69f2d975ad5896d\r\n"
				'header'=>"Authorization: Uploadcare.Simple 43e80fc682364d8060be:2f411bff64944e81a08f\r\n" // UPDATE THESE API KEYS
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
					'upload_type' => "Source"		
				]);			
			}
			// ===============================
			
			Session::put('checkout_name', $name);
			Session::put('checkout_email', $email);
			Session::put('uploadcare_uuid_group', $uploadcare_file);
			
			return view('checkout_translation_details');
		}
	}
	
	public function options()
	{
		$language_from_full = Input::get('language_from_full');	
		$language_from = Input::get('language_from'); // language codes only
		$language_from = $language_from_full.'|'.$language_from;
		
		$language_to_full = Input::get('language_to_full');
		$language_to = Input::get('language_to'); // language codes only
		$language_to = $language_to_full.'|'.$language_to;
		
		
		$total_page_count = Input::get('total_page_count');
		$delivery_estimate = Input::get('delivery_estimate');
		
		$order_total = Input::get('order_total');
			
		Session::put('checkout_language_from', $language_from);
		Session::put('checkout_language_to', $language_to);
		Session::put('checkout_total_page_count', $total_page_count);	
		Session::put('checkout_delivery_estimate', $delivery_estimate);	
		Session::put('checkout_order_total', $order_total);	

		return view('checkout_options');
	}
	
	public function payment()
	{
		
		$clientToken = Braintree_ClientToken::generate();

		$urgency = Input::get('urgency');
		$delivery = Input::get('delivery');
		$certification = Input::get('certification');
		
		$order_total = Input::get('order_total');
		
		Session::put('checkout_urgency', $urgency);
		Session::put('checkout_delivery', $delivery);
		Session::put('checkout_certification', $certification);	
		Session::put('checkout_order_total', $order_total);	 // update the previous order_total
		
		return view('checkout_payment', compact('clientToken'));
	}
	
	public function payment_process()
	{
		$amount_to_pay = Session::get('checkout_order_total');
		$customer_id = Session::get('checkout_session_key');
		$first_name = Session::get('checkout_name');
		$email = Session::get('checkout_email');
		
		//return 'payment process';
		$nonce = Input::get("payment_method_nonce");
		
		$result = Braintree_Transaction::sale([
		  'amount' => $amount_to_pay,
		  'paymentMethodNonce' => $nonce,
		  'customer' => [
			'id' => $customer_id,
			'firstName' => $first_name,
			'email' => $email
		  ]
		]);

		//return $result;
		return redirect()->intended('checkout/payment_details');
	}
	
	public function payment_details()
	{
		if(Session::has('checkout_session_key'))
		{		
			$checkout_session_key = Session::get('checkout_session_key');
			$checkout_name = Session::get('checkout_name');
			$checkout_email = Session::get('checkout_email');
			$checkout_order_total = Session::get('checkout_order_total');
			$checkout_language_from = Session::get('checkout_language_from');
			$checkout_language_to = Session::get('checkout_language_to');
			$checkout_total_page_count = Session::get('checkout_total_page_count');
			$checkout_delivery_estimate = Session::get('checkout_delivery_estimate');
			$checkout_urgency = Session::get('checkout_urgency');
			$checkout_delivery = Session::get('checkout_delivery');
			$checkout_certification = Session::get('checkout_certification');
			$uploadcare_uuid_group = Session::get('uploadcare_uuid_group');
			// from process_paypal()
			$pp_resp_invoice_number = Session::get('pp_resp_invoice_number');
			$pp_resp_id = Session::get('pp_resp_id');
			$pp_resp_state = Session::get('pp_resp_state');
			// --------------------
			
			DB::table('checkout')->insert([
				'checkout_session_key' => $checkout_session_key,
				'checkout_name' => $checkout_name,
				'checkout_email' => $checkout_email,
				'checkout_order_total' => $checkout_order_total,
				'checkout_language_from' => $checkout_language_from,
				'checkout_language_to' => $checkout_language_to,
				'checkout_total_page_count' => $checkout_total_page_count,
				'checkout_delivery_estimate' => $checkout_delivery_estimate,
				'checkout_urgency' => $checkout_urgency,
				'checkout_delivery' => $checkout_delivery,
				'checkout_certification' => $checkout_certification,
				'uploadcare_uuid_group' => $uploadcare_uuid_group,
				'pp_resp_invoice_number' => $pp_resp_invoice_number,
				'pp_resp_id' => $pp_resp_id,
				'pp_resp_state' => $pp_resp_state
			]);
						
			return view('checkout_payment_details');
			Session::forget('checkout_session_key');
		}
		else
		{
			return redirect()->intended('checkout');
		}
	}
	
	public function process_paypal()
	{
		require dirname(dirname(dirname(__DIR__))) . '/vendor/paypal/rest-api-sdk-php/sample/bootstrap.php';
		// ===============================
		

		$cc_first_name = Input::get("cc_first_name");
		$cc_last_name = Input::get("cc_last_name");
		$cc_number = Input::get("cc_number");
		$exp_mo = Input::get("cc_month");
		$cc_year = Input::get("cc_year");
		$cc_ccv = Input::get("cc_ccv");
		$card_type = $this->card_type($cc_number);
		$total = Session::get('checkout_order_total');
		
						
		// ### CreditCard
		// A resource representing a credit card that can be
		// used to fund a payment.
/* 		$card = new CreditCard();
		$card->setType("visa")
			->setNumber("4417119669820331")
			->setExpireMonth("11")
			->setExpireYear("2019")
			->setCvv2("013")
			->setFirstName("Joe")
			->setLastName("Shopper"); */
			
		
		$card = new CreditCard();
		$card->setType($card_type)
			->setNumber($cc_number)
			->setExpireMonth($exp_mo)
			->setExpireYear($cc_year)
			->setCvv2($cc_ccv)
			->setFirstName($cc_first_name)
			->setLastName($cc_last_name);
		

		// ### FundingInstrument
		// A resource representing a Payer's funding instrument.
		// For direct credit card payments, set the CreditCard
		// field on this object.
		$fi = new FundingInstrument();
		$fi->setCreditCard($card);

		// ### Payer
		// A resource representing a Payer that funds a payment
		// For direct credit card payments, set payment method
		// to 'credit_card' and add an array of funding instruments.
		$payer = new Payer();
		$payer->setPaymentMethod("credit_card")
			->setFundingInstruments(array($fi));

		// ### Itemized information
		// (Optional) Lets you specify item wise
		// information
/* 		$item1 = new Item();
		$item1->setName('Ground Coffee 40 oz')
			->setDescription('Ground Coffee 40 oz')
			->setCurrency('USD')
			->setQuantity(1)
			->setTax(0.50)
			->setPrice(10.50);
		$item2 = new Item();
		$item2->setName('Granola bars')
			->setDescription('Granola Bars with Peanuts')
			->setCurrency('USD')
			->setQuantity(1)
			->setTax(0.50)
			->setPrice(10.50);

		$itemList = new ItemList();
		$itemList->setItems(array($item1, $item2));

		// ### Additional payment details
		// Use this optional field to set additional
		// payment information such as tax, shipping
		// charges etc.
		$details = new Details();
		$details->setShipping(1.20)
			->setTax(1.30)
			->setSubtotal(2.50); */

		// ### Amount
		// Lets you specify a payment amount.
		// You can also specify additional details
		// such as shipping, tax.
		$amount = new Amount();
		$amount->setCurrency("USD")
			->setTotal($total);
			//->setDetails($details);

		// ### Transaction
		// A transaction defines the contract of a
		// payment - what is the payment for and who
		// is fulfilling it. 
		$transaction = new Transaction();
		$transaction->setAmount($amount)
			//->setItemList($itemList)
			->setDescription("Translation Job Order")
			->setInvoiceNumber(uniqid());

		// ### Payment
		// A Payment Resource; create one using
		// the above types and intent set to sale 'sale'
		$payment = new Payment();
		$payment->setIntent("sale")
			->setPayer($payer)
			->setTransactions(array($transaction));
			
			//$payment->create($apiContext);

		// For Sample Purposes Only.
		$request = clone $payment;

		// ### Create Payment
		// Create a payment by calling the payment->create() method
		// with a valid ApiContext (See bootstrap.php for more on `ApiContext`)
		// The return object contains the state.
		
			
		/*
		try {
			$payment->create($apiContext);
		} catch (Exception $ex) {
			// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
			ResultPrinter::printError('Create Payment Using Credit Card. If 500 Exception, try creating a new Credit Card using <a href="https://ppmts.custhelp.com/app/answers/detail/a_id/750">Step 4, on this link</a>, and using it.', 'Payment', null, $request, $ex);
			exit(1);
		}

		// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
		 ResultPrinter::printResult('Create Payment Using Credit Card', 'Payment', $payment->getId(), $request, $payment);
		*/
		
		$payment->create($apiContext);
		//return $payment;
		
		// ------------------------------------------
		$obj = json_decode($payment);
		
		$pp_resp_invoice_number = $obj->transactions[0]->invoice_number;
		$pp_resp_id =  $obj->id;
		$pp_resp_state =  $obj->state;
				
		Session::put('pp_resp_invoice_number', $pp_resp_invoice_number);
		Session::put('pp_resp_id', $pp_resp_id);
		Session::put('pp_resp_state', $pp_resp_state);
		// ------------------------------------------
		
		
		// redirect the user to the last page (success)
		return redirect()->intended('checkout/payment_details');
		// ===============================
	}
	
	public function card_type($number)
	{		
		$number = preg_replace('/[^\d]/','',$number);
		
		if (preg_match('/^3[47][0-9]{13}$/',$number))
		{
			return 'amex';
		}
		elseif (preg_match('/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/',$number))
		{
			return 'diners';
		}
		elseif (preg_match('/^6(?:011|5[0-9][0-9])[0-9]{12}$/',$number))
		{
			return 'discover';
		}
		elseif (preg_match('/^(?:2131|1800|35\d{3})\d{11}$/',$number))
		{
			return 'jcb';
		}
		elseif (preg_match('/^5[1-5][0-9]{14}$/',$number))
		{
			return 'mastercard';
		}
		elseif (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/',$number))
		{
			return 'visa';
		}
		else
		{
			return 'Unknown';
		}
	}
	
}
