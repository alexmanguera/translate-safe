<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-us', 'About@aboutus');

// Subpages
Route::get('/services/certified-translation', function () {
    return view('services_certified_translation');
});
Route::get('/enterprise/law-firms', function () {
    return view('enterprise_law_firms');
});
Route::get('/order/status', function () {
    return view('order_status');
});
Route::get('/about-us/contact-us', function () {
    return view('contact_us');
});
Route::get('/legal/privacy-policy', function () {
    return view('privacy_policy');
});
Route::get('/legal/terms-of-service', function () {
    return view('terms_of_service');
});
Route::get('/legal/refund-policy', function () {
    return view('refund_policy');
});



// QUOTE
Route::get('/quote', 'Quote@validate_first');

Route::post('/quote', 'Quote@submitquote'); // post method is applied within this route



// CHECKOUT
Route::post('/checkout', 'Checkout@submit_documents'); // from dynamic page form

Route::get('/checkout', 'Checkout@submit_documents');

Route::post('/checkout/details', 'Checkout@translation_details'); // post method is applied within this route

Route::post('/checkout/options', 'Checkout@options'); // post method is applied within this route

Route::post('/checkout/payment', 'Checkout@payment'); // post method is applied within this route

//Route::post('/checkout/payment_process', 'Checkout@payment_process'); // post method is applied within this route

Route::post('/checkout/payment_process_credit_card', 'Checkout@process_paypal'); // post method is applied within this route

Route::get('/checkout/payment_details', 'Checkout@payment_details'); // this is where all checkout details are inserted into DBase.

Route::get('/checkout/paypal', 'Checkout@paypal'); // this is where all checkout details are inserted into DBase.



// LOGIN
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', 'Login@authenticate'); // post method is applied within this route



// LOGOUT
Route::get('/admin/logout', 'Login@logout');



// DYNAMIC
Route::get('/{translate}_translation', 'Dynamic@display_page');



// ============ ADMIN ============
Route::group(array('namespace' => 'Admin', 'prefix' => 'admin'), function()
{	
	//View::share('pending_quotes', Admin::count_pending_quotes());

	//View::share('pending_orders', Admin::count_pending_orders());
	
	/*
    Route::get('/hello-world', function($country){
        return "You are in the {$country} localisation.";
    });
	*/

	Route::get('/', 'Admin@dashboard');
	
	// Quotes
	Route::get('/quotes', 'Admin@listquotes');
	
	Route::get('/quotes/view/{quoteid}', 'Admin@viewquote');

	Route::post('/quote/view/deletefile', 'Admin@delete_uploadcare_file'); // post method is applied within this route
	
	// Orders
	Route::get('/orders', 'Admin@listorders');
	
	Route::get('/order/view/{orderid}', 'Admin@vieworder');
	
	Route::post('/order/view/{orderid}/update_status', 'Admin@order_update_status'); // post method is applied within this route
	
	Route::post('/order/view/{orderid}/update_note', 'Admin@order_update_notes'); // post method is applied within this route
	
	// Customers
	Route::get('/customers', 'Admin@listcustomers');
	
	// =============================================
	//Translate
	Route::get('/translate', 'Admin@translateform');
	
	Route::post('/translate', 'Admin@process_overall_oht_submission');
});








