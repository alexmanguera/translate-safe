@extends('layouts.master')

	@section('title', 'Checkout')
	
	
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
		<div class="pull-right">
			<img src="{!! asset('/assets/img/step3.png') !!}">
		</div>	
			
		<h3>CHECKOUT</h3>
			
		<div class="form-group bordered">
			<div class="row">
				<div class="row col-sm-7 form-group radio">
					<h4>OPTIONS</h4>
					{!! Form::open(array('method' => 'post', 'url' => 'checkout/payment')) !!}
					<strong>Urgency</strong>
					<div class="row form-group">
						<div class="row col-sm-6">
							<label class="control-label option-group">{!! Form::radio('urgency', 'standard', true, ['class' => 'urgency radio']) !!} <p><strong>Standard Translation Speed</strong> <br> 1-3 pages - 24 hours <br> $24.95 per page</p></label>
						</div>
						<div class="row col-sm-6">
							<label class="control-label">{!! Form::radio('urgency', 'express', false, ['class' => 'urgency radio']) !!} <p><strong>Express Translation Speed</strong> <br> up to 8 pages - 24 hours <br> $39.90 per page</p></label>
						</div>
					</div>
					<strong>Delivery</strong>
					<div class="row form-group">
						<div class="row col-sm-6">
							<label class="control-label option-group">{!! Form::radio('delivery', 'email', true, ['class' => 'delivery']) !!} <p><strong>Email</strong> <br> Instant <br> <i>Free</i></p></label>
						</div>
						<div class="row col-sm-6">
							<label class="control-label">{!! Form::radio('delivery', 'email-mailed', false, ['class' => 'delivery']) !!} <p><strong>Email & Mailed Copy</strong> <br> 2-3 Business Days <br> $12.95 delivery fee</p></label>
						</div>
					</div>
					<strong>Certification</strong>
					<div class="row form-group">
						<div class="row col-sm-6">
							<label class="control-label option-group">{!! Form::radio('certification', 'USCIS', true, ['class' => 'certification']) !!} <p><strong>USCIS Certification</strong> <br> Certified By Translator <br> <i>Free</i></p></label>
						</div>
						<div class="row col-sm-6">
							<label class="control-label">{!! Form::radio('certification', 'Notarization', false, ['class' => 'certification']) !!} <p><strong>+Add Notarization</strong> <br> $19.95 fee</p></label>
						</div>
					</div>
					<div class="row form-group pull-right">
					{!! Form::button('Continue', array('type' => 'submit', 'class'=> 'btn btn-lg btn-success', 'data-loading-text' => 'Loading...')) !!}
					</div>
					<input type="hidden" name="order_total" class="order_total" value="{!! Session::get('checkout_order_total') !!}"> 
					{!! Form::close() !!}
				</div>
			
				<div class="row col-sm-5 form-group text-center">
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<td>
									<label>ORDER TOTAL</label>
									<div><h1>$<span class="order_total_disp">{!! Session::get('checkout_order_total') !!}</span><h1></div>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{!! Session::get('checkout_language_from') !!} to {!! Session::get('checkout_language_to') !!}</td>
							</tr>
							<tr>
								<td>{!! Session::get('checkout_total_page_count') !!} Pages</td>
							</tr>
							<tr class="order_delivery_disp">
								<td><span></span>Emailed & Physical Copy</td>
							</tr>
							<tr class="order_certification_disp">
								<td><span></span>Certified & Notarized</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<p>
										<em>Delivery Estimate</em>
										<br>
										<span id="sidebar-delivery-estimate">{!! Session::get('checkout_delivery_estimate') !!}</span>
									</p>
								</td>
							</tr>
						</foot>
					</table>
				</div>
			
			</div>
		</div>
			<div style="visibility:hidden;">
				<span class="temp_order_urgency_disp">{!! Session::get('checkout_order_total') !!}</span>
				<span class="temp_order_delivery_disp">0</span>
				<span class="temp_order_certification_disp">0</span>
				<span class="urgency_disp">Standard</span>
				<span class="delivery_disp"></span>
				<span class="certification_disp"></span>
			</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->
	
	
	<!-- start the javascript section -->
	@section('jsscripts')
	<script>
		$( document ).ready(function() {
			$( ".order_delivery_disp" ).hide();
			$( ".order_certification_disp" ).hide();
			
			// add class to radio when selected
			$('input').click(function () {
				$('input:not(:checked)').parent().removeClass("option-group");
				$('input:checked').parent().addClass("option-group");
			});
			
			// urgency
			$( ".urgency" ).change(function() {
				var urgency_selected = $( ".urgency:checked" ).val();
				
				var standard_email = 24.95*{!! Session::get('checkout_total_page_count') !!};	
				var express_email = 39.90*{!! Session::get('checkout_total_page_count') !!};
				
				if(urgency_selected == "standard")
				{
					var total_output = standard_email.toFixed(2);	
					$( ".urgency_disp" ).html(urgency_selected);	
				}
				else
				{
					var total_output = express_email.toFixed(2);	
					$( ".urgency_disp" ).html(urgency_selected);
				}
				$( ".temp_order_urgency_disp" ).html(total_output);
				
				var total_output_temp = Number($(".temp_order_urgency_disp").html())+Number($(".temp_order_delivery_disp").html())+Number($(".temp_order_certification_disp").html());
				$(".order_total_disp").html(total_output_temp.toFixed(2));
				$(".order_total").val(total_output_temp.toFixed(2)); // update the previous order_total
			});
			
			// delivery
			$( ".delivery" ).change(function() {
				delivery_selected = $( ".delivery:checked" ).val();
				
				if(delivery_selected == "email")
				{
					$( ".delivery_disp" ).html(delivery_selected);
					$(".temp_order_delivery_disp").html("0");
					$( ".order_delivery_disp" ).hide();
				}else{	
					$( ".delivery_disp" ).html(delivery_selected);
					$(".temp_order_delivery_disp").html("12.95");
					$( ".order_delivery_disp" ).show();
				}
				
				var total_output_temp = Number($(".temp_order_urgency_disp").html())+Number($(".temp_order_delivery_disp").html())+Number($(".temp_order_certification_disp").html());
				$(".order_total_disp").html(total_output_temp.toFixed(2));
				$(".order_total").val(total_output_temp.toFixed(2)); // update the previous order_total
			});
			
			// certification
			$( ".certification" ).change(function() {
				certification_selected = $( ".certification:checked" ).val();
				
				if(certification_selected == "USCIS")
				{
					$( ".certification_disp" ).html(certification_selected);
					$(".temp_order_certification_disp").html("0");
					$( ".order_certification_disp" ).hide();
				}else{	
					$( ".certification_disp" ).html(certification_selected);
					$(".temp_order_certification_disp").html("19.95");
					$( ".order_certification_disp" ).show();
				}
				
				var total_output_temp = Number($(".temp_order_urgency_disp").html())+Number($(".temp_order_delivery_disp").html())+Number($(".temp_order_certification_disp").html());
				$(".order_total_disp").html(total_output_temp.toFixed(2));
				$(".order_total").val(total_output_temp.toFixed(2)); // update the previous order_total
			});
		});
	</script>
	@endsection
	<!-- end the javascript section -->