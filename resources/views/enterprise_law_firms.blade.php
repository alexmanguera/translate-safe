@extends('layouts.master')

@section('title', 'Enterprise Law Firms')


@section('content')

<!-- ==== ENTERPRISE LAW FIRMS ==== -->
<div id="enterprise_law_firms">
	<div class="container">	
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<h3 class="text-center">Unique Translation Solution for Law Firms</h3>
					<p>
					Are you a law firm in the immigration niche thats consistently dealing with foreign language documents? An enterprise account with us enables you to access our premium features reserved for special clients.
					</p>
				</div>
				<div class="row">
					<div class="row">
						<div class="col-md-6">
							<strong>Unlimited Logins</strong>
							<p>
							Each staff member of your firm can have a login without sharing billing details. 
							</p>
						</div>
						<div class="col-md-6">
							<strong>Priority Service</strong>
							<p>
							We'll assign you a dedicated project manager and handle requests with a priority label. 
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Invoicing</strong>
							<p>
							Receive a monthly invoice via email. Our terms for payment are Net 30. 
							</p>
						</div>
						<div class="col-md-6">
							<strong>White-label Client Portal</strong>
							<p>
							We'll create a special whitelabeled (clear of all TranslateSAFE branding) checkout page for your clients to upload their documents. Setup includes adding your firms logo and contact information. 
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Corporate Confidentiality</strong>
							<p>
							We can provide a mutual non-disclosure agreement for your account, completed by all staff members and translators, or we can sign an agreement provided to us. 
							</p>
						</div>
						<div class="col-md-6">
							<strong>White-label Pricing</strong>
							<p>
							You can choose to allow clients to pay us directly, add the billed items to your monthly invoice, or you can set custom prices and receive the difference. 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row" style="padding:20px;margin-bottom:30px;">
					<div class="col-md-12" style="color: #fff;">
						<h4 style="font-weight:700;">SETUP AN ACCOUNT</h4>
							{!! Form::open(array('method' => 'post', 'url' => '/checkout')) !!}
							<input name="source" value="passport-squeeze" type="hidden">
							<input name="service" value="certified_translation" type="hidden">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										{!! Form::label('name', 'Name') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>{!! Form::text('contact_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Sam Smith')) !!}
											</div>
										</div>
										{!! Form::label('company_name', 'Company Name') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-home"></i></span>{!! Form::text('company_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Microsoft')) !!}
											</div>
										</div>
										{!! Form::label('email_address', 'E-mail Address*') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('contact_email', '', array('class' => 'form-control', 'placeholder' => 'e.g. mail@example.com','required' => true)) !!}
											</div>
										</div>
										{!! Form::label('phone', 'Phone Number*') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone"></i></span>{!! Form::text('phone', '', array('class' => 'form-control', 'placeholder' => '+123 4567890','required' => true)) !!}
											</div>
										</div>
										{!! Form::label('needs', 'Describe Your Needs (volume, etc..)') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-pencil"></i></span>{!! Form::textarea('needs', null, ['class' => 'form-control']) !!}
											</div>
										</div>
										<br>
										<button type="submit" class="btn btn-warning pull-right" style="margin-top:-2px;font-weight:700;color:#000;">SEND <span style="font-weight: 300">></span></button>
									</div>
								</div>
							</div>
							{!! Form::close() !!}
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>