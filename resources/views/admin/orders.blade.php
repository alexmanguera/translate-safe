@extends('admin.layouts.dashboard')

@section('title', 'Orders')

@section('pageheader','Orders')

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
					  <table id="ordertable" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th>Order</th>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Language From</th>
							<th>Language To</th>
							<th>Received At</th>
							<th>Status</th>
							<th>Total</th>
						  </tr>
						</thead>
						<tbody>
						@foreach($result as $order)
						  <tr>
							<td><a href="{!! URL::to('/admin/order/view', array($order->checkout_id)) !!}">{!! $order->checkout_id !!}</a></td>
							<td>{!! $order->checkout_name !!}</td>
							<td>{!! $order->checkout_email !!}</td>
							<td>{!! $order->checkout_language_from !!}</td>
							<td>{!! $order->checkout_language_to !!}</td>
							<td>{!! date('d-M-Y h:i:s A', strtotime($order->timestamp)) !!}</td>
							@if($order->checkout_status == 'Received')
							<td><span class="label label-warning">{!! $order->checkout_status !!}</span></td>
							@elseif($order->checkout_status == 'In Progress')
							<td><span class="label label-primary">{!! $order->checkout_status !!}</span></td>
							@elseif($order->checkout_status == 'Completed')
							<td><span class="label label-success">{!! $order->checkout_status !!}</span></td>
							@else
							<td>{!! $order->checkout_status !!}</td>
							@endif
							<td>${!! $order->checkout_order_total !!}</td>
						  </tr>
						 @endforeach
						</tbody>
						<tfoot>
						  <tr>
							<th>Order</th>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Language From</th>
							<th>Language To</th>
							<th>Received At</th>
							<th>Status</th>
							<th>Total</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
              </div><!-- /.box -->
			              </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection