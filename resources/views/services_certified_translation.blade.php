@extends('layouts.master')

@section('title', 'Certified Translations')


@section('content')

<!-- ==== CERTIFIED TRANSLATIONS ==== -->

<div class="container">
	<div style="padding-top: 110px;"></div>
	<div class="row">
		<div class="col-md-6" style="margin-top:-10px;">
			<h3>Certified Translation</h3>
		</div>
		<div class="col-md-6 pull-right text-right">
		<ol class="breadcrumb" style="background-color: transparent;">
			<li><a href="{!! URL::to('/') !!}">Home</a></li>
			<li><a href="#">Services</a></li>
			<li class="active">Certified Translation</li>
		</ol>
		</div>
	</div>
</div>
	
	
<!-- ==== HEADERWRAP ==== -->
<div id="services_certified_translation" name="services_certified_translation">
	<div class="fill_background">
	  <header class="clearfix">
		<h3>CERTIFIED TRANSLATION FOR IMMIGRATION</h3>
		<p>
			Securely upload your files and have our professional translators prepare & certify your documents.
		</p>
		<p>
		<a href="{!! URL::to('checkout') !!}" class="btn-big btn-warning certified-btn-a">Start Your Order</a> 
		&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;
		<a href="{!! URL::to('checkout') !!}" class="btn-big btn-default certified-btn-b">Get a Free Quote</a>
		</p>
	</div>
</div>
<!-- /headerwrap --> 


<!-- -->
<div id="home-second" name="home-second">
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
	
</div>
</div>


<!-- -->
<div id="home-third" name="home-third">
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
<div id="home-fifth" name="home-fifth">
<div class="container text-center">
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
<div id="home-fourth" name="home-fourth">
<div class="container">
	<div class="text-center">
	<p>
		<h3>Ready to get started?</h3>
		<a href="{!! URL::to('checkout') !!}" class="btn btn-lg btn-warning"><span style="color: #fff;">Start Your Order<span></a>	
	</p>
	</div>
</div>
</div>
@endsection