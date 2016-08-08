@extends('layouts.master')

@section('title', 'Pricing')


@section('content')

<!-- ==== PRICING ==== -->
<div id="pricing" name="pricing">
<div class="container">
	<h1>PRICING</h1>
	<div class="form-group bordered">
		<div class="row">
			<div class="col-md-8">
				<h4>CERTIFIED TRANSLATIONS</h4>
				<div class="row">
					<div class="col-md-12">
						<strong><img src="{!! asset('/assets/img/check.png') !!}"> What's Included?</strong>
						<ul>
							<li>USCIS Certification Page for each document.</li>
							<li>24 hour turnaround for some documents and languages.</li>
							<li>Dual Translator Review</li>
							<li>Secured Storage</li>
						</ul>
						<strong><img src="{!! asset('/assets/img/check.png') !!}"> Lowest Price Online</strong>
						<p>
						Our per-page pricing is an innovation in the crowded and expensive translation industry. We offer the lowest price online, $24.95 per page. Traditional translation agencies charge hundreds for the same documents translated.
						</p>
						<strong><img src="{!! asset('/assets/img/check.png') !!}"> Quality Guarantee</strong>
						<p>
						Our <a href="{!! URL::to('/') !!}/legal/refund-policy" target="_blank">guarantee</a> to provide you only the best quality translation ensures your document will be accepted by USCIS or any other United States Government agency.
						</p>
					</div>
				</div>
				<h4>AVAILABLE ADDONS</h4>
				<p>Each of these services is available to add to your order.</p>
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><strong>Express Translation</strong><br>Need your documents faster? We offer expedited translation speeds with the same guarantees for an extra <em>$14.95 per page</em>.</li>
							<li><strong>Notarization</strong><br>We offer notary services for an additional $19.95 fee. Our translation cover pages will come with a notary stamp and a wet-ink signature from our representative and the notary.</li>
							<li><strong>Physical Copy</strong><br>We can mail the documents (unlimited pages) we've translated to you for an additional $12.95 via rush courier. Once we've mailed your documents, you'll receive a tracking number via email. You'll still receive your documents via email free of charge. </li>
						</ul>
					</div>
				</div>
				<h4>CERTIFIED TRANSLATIONS</h4>
				<table class="table table-bordered">
					<thead>
						<tr class="table-title">
							<th></th>
							<th>Typical<br>Translation<br>Agency</th>
							<th>Online<br>Translation<br>Agency</th>
							<th>TranslateSAFE</th>
						</tr>
					</thead>
					<tbody>
						<tr class="table-highlight-none">
							<td>USCIS Guaranteed Acceptance</td>
							<td style="width: 150px;text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="width: 150px;text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
							<td style="width: 150px;text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight">
							<td>Fast, Simple, Secure Document Upload</td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight-none">
							<td>Certification Page on Company Letterhead</td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight">
							<td>24 Hour Online Chat</td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight-none">
							<td>30+ Languages</td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight">
							<td>Expedited Delivery & Translation Options</td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/cancel.png') !!}"></td>
							<td style="text-align: center;"><img src="{!! asset('/assets/img/check.png') !!}"></td>
						</tr>
						<tr class="table-highlight-none">
							<td>Price Per Page</td>
							<td style="text-align: center;">$100-$300</td>
							<td style="text-align: center;">$27-$45</td>
							<td style="text-align: center;"><strong>$24.95</strong></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4" style="text-align: center;">
				<div class="row">
					<div class="col-md" style="background-color: #609DDB; height: 140px; padding-top: 40px; color: #fff;">
						<span style="font-size: 14px; font-weight: 100;">$</span> <span style="font-size: 64px; font-weight: 100;">24.95</span> <span style="font-size: 14px; font-weight: 100;">/page</span> 
						<br><br>
						<p>
							<em>Simple Pricing. No Hidden Fees.</em>
						</p>
					</div>
				</div>
				<div class="bordered">
					<div class="col-md">
						<a href="{!! URL::to('checkout') !!}">{!! Form::button('Start Your Order', array('type' => 'submit', 'class'=> 'btn btn-lg btn-warning', 'id' => 'submit-button')) !!}</a>
					</div>
				</div>
				<br>
				<br>
				<div style="text-align: left; border: 1px solid #D5D9DD;border-radius: 3px; padding: 30px; font-size: 12px;">
					<p>
					A page is defined as: 250 words or fewer (including numbers), one-sided, and letter-size (8.5" x 11") or A4 dimensions or smaller.
					</p>
					<p>
					*Up to 2 pages for certain languages and certain document types.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection