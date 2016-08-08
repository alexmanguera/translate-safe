@extends('layouts.master')

@section('title', 'FAQ')


@section('content')

<!-- ==== FAQ ==== -->
<div id="faq" name="faq">
<div class="container">
	<div class="row">
	<h1>Frequently Asked Questions</h1>
		<div class="form-group bordered">
			<h4>Translations</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> What languages do you translate?</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body">
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
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Can you translate my documents?</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
									Yes, we can translate all sorts of documents including <a href="{!! URL::to('/birth-certificate_translation') !!}">birth certificate translations</a>, <a href="{!! URL::to('/transcripts_translation') !!}">transcript translations</a>, and <a href="{!! URL::to('/press-release_translation') !!}">press release translations</a>.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> What's the difference between certified and business translation?</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
								<p>
								Certified is made using our corporate letterhead and comes with a statement of certification (required by some authorities), in PDF format. Business is a high quality translation done on a plain editable Word doc. Both offer the same great TranslateSAFE quality and service 
								</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How does the translation process work?</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">
								<p>
								After your order is placed, your documents are reviewed and translated by a translator in the language you've selected. Once completed, the document is reviewed by a seperate translator for quality assurance. You will receive a link to the translated document in an email. If you've selected a physical copy, a tracking number is always provided. 
								</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group" id="accordion2">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How long does translation take?</a>
								</h4>
							</div>
							<div id="collapse5" class="panel-collapse collapse">
								<div class="panel-body">
								<p>
								The speed of translation depends on both the page count, the language, and the complexity of the source document.
								</p>
									<table class="table table-complex table-hovered table-shadow table-all-borders">
										<thead>
											<tr>
												<th>Languages</th>
												<th>Total Pages</th>
												<th>Est. Words</th>
												<th>Est. Delivery</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3">Spanish, Portuguese, Arabic, French, Chinese</td>
												<td>1-3 pages</td>
												<td>< 750 words</td>
												<td>24 hours</td>
											</tr>
											<tr>
												<td>4-8 pages</td>
												<td>750 - 2000 words</td>
												<td>48 hours</td>
											</tr>
											<tr>
												<td>9+ pages</td>
												<td>&gt; 2000 words</td>
												<td><a href="{!! URL::to('quote') !!}">Request a Quote</a></td>
											</tr>
											<tr>
												<td>All other languages</td>
												<td>Any Size</td>
												<td>Any Size</td>
												<td><a href="{!! URL::to('quote') !!}">Request a Quote</a></td>
											</tr>
										</tbody>
									</table>
									<span class="pi-text-grey">Note: Turnaround time excludes weekends and holidays.</span>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How do you translate documents so quickly?</a>
								</h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
								<div class="panel-body">
								<p>
								Speed is an important factor in every project we work on. We translate so quickly by only hiring extremely proficient translators. 
								</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How do you keep my information secure?</a>
								</h4>
							</div>
							<div id="collapse7" class="panel-collapse collapse">
								<div class="panel-body">
								<ul>
									<li>Your information is transmitted through 128-bit SSL encryption, which is the highest level of security available.</li>
									<li>Your credit card information is never stored with us, but transmitted directly to our bank for safe-keeping.</li>
									<li>We will never share your files or personal information with anyone outside of TranslateSAFE. Files are visible only to the professionals who have signed strict confidentiality agreements.</li>
								</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Do you have offices in my location?</a>
								</h4>
							</div>
							<div id="collapse8" class="panel-collapse collapse">
								<div class="panel-body">
								<p>
								TranslateSAFE is an internet company based in Baltimore, MD. Our orders are delivered via email. To keep costs low for our customers, we do not accept documents in person, do in-person consultations, or have public satellite offices. 
								</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h4>Pricing</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="panel-group" id="accordion3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse9"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How much does it cost?</a>
								</h4>
							</div>
							<div id="collapse9" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li>
											For <a href="{!! URL::to('/services/certified-translation') !!}">certified translations</a>, the cost depends on the amount of pages translated. Our cost is $24.95 per page. A page is defined as: 250 words or fewer (including numbers), one-sided, and letter-size (8.5" x 11") or A4 dimensions or smaller. <br><br>An excess of 250 words on a page would be considered additional pages and priced accordingly at the same rate of $24.95 per every 250 words.
										</li>
										<li>
											Our <a href="{!! URL::to('/services/certified-translation') !!}">business translations</a> are priced by the word. Our price is $0.12 per word with a minimum charge of $20 per order. Numbers are included in our word count.
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse10"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Can I get a quote?</a>
								</h4>
							</div>
							<div id="collapse10" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
										We are happy to provide free quotes. Please <a href="{!! URL::to('quote') !!}">fill out our quote form</a>. We'll get back to you as soon as possible (typically within the hour).
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse11"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> What is your money back guarantee?</a>
								</h4>
							</div>
							<div id="collapse11" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li>We will give you a 100% refund if your translation is not accepted by USCIS for any reason whatsoever.</li>
										<li>We also guarantee that our translations will be accepted by any US government agency or US university that requires a certified translation.</li>
									</ul>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel-group" id="accordion4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse13"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How can i pay?</a>
								</h4>
							</div>
							<div id="collapse13" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li>We accept all major credit cards as well as PayPal.</li>
										<li>Payment is made at the time of placing the order.</li>
										<li>Need large volume invoicing? Our <a href="{!! URL::to('/enterprise/law-firms') !!}">enterprise accounts for law firms</a> provide flexible payment options.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse14"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> How do i get started?</a>
								</h4>
							</div>
							<div id="collapse14" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li>Head to the <a href="{!! URL::to('/checkout') !!}">checkout page</a> and upload your documents</li>
										<li>Make payment with either a major credit card or PayPal</li>
										<li>Once completed, we'll email your the translation.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection

