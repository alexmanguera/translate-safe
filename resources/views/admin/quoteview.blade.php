@extends('admin.layouts.dashboard')

@section('title')
	Quote # {!! $quote_key_id !!}
@stop

@section('pageheader')
	Quote # {!! $quote_key_id !!}
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
		</ul>
		<div class="tab-content">
		  <div class="tab-pane active" id="tab_1">
		  
		  <div class="row">
			<div class="col-md-7" style="padding: 50px;">
		  
				<div class="row">
				<div class="col-md">
				  <div class="box box-solid">
					<div class="box-header with-border">
					  <h3 class="box-title">Quote Items</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					 <button class="btn btn-primary">Add Service</button>
					 <button class="btn btn-success">Save</button>
					 <button class="btn btn-success">Email To Customer</button>
					 <a href="{!! URL::previous() !!}"><button class="btn btn-danger pull-right">Cancel</button></a>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
				</div><!-- /.col (right) -->
				</div>
				<div class="row">
				<div class="col-md">
				  <div class="box">
					<div class="box-body">
					  <table class="table table-bordered">
						<tr>
						  <th>Service</th>
						  <th>Quantity</th>
						  <th>Price</th>
						  <th>Subtotal</th>
						</tr>
						<tr>
							<td>
								<select class="form-control">
									<option>Certified and Notarized</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								</select>
								<input type="text" class="form-control" id="input1a" placeholder="Memo">
							</td>
							<td>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</td>
							<td>
								<input type="text" class="form-control" id="input1b" placeholder="0.00" value="0.00">
							</td>
							<td>
								<input type="text" class="form-control" id="input1c" placeholder="0.00" value="0.00" disabled="disabled">
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control">
									<option>E-mail</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								</select>
								<input type="text" class="form-control" id="input2a" placeholder="Memo">
						  </td>
							<td>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</td>
							<td>
								<input type="text" class="form-control" id="input2b" placeholder="0.00" value="0.00">
							</td>
							<td>
								<input type="text" class="form-control" id="input2c" placeholder="0.00" value="0.00" disabled="disabled">
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control">
									<option>Certified Translation</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								</select>
								<input type="text" class="form-control" id="input2a" value="12 Pages">
						  </td>
							<td>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</td>
							<td>
								<input type="text" class="form-control" id="input2b" placeholder="0.00" value="0.00">
							</td>
							<td>
								<input type="text" class="form-control" id="input2c" placeholder="0.00" value="0.00" disabled="disabled">
							</td>
						</tr>
						<tr>
							<td>
								<select class="form-control">
									<option>Standard Turnaround</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 5</option>
								</select>
								<input type="text" class="form-control" id="input2a" value="2-3 Days">
						  </td>
							<td>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</td>
							<td>
								<input type="text" class="form-control" id="input2b" placeholder="0.00" value="0.00">
							</td>
							<td>
								<input type="text" class="form-control" id="input2c" placeholder="0.00" value="0.00" disabled="disabled">
							</td>
						</tr>
						<tr>
							<th colspan="3" class="text-right">
								Total
							</th>
							<td>
								$0.00
							</td>
						</tr>
					  </table>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
				</div><!-- /.col (right) -->
				</div>
				<div class="row">
					<div class="col-md-6">
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="col-md-6">
						<select class="form-control">
							<option>Select Expiration Time</option>
							<option>option 2</option>
							<option>option 3</option>
							<option>option 4</option>
							<option>option 5</option>
						</select>
						<input type="text" class="form-control" id="input3a" value="2-3 Days">
					</div>
				</div>
			
			  </div>
			  <div class="col-md-5" style="padding: 50px;">
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
									  <td>{!! $contact_name !!}</td>
									  <td>{!! $contact_email !!}</td>
									</tr>
									<tr>
									  <th>Company</th>
									  <th>Phone Number</th>
									</tr>
									<tr>
									  <td>{!! $contact_company_name !!}</td>
									  <td>{!! $contact_phone !!}</td>
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
								<h3 class="box-title">Quote Status</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							 <div class="box">
								<div class="box-body no-padding">
								  <table class="table table-condensed">
									<tbody>
									<tr>
									  <th style="width: 50%">Current Status</th>
									  <th>Received At</th>
									</tr>
									<tr>
									  <td>Awaiting Payment</td>
									  <td>{{ date('F jS, Y', strtotime($timestamp)) }}<br>{{ date('h:i:s A', strtotime($timestamp)) }}</td>
									</tr>
									<tr>
									  <th>Expires At</th>
									  <th>Paid At</th>
									</tr>
									<tr>
									  <td><em>No expiration date set</em></td>
									  <td><em>Unpaid</em></td>
									</tr>
									<tr>
									  <td><a href="#" target="blank">View Quote Page <span class="glyphicon glyphicon-new-window"></span></a></td>
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
								<h3 class="box-title">Quote Details</h3>
							</div><!-- /.box-header -->
							<div class="box-body">
							 <div class="box">
								<div class="box-body no-padding">
								  <table class="table table-condensed">
									<tbody>
									<tr>
									  <th style="width: 50%">Translating From</th>
									  <th>Translating To</th>
									</tr>
									<tr>
									  <td>{!! $language_from !!}</td>
									  <td>{!! $language_to !!}</td>
									</tr>
								  </tbody>
								 </table>
								</div><!-- /.box-body -->
							  </div>
							</div><!-- /.box-body -->
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
						@foreach($result2 as $quote_file)
						<tr>
						  <td>{!! Form::checkbox('uuid[]', $quote_file->uuid, false, array('class' => '')) !!}</td>
						  <td><a target="_blank" href="{!! $quote_file->original_file_url !!}">{!! $quote_file->original_filename !!}</a></td>
						  <td>{!! $quote_file->upload_type !!}</td>
						  <td>
							{!! number_format($quote_file->size) !!}
							@if(strlen($quote_file->size) >= 4)
							KB
							@else
							B
							@endif
						  </td>
						  <td>{!! File::extension($quote_file->original_filename) !!}</td>
						  <td>{{ date('d-M-Y h:i:s A', strtotime($quote_file->datetime_uploaded)) }}</td>
						</tr>
						@endforeach
					  </tbody>
					 </table>
					</div><!-- /.box-body -->
				  </div>
				<input type="submit" class="btn btn-danger pull-left" value="Delete">
				{!! Form::hidden('origin', 'quote') !!}
				{!! Form::hidden('quoteid', $quote_key_id) !!}
				{!! Form::close() !!}
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