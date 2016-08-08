@extends('layouts.master')


	@section('title', 'Quote')

	
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#details">Details</a></li>
		<li><a data-toggle="tab" href="#files">Files</a></li>
	</ul>

	<div class="tab-content form-group">
		<div class="tab-pane fade in active" id="details">
			<div class="row">
			<div class="row col-sm-6">	
				<h4>QUOTE INFORMATION</h4>
				<div class="row bottom-dashed">	
					  <div class="col-sm-6"><strong>Quote Number</strong></div>
					  <div class="col-sm-6 text-right">{!! $quote_key_id !!}</div>
				</div>
				<div class="row bottom-dashed">
					  <div class="col-sm-6"><strong>Status</strong></div>
					  <div class="col-sm-6 text-right">Requested</div>
				</div>
				<div class="row bottom-dashed">
					  <div class="col-sm-6"><strong>Received On</strong></div>
					  <div class="col-sm-6 text-right">{!! $curr_datetime !!}</div>
				</div>
				<div class="row bottom-dashed">
					  <div class="col-sm-6"><strong>Translating From</strong></div>
					  <div class="col-sm-6 text-right">{!! $language_from_full !!}</div>
				</div>
				<div class="row bottom-dashed">
					  <div class="col-sm-6"><strong>Translating To</strong></div>
					  <div class="col-sm-6 text-right">{!! $language_to_full !!}</div>
				</div>
			</div>
			<div class="row col-sm-6">
				<div class="row">
					  <div class="col-sm-6-fluid">
						<h5>Quote Requested</h5>
						<p>We've successfully received your quote request and we're preparing it now.</p>
					  </div>
				</div>
			</div>
			</div>
		</div>
		<div class="tab-pane fade" id="files">
			<p>
				@foreach($quote_files as $quote_file)
				<div class="row bottom-dashed">
					<div class="col-sm-3 text-right">
						<a target="_blank" href="{!! $quote_file->original_file_url !!}">{!! $quote_file->original_filename !!}</a>
					</div>
					<div class="col-sm-3">
						size: {!! number_format($quote_file->size) !!}
						@if(strlen($quote_file->size) >= 4)
						kb
						@else
						b
						@endif
					</div>
				</div>
				@endforeach
			</p>
		</div>
	</div>
	
				
			
	</div>
	</div>

		
	</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->