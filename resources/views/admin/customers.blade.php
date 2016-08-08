@extends('admin.layouts.dashboard')

@section('title', 'Customers')

@section('pageheader','Customers')

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
					  <table id="customertable" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th>Customer Name</th>
							<th>Customer Email</th>
							<th>Company Name</th>
							<th>Customer Phone Number</th>
						  </tr>
						</thead>
						<tbody>
						@foreach($resultx as $customer)
						  <tr>
							<td>{!! $customer['name'] !!}</td>
							<td>{!! $customer['email'] !!}</td>
							<td>{!! $customer['company'] !!}</td>
							<td>{!! $customer['phone'] !!}</td>
						  </tr>
						 @endforeach
						</tbody>
						<tfoot>
						  <tr>
							<th>Customer Name</th>
							<th>Company Name</th>
							<th>Customer Email</th>
							<th>Customer Phone Number</th>
						  </tr>
						</tfoot>
					  </table>
					</div><!-- /.box-body -->
              </div><!-- /.box -->
			              </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection