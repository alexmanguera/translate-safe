@extends('layouts.master')

	@section('title', 'Checkout')
	
	<!-- start the javascript section -->
	@section('jsscripts')
	<script>
		$( document ).ready(function() {
			var lang_from = 0;
			var lang_to = 0;
			$( ".language_disp" ).hide();
			$( ".page_disp" ).hide();
			
			// compute for the total order
			$( ".total_page_count" ).change(function() {
				var sum = 24.95;
				var total;
				total = sum * ($( ".total_page_count" ).val());
				var n = total.toFixed(2);
				$(".order_total_disp").html(n);
				$(".order_total").val(n);
								
				// show delivery estimate
				var total_page = $( ".total_page_count" ).val();
				if(total_page <=2)
				{
					estimate = "24 hours";
					$(".delivery_estimate_disp").html(estimate);
					$( ".page_disp" ).show();
				}
				else if(total_page == 3 || total_page == 4)
				{
					estimate = "48 hours";
					$(".delivery_estimate_disp").html(estimate);
					$( ".page_disp" ).show();
				}
				else if(total_page == 5 || total_page == 6)
				{
					estimate = "3 days";
					$(".delivery_estimate_disp").html(estimate);
					$( ".page_disp" ).show();
				}
				else if(total_page >= 7 && total_page <= 10)
				{
					estimate = "4-6 days";
					$(".delivery_estimate_disp").html(estimate);
					$( ".page_disp" ).show();
				}
				else if(total_page > 10)
				{
					estimate = "Instant Estimate Unavailable";
					$(".delivery_estimate_disp").html(estimate);
					$( ".page_disp" ).show();
				}
				$(".delivery_estimate").val(estimate);
				$(".total_page_disp").html(total_page);
			});
			
			// display the currently selected language_from
			$( ".language_from" ).change(function() {
				$(".language_from_disp").text($(".language_from option:selected").text());
				$(".language_from_full").val($(".language_from option:selected").text());
				lang_from = 1;
				disp_languages_container();
			});
			// display the currently selected language_from
			$( ".language_to" ).change(function() {
				$(".language_to_disp").text($(".language_to option:selected").text());
				$(".language_to_full").val($(".language_to option:selected").text());
				lang_to = 1;
				disp_languages_container();
			});
			function disp_languages_container()
			{
				var display_languages;
				display_languages = lang_from + lang_to;
				if(display_languages == 2)
				{
					$( ".language_disp" ).show();
				}
			}
		});
	</script>	
	@endsection
	<!-- end the javascript section -->
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
		<div class="pull-right">
			<img src="{!! asset('/assets/img/step2.png') !!}">
		</div>

		<h3>CHECKOUT</h3>
			
		<div class="form-group bordered">
			<div class="row">
				<div class="row col-sm-7 form-group ">
					<h4>TRANSLATION DETAILS</h4>
					{!! Form::open(array('method' => 'post', 'url' => 'checkout/options')) !!}
					<div class="row form-group ">
					{!! Form::label('sel-language-from', 'Translating From', array('class' => 'control-label')) !!}
					{!! Form::select('language_from', 
										array(
												'' => 'Select Language',
												'al' => 'Albanian',
												'ar' => 'Arabic',
												'bg' => 'Bulgarian',
												'zh-cn' => 'Chinese (Cantonese)',
												'zh-si' => 'Chinese (Mandarin) Simplified',
												'zh-tr' => 'Chinese (Mandarin) Traditional',
												'cl' => 'Creole',
												'cs' => 'Czech',
												'da' => 'Danish',
												'nl' => 'Dutch',
												'en' => 'English',
												'fs' => 'Farsi',
												'fr' => 'French',
												'fr-ca' => 'French (Canadian)',
												'ka' => 'Georgian',
												'de' => 'German',
												'el' => 'Greek',
												'he' => 'Hebrew',
												'hi' => 'Hindi',
												'hu' => 'Hungarian',
												'id' => 'Indonesian',
												'it' => 'Italian',
												'ja' => 'Japanese',
												'ko' => 'Korean',
												'lt' => 'Latin',
												'ml' => 'Malay',
												'no' => 'Norwegian',
												'pl' => 'Polish',
												'pt-br' => 'Portuguese (Brazil)',
												'pt-pt' => 'Portuguese (Portugal)',
												'pj' => 'Punjabi',
												'ro' => 'Romanian',
												'ru' => 'Russian',
												'sb' => 'Serbian',
												'sk' => 'Slovak',
												'es' => 'Spanish',
												'sv' => 'Swedish',
												'tl' => 'Tagalog',
												'th' => 'Thai',
												'tr' => 'Turkish',
												'uk' => 'Ukrainian',
												'ur' => 'Urdu',
												'vi' => 'Vietnamese'
											),
											null, 
											['class' => 'form-control language_from', 'required' => true]
									)
					!!}
					</div>
					<div class="row form-group ">
					{!! Form::label('sel-language-to', 'Translating To', array('class' => 'control-label')) !!}
					{!! Form::select('language_to',
										array(
												'' => 'Select Language',
												'al' => 'Albanian',
												'ar' => 'Arabic',
												'bg' => 'Bulgarian',
												'zh-cn' => 'Chinese (Cantonese)',
												'zh-si' => 'Chinese (Mandarin) Simplified',
												'zh-tr' => 'Chinese (Mandarin) Traditional',
												'cl' => 'Creole',
												'cs' => 'Czech',
												'da' => 'Danish',
												'nl' => 'Dutch',
												'en' => 'English',
												'fs' => 'Farsi',
												'fr' => 'French',
												'fr-ca' => 'French (Canadian)',
												'ka' => 'Georgian',
												'de' => 'German',
												'el' => 'Greek',
												'he' => 'Hebrew',
												'hi' => 'Hindi',
												'hu' => 'Hungarian',
												'id' => 'Indonesian',
												'it' => 'Italian',
												'ja' => 'Japanese',
												'ko' => 'Korean',
												'lt' => 'Latin',
												'ml' => 'Malay',
												'no' => 'Norwegian',
												'pl' => 'Polish',
												'pt-br' => 'Portuguese (Brazil)',
												'pt-pt' => 'Portuguese (Portugal)',
												'pj' => 'Punjabi',
												'ro' => 'Romanian',
												'ru' => 'Russian',
												'sb' => 'Serbian',
												'sk' => 'Slovak',
												'es' => 'Spanish',
												'sv' => 'Swedish',
												'tl' => 'Tagalog',
												'th' => 'Thai',
												'tr' => 'Turkish',
												'uk' => 'Ukrainian',
												'ur' => 'Urdu',
												'vi' => 'Vietnamese'
											),
											null, 
											['class' => 'form-control language_to', 'required' => true]
									)
					!!}
					</div>
					<div class="row form-group ">
					{!! Form::label('sel-page-count', 'Page Count', array('class' => 'control-label')) !!}
					<select class="form-control total_page_count" required="1" name="total_page_count">
						<option value="">Select Total Pages</option>
						<option value="1">1 Page</option>
						@for($i=2;$i<=150;$i++)
						<option value="{!! $i !!}">{!! $i !!} Pages</option>
						@endfor
					</select>
					</div>
					<div class="row form-group ">	
					{!! Form::button('Continue', array('type' => 'submit', 'class'=> 'btn btn-lg btn-success pull-right', 'data-loading-text' => 'Loading...')) !!}
					</div>
					{!! Form::hidden('language_from_full', 'null', array('class' => 'language_from_full')) !!}
					{!! Form::hidden('language_to_full', 'null', array('class' => 'language_to_full')) !!}
					{!! Form::hidden('order_total', '0', array('class' => 'order_total')) !!}
					{!! Form::hidden('delivery_estimate', '0', array('class' => 'delivery_estimate')) !!}
					
					{!! Form::close() !!}
				</div>
			
				<div class="row col-sm-5 form-group text-center">
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<td>
									<label>ORDER TOTAL</label>
									<div><h1>$<span class="order_total_disp">0.00</span><h1></div>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr class="language_disp">
								<td><strong><span class="language_from_disp"></span></strong> to <strong><span class="language_to_disp"></span></strong></td>
							</tr>
							<tr class="page_disp">
								<td><span class="total_page_disp"></span> Pages</td>
							</tr>
						</tbody>
						<tfoot>
							<tr class="active">
								<td>
									<p>
										<em>Delivery Estimate</em>
										<br>
										<span class="delivery_estimate_disp">N/A</span>
									</p>
								</td>
							</tr>
						</foot>
					</table>
				</div>
			</div>
		</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->
	