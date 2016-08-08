@extends('layouts.dynamic')

@section('title')
	{!! $page_title_uc !!} Translation
@stop

@section('content')

<!-- ==== DYNAMIC ==== -->
<div id="home-first" name="home-first">
<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
			<a href="{!! URL::to('/') !!}"><img src="{!! asset('/assets/img/logo-color.png') !!}" alt="" style="margin-bottom:28px;" height="35" width="184"></a>
			<h1 style="font-size:50px;">We'll Translate Your <span style="color:#609DDB;">{!! $page_title_uc !!}</span> Today!</h1>
			<div style="margin: 0 auto; width: 75%; font-size: 16px;">
				<p>
					Our certified translators can translate your {!! $page_title_lc !!} in less than 24 hours.
				</p>
				<p>
					Our simple pricing policy is <a href="{!! URL::to('pricing') !!}"><bold>$24.95 per page</bold></a>
				</p>
			</div>
			<br>
				<p>
				   <a href="{!! URL::to('checkout') !!}" class="btn-lg btn-success" style="color: #fff;padding:20px 50px;font-size:22px;">Order Your Translation Now</a>
				</p>
			<div style="margin-top:45px;opacity:.35;">
				<img src="{!! asset('/assets/img/norton.png') !!}" width="120" height="65" style="display:inline;"> 
				<img src="{!! asset('/assets/img/bbb.png') !!}" width="240" height="65" style="margin-left:15px;display:inline;">
				<br>
				<img src="{!! asset('/assets/img/uscis.png') !!}" width="210" height="65" style="display:inline;">
				<img src="{!! asset('/assets/img/uscis_seal.png') !!}" width="100" height="100" style="margin-left:15px;display:inline;">
			</div>
		</div>
		<div class="col-md-5">
			<div class="row" style="padding:20px;margin-bottom:30px;background: #68A5E2 none repeat scroll 0% 0%;">
				<div class="col-md-12" style="color: #fff;">
					<h4 style="font-weight:700;">READY TO GET STARTED?</h4>
						{!! Form::open(array('method' => 'post', 'url' => '/checkout')) !!}
						<input name="source" value="passport-squeeze" type="hidden">
						<input name="service" value="certified_translation" type="hidden">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									{!! Form::label('name', 'Name') !!}
									<div class="row form-group ">
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>{!! Form::text('contact_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Sam Smith','required' => true)) !!}
										</div>
									</div>
									{!! Form::label('email_address', 'E-mail Address') !!}
									<div class="row form-group ">
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('contact_email', '', array('class' => 'form-control', 'placeholder' => 'e.g. mail@example.com','required' => true)) !!}
										</div>
									</div>
									{!! Form::label('total_pages', 'Total Pages') !!}
									<select class="form-control total_page_count" required="1" name="total_page_count">
										<option value="">Select Total Pages</option>
										<option value="1">1 Page</option>
										@for($i=2;$i<=150;$i++)
										<option value="{!! $i !!}">{!! $i !!} Pages</option>
										@endfor
									</select>
									<br>
									<button type="submit" class="btn btn-warning pull-right" style="margin-top:-2px;font-weight:700;color:#000;">GET STARTED</button>
								</div>
							</div>
						</div>
						{!! Form::close() !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					<img src="{!! asset('/assets/img/check.png') !!}">
				</div>
				<div class="col-md-11">
					<h4>100% USCIS Acceptance Guarantee</h4>
					<p>Our translations are approved &amp; accepted by USCIS, federal, state, and local governments.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					<img src="{!! asset('/assets/img/check.png') !!}">
				</div>
				<div class="col-md-11">
					<h4>24 hour Turnaround</h4>
					<p>We translate and deliver 1-3 page documents within 24 hours and offer expedited options.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					<img src="{!! asset('/assets/img/check.png') !!}">
				</div>
				<div class="col-md-11">
					<h4>30+ Languages</h4>
					<p>We've translated thousands of documents issued by hundreds of different national and local governments in over 30 languages.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- -->
<div id="home-second" name="home-second" style="border-top: 1px solid #e6eaea;">
<div class="container">
	<div class="row">
		<div class="col-md-4">
		
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-thumbs-up"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">Simple Pricing</a></h4>
						<p class="margin-bottom-10">Fair for us. Easy for you. We do one price, <strong>$24.95</strong> per page up to 250 words. No hidden fees.</p>
					</div>
				</div>
			</div>
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-lock"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">Encrypted &amp; Secure</a></h4>
						<p class="margin-bottom-10">All files uploaded are immediately encrypted. Only our verified translators are permitted to access your documents.</p>
					</div>
				</div>
			</div>
		
		</div>
		
		<div class="col-md-4">
		
			<div class="clearfix visible-xs"></div>
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-network"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">Reliable Delivery</a></h4>
						<p class="margin-bottom-10">We understand urgency and your needs. Our documents are completed fast, without errors, and include industry-standard reviews.</p>
					</div>
				</div>
			</div>
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-download"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">Quick &amp; Easy Upload</a></h4>
						<p class="margin-bottom-10">We accept all common document types, including PDF, DOCX, and photos directly uploaded from your phone. If we can read it, we can translate it.</p>
					</div>
				</div>
			</div>
		
		</div>
		
		<div class="col-md-4">
		
			<div class="clearfix visible-xs"></div>
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-check"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">100% USCIS Acceptance</a></h4>
						<p class="margin-bottom-10">We have served over 15,000 individual customers, and we stand by our 100% acceptance or your money back.</p>
					</div>
				</div>
			</div>
			<div class="padding-bottom-30">
				<div class="icon-box icon-box-icon-big">
					<div class="icon-box-icon icon-box-icon-circle icon-box-icon-base"><i class="icon-users"></i>
					</div>
					<div class="icon-box-content-2">
						<h4><a href="#" class="link-dark">Experienced Translators</a></h4>
						<p class="margin-bottom-10">We've handpicked all of our translators and ensure they can meet the standard our customers expect. Rigorous training and background checks are conducted for each translator.</p>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 text-center">
			<img style="opacity:.45;" src="{!! asset('/assets/img/ata.png') !!}">
		</div>
	</div>	
</div>
</div>


<div id="dynamic_feature">
	<div class="container text-center">
		<h4>Our incredible company has been featured in...</h4>
		<div class="row">
			<div class="col-md-12" style="padding-left:50px;">
				<a href="#"><span style="opacity:.35;"><img width="180" height="65" src="{!! asset('/assets/img/techcrunch-1.png') !!}" alt=""></span></a>
				<a href="#"><span style="opacity:.35;margin-left:15px;"><img width="180" height="65" src="{!! asset('/assets/img/entrepreneur-1.png') !!}" alt=""></span></a>
				<a href="#"><span style="opacity:.35;margin-left:15px;"><img width="180" height="65" src="{!! asset('/assets/img/nyt-1.png') !!}" alt=""></span></a>
				<a href="#"><span style="opacity:.35;margin-left:15px;"><img width="180" height="65" src="{!! asset('/assets/img/forbes-1.png') !!}" alt=""></span></a>
				<a href="#"><span style="opacity:.35;margin-left:15px;"><img width="180" height="65" src="{!! asset('/assets/img/time-1.png') !!}" alt=""></span></a>
			</div>
		</div>
	</div>
</div>


<!-- -->
<div id="home-fifth" name="home-fifth">
<div class="container text-center" style="background-color: none;">
	<h4 class="weight-700 letter-spacing margin-bottom-25">TESTIMONIALS FROM OUR CLIENTS</h4>
	<div class="row">
		<div class="col-md-5">
			<blockquote class="arrow_box">
				<p>I would recommend this service for anyone requiring a USCIS certified document.</p>
			</blockquote>
			<div style="margin-top: -19px;"><strong>Cameron R</strong><br><em>French to English</em></div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			<blockquote class="arrow_box">
				<p>Why would you pay more at a different website? $24.95 is cheaper than what someone else will charge you.</p>
			</blockquote>
			<div style="margin-top: -19px;"><strong>Zahra K.</strong><br><em>Arabic to English</em></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<blockquote class="arrow_box">
				<p>Sending your files is very easy. Their translators worked quick and sent me a copy within the day. The certification was exactly what I needed! Thanks!!!</p>
			</blockquote>
			<div style="margin-top: -19px;"><strong>Rachel L</strong><br><em>Spanish to English</em></div>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
			<blockquote class="arrow_box">
				<p>Documents emailed to me less than 24 hours after I made my order. So I'd say thats fast! My documents were accepted by USCIS without any holdup. I have recommended this service to several family members.</p>
			</blockquote>
			<div style="margin-top: -19px;"><strong>Barbara G.</strong><br><em>Portuguese to English</em></div>
		</div>
	</div>
</div>
</div>



<!-- -->
<div id="home-third" name="home-third" style="background:none;border-top: 1px solid #e6eaea;">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h4>Languages We Translate</h4>
			<div class="row">
				<div class="col-md-3">
					<ul>
						<li><!--<a href="/languages-albanian">-->Albanian<!--</a>--></li>
						<li><!--<a href="/languages-arabic">-->Arabic<!--</a>--></li>
						<li><!--<a href="/languages-bulgarian">-->Bulgarian<!--</a>--></li>
						<li><!--<a href="/languages-chinese-cantonese">-->Chinese (Cantonese)<!--</a>--></li>
						<li><!--<a href="/languages-chinese-mandarin-simplified">-->Chinese (Mandarin) Simplified<!--</a>--></li>
						<li><!--<a href="/languages-chinese-mandarin-traditional">-->Chinese (Mandarin) Traditional<!--</a>--></li>
						<li><!--<a href="/languages-creole">-->Creole<!--</a>--></li>
						<li><!--<a href="/languages-czech">-->Czech<!--</a>--></li>		
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><!--<a href="/languages-danish">-->Danish<!--</a>--></li>
						<li><!--<a href="/languages-dutch">-->Dutch<!--</a>--></li>
						<li><!--<a href="/languages-english">-->English<!--</a>--></li>
						<li><!--<a href="/languages-farsi">-->Farsi<!--</a>--></li>
						<li><!--<a href="/languages-french">-->French<!--</a>--></li>
						<li><!--<a href="/languages-french-canadian">-->French (Canadian)<!--</a>--></li>
						<li><!--<a href="/languages-georgian">-->Georgian<!--</a>--></li>
						<li><!--<a href="/languages-german">-->German<!--</a>--></li>
						<li><!--<a href="/languages-greek">-->Greek<!--</a>--></li>
						<li><!--<a href="/languages-hebrew">-->Hebrew<!--</a>--></li>
						<li><!--<a href="/languages-hindi">-->Hindi<!--</a>--></li>
						<li><!--<a href="/languages-hungarian">-->Hungarian<!--</a>--></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><!--<a href="/languages-indonesian">-->Indonesian<!--</a>--></li>
						<li><!--<a href="/languages-italian">-->Italian<!--</a>--></li>
						<li><!--<a href="/languages-japanese">-->Japanese<!--</a>--></li>
						<li><!--<a href="/languages-korean">-->Korean<!--</a>--></li>
						<li><!--<a href="/languages-latin">-->Latin<!--</a>--></li>
						<li><!--<a href="/languages-malay">-->Malay<!--</a>--></li>
						<li><!--<a href="/languages-norwegian">-->Norwegian<!--</a>--></li>
						<li><!--<a href="/languages-polish">-->Polish<!--</a>--></li>
						<li><!--<a href="/languages-portuguese-brazil">-->Portuguese (Brazil)<!--</a>--></li>
						<li><!--<a href="/languages-portuguese-portugal">-->Portuguese (Portugal)<!--</a>--></li>
						<li><!--<a href="/languages-punjabi">-->Punjabi<!--</a>--></li>	
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><!--<a href="/languages-romanian">-->Romanian<!--</a>--></li>
						<li><!--<a href="/languages-russian">-->Russian<!--</a>--></li>
						<li><!--<a href="/languages-serbian">-->Serbian<!--</a>--></li>
						<li><!--<a href="/languages-slovak">-->Slovak<!--</a>--></li>
						<li><!--<a href="/languages-spanish">-->Spanish<!--</a>--></li>
						<li><!--<a href="/languages-swedish">-->Swedish<!--</a>--></li>
						<li><!--<a href="/languages-tagalog">-->Tagalog<!--</a>--></li>
						<li><!--<a href="/languages-thai">-->Thai<!--</a>--></li>
						<li><!--<a href="/languages-turkish">-->Turkish<!--</a>--></li>
						<li><!--<a href="/languages-ukrainian">-->Ukrainian<!--</a>--></li>
						<li><!--<a href="/languages-urdu">-->Urdu<!--</a>--></li>
						<li><!--<a href="/languages-vietnamese">-->Vietnamese<!--</a>--></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<h4>Documents We Translate</h4>
			<div class="row">
				<div class="col-md-6">
					<ul>
						<li><a href="{!! URL::to('passport_translation') !!}">Passport</a></li>
						<li><a href="{!! URL::to('birth-certificate_translation') !!}">Birth Certificate</a></li>
						<li><a href="{!! URL::to('adoption-documents_translation') !!}">Adoption Documents</a></li>
						<li><a href="{!! URL::to('diploma_translation') !!}">Diploma</a></li>
						<li><a href="{!! URL::to('marriage-certificate_translation') !!}">Marriage Certificate</a></li>
						<li><a href="{!! URL::to('resume_translation') !!}">Resume</a></li>
						<li><a href="{!! URL::to('transcripts_translation') !!}">Transcripts</a></li>
						<li><a href="{!! URL::to('divorce-documents_translation') !!}">Divorce Documents</a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul>	
						<li><a href="{!! URL::to('bank-statements_translation') !!}">Bank Statements</a></li>
						<li><a href="{!! URL::to('tax-statements_translation') !!}">Tax Statements</a></li>
						<li><a href="{!! URL::to('patent-documents_translation') !!}">Patent Documents</a></li>
						<li><a href="{!! URL::to('business-license_translation') !!}">Business License</a></li>
						<li><a href="{!! URL::to('press-release_translation') !!}">Press Release</a></li>
						<li><a href="{!! URL::to('product-manuals_translation') !!}">Product Manuals</a></li>
						<li><a href="{!! URL::to('drivers-license_translation') !!}">Driver's License</a></li>
						<li><strong><em>... and many more!</em></strong></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
</div>


<!-- -->
<div id="dynamic_faq">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> How do you translate documents so quickly?</h6>
				<p><span style="font-weight:700;">A:</span> Our network of thousands of trained and certified translators are standing by to process each set of documents.</p>
				<hr class="pi-divider-dashed">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> What is the USCIS Acceptance Guarantee?</h6>
				<p><span style="font-weight:700;">A:</span> If your document is not accepted by USCIS, we'll provide a full refund of your translation cost.</p>
				<hr class="pi-divider-dashed">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> How do you ensure quality?</h6>
				<p><span style="font-weight:700;">A:</span> Each translator has successfully completed an extensive screening process, including an extensive translation exam with both multiple choice and free-answer responses, as well as an extensive background check.</p>
			</div>
			<div class="col-md-6">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> How do you keep my information secure?</h6>
				<p><span style="font-weight:700;">A:</span>  Your files are securely stored and transmitted using 128-bit SSL encryption, the highest level of security available.</p>
				<hr class="pi-divider-dashed">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> How do I get started?</h6>
				<p><span style="font-weight:700;">A:</span> Its simple! Upload your documents, pay securely, and we'll email you the certified translation and accompanying cover-letter.</p>
				<hr class="pi-divider-dashed">
				<h6 style="font-weight:700;"><span style="color:#609DDB;">Q:</span> How much does it cost?</h6>
				<p><span style="font-weight:700;">A:</span> For certified translations, the cost depends on the amount of pages translated. Our cost is $24.95 per page. A page is defined as: 250 words or fewer (including numbers), one-sided, and letter-size (8.5" x 11") or A4 dimensions or smaller. An excess of 250 words on a page would be considered additional pages and priced accordingly at the same rate of $24.95 per every 250 words.</p>
			</div>
		</div>
	</div>
</div>

	
<!-- -->
<div id="home-fourth" name="home-fourth" style="background: none;border-bottom: 1px solid #E6EAEA;">
<div class="container">
	<div class="text-center">
	<p>
		<a href="{!! URL::to('checkout') !!}" class="btn btn-lg btn-success" style="font-size: 18px;line-height: 20px;padding: 18px 22px;"><span style="color: #fff;">Order Now<span></a>	
	</p>
	</div>
</div>
</div>
@endsection