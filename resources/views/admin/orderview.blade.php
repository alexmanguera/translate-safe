@extends('admin.layouts.dashboard')

@section('title')
	Order # {!! $checkout_id !!}
@stop

@section('pageheader')
	Order # {!! $checkout_id !!}
@stop
@section('pageheader_desc','')

@section('content')
<div class="row">
	<div class="col-md-fluid">
	  <!-- Custom Tabs -->
	  <div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#tab_1" data-toggle="tab">Details</a></li>
		  <li><a href="#tab_2" data-toggle="tab">Files</a></li>
		  <li><a href="#tab_3" data-toggle="tab">Transactions</a></li>
		  <li><a href="#tab_4" data-toggle="tab">Quote</a></li>
		  <li><a href="#tab_5" data-toggle="tab">Shipments</a></li>
		</ul>
		<div class="tab-content">
		  <div class="tab-pane active" id="tab_1">
		  
		  <div class="row">
			<div class="col-md-7" style="padding: 50px;">
		  
				<div class="row">
					<div class="col-md">
						<div class="box box-solid">
							<div class="box-header with-border">
							<h3 class="box-title">Customer Information</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							<div class="box">
								<div class="box-body no-padding">
									<table class="table table-condensed">
										<tbody>
											<tr>
												<th style="width: 50%">Name</th>
												<th>Email</th>
											</tr>
											<tr>
												<td>{!! $checkout_name !!}</td>
												<td>{!! $checkout_email !!}</td>
											</tr>
											<tr>
												<th>Address</th>
												<th>Phone Number</th>
											</tr>
											<tr>
												<td><em>No address data available</em></td>
												<td><em>None Provided</em></td>
											</tr>
										</tbody>
									</table>
								</div><!-- /.box-body -->
							</div>
						</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div><!-- /.col (right) -->
				</div>
				
				<div class="row">
					<div class="col-md">
						<div class="box box-solid">
							<div class="box-header with-border">
							<h3 class="box-title">Order Information</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							<div class="box">
								<div class="box-body no-padding">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<th>Service</th>
												<th>Quantity</th>
												<th>Price</th>
											</tr>
											<tr>
												<td>Standard Turnaround</td>
												<td>1</td>
												<td>$0.00</td>
											</tr>
											<tr>
												<td>E-mail</td>
												<td>1</td>
												<td>$0.00</td>
											</tr>
											<tr>
												<td>Certification</td>
												<td>1</td>
												<td>$0.00</td>
											</tr>
											<tr>
												<td>Certified Translation</td>
												<td>1</td>
												<td>$0.00</td>
											</tr>
											<tr>
												<th colspan="2"></th>
												<th><strong>${!! $checkout_order_total !!}</strong></th>
											</tr>
											<tr>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div><!-- /.box-body -->
							</div>
						</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div><!-- /.col (right) -->
				</div>
			
			  </div>
			  <div class="col-md-5" style="padding: 50px;">
				<div class="row">
					<div class="col-md">
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Order Status</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							 <div class="box">
								<div class="box-body no-padding">
								  <table class="table table-condensed">
									<tbody>
										<tr>
										  <td><strong>Current Status</strong><br>{!! $checkout_status !!}</td>
										  <td><strong>Job Order No. (OHT)</strong><br>{!! $oht_translation_project_id !!}</td>
										</tr>
										<tr>
										  <td><strong>Received At</strong><br>{{ date('F jS, Y', strtotime($timestamp)) }}<br>{{ date('h:i:s A', strtotime($timestamp)) }}</td>
										  <td></td>
										</tr>
								  </tbody>
								 </table>
								</div><!-- /.box-body -->
							  </div>
							</div><!-- /.box-body -->
							<div class="box-header with-border">
							{!! Form::open(array('name' => 'form_order_status', 'method' => 'post', 'action' => 'Admin\Admin@order_update_status')) !!}
								<div class="row">
									<div class="col-md-6">
										<select name="order_status" class="form-control">
											<option {!! ($checkout_status == 'Received' ? 'selected="selected"' : '') !!} value="Received">Received</option>
											<option {!! ($checkout_status == 'In Progress' ? 'selected="selected"' : '') !!} value="In Progress">In Progress</option>
											<option {!! ($checkout_status == 'Completed' ? 'selected="selected"' : '') !!} value="Completed">Completed</option>
										</select>
									</div>
									<div class="col-md-6">
										<input type="submit" class="btn btn-default form-control" id="input2a" value="Update Status">
									</div>
								</div>
							{!! Form::hidden('order_id', $checkout_id) !!}
							{!! Form::hidden('uuid_group', $uploadcare_uuid_group) !!}
							{!! Form::hidden('language_from', $checkout_language_from) !!}
							{!! Form::hidden('language_to', $checkout_language_to) !!}
							{!! Form::close() !!}
							</div><!-- /.box-header -->
						</div><!-- /.box -->
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Order Details</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							 <div class="box">
								<div class="box-body no-padding">
								  <table class="table table-condensed">
									<tbody>
									<tr>
									  <td><strong>Translating From</strong><br>{!! $checkout_language_from !!}</td>
									  <td><strong>Translating To</strong><br>{!! $checkout_language_to !!}</td>
									</tr>
									<tr>
									  <th>Status Page<br><a href="#" target="blank">View Status Page <span class="glyphicon glyphicon-new-window"></span></a></th>
									  <th></th>
									</tr>
									<tr>
									  <td><strong>Additional Details</strong><br><em>No aditional details provided</em></td>
									  <td></td>
									</tr>
								  </tbody>
								 </table>
								</div><!-- /.box-body -->
							  </div>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>
				</div>
				
				<div class="row">
					<div class="col-md">
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Notes</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							 <div class="box">
								<div class="box-body no-padding">
								  
								</div><!-- /.box-body -->
							  </div>
							</div><!-- /.box-body -->
							<div class="box-header with-border">
							{!! Form::open(array('name' => 'form_order_notes', 'method' => 'post', 'action' => 'Admin\Admin@order_update_notes')) !!}
								<textarea name="order_notes" class="form-control" rows="3">{!! $checkout_notes !!}</textarea>
								<div class="box-header with-border">
									<div class="row">
										<div class="col-md">
											<input type="submit" class="btn btn-default form-control" id="input2a" value="Save Notes">
										</div>
									</div>
								</div>
							{!! Form::hidden('order_id', $checkout_id) !!}
							{!! Form::close() !!}
							</div><!-- /.box-header -->
						</div><!-- /.box -->
					</div>
				</div>
				
				
			  </div>
			</div>
			
		  </div><!-- /.tab-pane -->
		  
		  
		  
		  
		  <div class="tab-pane" id="tab_2">
		  <div class="row">
		  <div class="col-md-8" style="padding: 50px;">
			  <div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Files</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
				 <div class="box">
					<div class="box-body no-padding">
					  <table class="table table-bordered">
						<tbody>
						<tr>
						  <th></th>
						  <th>File Name</th>
						  <th>Type</th>
						  <th>Size</th>
						  <th>Extension</th>
						  <th>Uploaded At</th>
						</tr>
						{!! Form::open(array('method' => 'post', 'action' => 'Admin\Admin@delete_uploadcare_file')) !!}
						@foreach($result2 as $order_file)
						<tr>
						  <td>{!! Form::checkbox('uuid[]', $order_file->uuid, false, array('class' => '')) !!}</td>
						  <td><a target="_blank" href="{!! $order_file->original_file_url !!}">{!! $order_file->original_filename !!}</a></td>
						  <td>{!! $order_file->upload_type !!}</td>
						  <td>
							{!! number_format($order_file->size) !!}
							@if(strlen($order_file->size) >= 4)
							KB
							@else
							B
							@endif
						  </td>
						  <td>{!! File::extension($order_file->original_filename) !!}</td>
						  <td>{{ date('d-M-Y h:i:s A', strtotime($order_file->datetime_uploaded)) }}</td>
						</tr>
						@endforeach
					  </tbody>
					 </table>
					</div><!-- /.box-body -->
				  </div>
				<input type="submit" class="btn btn-danger pull-left" value="Delete">
				{!! Form::hidden('origin', 'order') !!}
				{!! Form::hidden('orderid', $checkout_id) !!}
				{!! Form::close() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		  </div>
		  </div>
		  </div><!-- /.tab-pane -->
		  
		  
		  <div class="tab-pane" id="tab_3">
		  <div class="row">
			<div class="col-md-4" style="padding: 50px;">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Transactions</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					 <div class="box">
						<div class="box-body">
							<strong>Amount</strong>
							<div class="input-group col-md-8">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control" placeholder="0.00">
							</div>
							<br>
							<button class="btn btn-default">Refund Amount</button>
						</div><!-- /.box-body -->
					  </div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
		  </div><!-- /.tab-pane -->
		  
		  
		  
		  <div class="tab-pane" id="tab_4">
		  <div class="row">
		  <div class="col-md-8" style="padding: 50px;">
			  <div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Quotes</h3>
				</div><!-- /.box-header -->
				
			</div><!-- /.box -->
		  </div>
		  </div>
		  </div><!-- /.tab-pane -->
		  
		  
		  
		  <div class="tab-pane" id="tab_5">
		  <div class="row">
		  <div class="col-md-8" style="padding: 50px;">
			  <div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Shipments</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
				 <div class="box">
					<div class="box-body no-padding">
					  
					  
					</div><!-- /.box-body -->
				  </div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		  </div>
		  </div>
		  </div><!-- /.tab-pane -->
		</div><!-- /.tab-content -->
	  </div><!-- nav-tabs-custom -->
	</div><!-- /.col -->
</div>
@endsection