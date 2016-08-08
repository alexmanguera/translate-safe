@extends('admin.layouts.dashboard')

@section('title', 'Quotes')

@section('pageheader','Quotes')

@section('pageheader_desc','')

@section('content')
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Browse All</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					  <table id="quotetable" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th>Quote #</th>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Customer Phone Number</th>
							<th>Language From</th>
							<th>Language To</th>
							<th>Received At</th>
							<th>Status</th>
						  </tr>
						</thead>
						<tbody>
						@foreach($result as $quote)
						  <tr>
							<td><a href="{!! URL::to('/admin/quotes/view', array($quote->quote_key_id)) !!}">{!! $quote->quote_key_id !!}</a></td>
							<td>{!! $quote->contact_name !!}</td>
							<td>{!! $quote->contact_email !!}</td>
							<td>{!! $quote->contact_phone !!}</td>
							<td>{!! $quote->language_from !!}</td>
							<td>{!! $quote->language_to !!}</td>
							<td>{!! date('d-M-Y h:i:s A', strtotime($quote->timestamp)) !!}</td>
							<td>{!! $quote->quote_status !!}</td>
						  </tr>
						 @endforeach
						</tbody>
						<tfoot>
						  <tr>
							<th>Quote #</th>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Customer Phone Number</th>
							<th>Language From</th>
							<th>Language To</th>
							<th>Received At</th>
							<th>Status</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
              </div><!-- /.box -->
			              </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection