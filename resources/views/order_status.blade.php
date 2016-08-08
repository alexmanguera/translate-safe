@extends('layouts.master')

@section('title', 'Find Order Status')


@section('content')

<!-- ==== ORDER STATUS ==== -->

<div id="find_order_status">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-offset-4 col-md-4">
				<h1>ORDER STATUS</h1>
				<div class="bordered">
					{!! Form::open(array('method' => 'post', 'url' => '/checkout')) !!}
					<input name="source" value="passport-squeeze" type="hidden">
					<input name="service" value="certified_translation" type="hidden">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="row form-group ">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address','required' => true)) !!}
									</div>
								</div>
								<div class="row form-group ">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>{!! Form::text('order_number', '', array('class' => 'form-control', 'placeholder' => 'Order Number','required' => true)) !!}
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-block btn-primary" style="margin-top:-2px;font-weight:700;color:#fff;">GET STATUS</button>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection