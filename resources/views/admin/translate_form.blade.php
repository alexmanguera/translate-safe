@extends('admin.layouts.dashboard')

@section('title', 'Transate')

@section('pageheader','Translate')

@section('pageheader_desc','')
	
@section('content')

 <!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-8">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Select Language</h3>
				</div><!-- /.box-header -->
					<div class="box-body form-group">
					{!! Form::open(array('url' => '/admin/translate', 'method' => 'post', 'enctype' => 'multipart/form-data')) !!}
					<div class="row">
						<div class="col-md-6">
						{!! Form::label('sel-language-from', 'Translating From') !!}
						{!! Form::select('language_from', 
											array(
													'' => 'Select Language',
													'al' => 'Albanian',
													'ar' => 'Arabic',
													'bg' => 'Bulgarian',
													'zh-cn' => 'Chinese (Cantonese)',
													'zh-si' => 'Chinese (Mandarin) Simplified',
													'zh-tr' => 'Chinese (Mandarin) Traditional',
													'cl' => 'Creole',
													'cs' => 'Czech',
													'da' => 'Danish',
													'nl' => 'Dutch',
													'en' => 'English',
													'fs' => 'Farsi',
													'fr' => 'French',
													'fr-ca' => 'French (Canadian)',
													'ka' => 'Georgian',
													'de' => 'German',
													'el' => 'Greek',
													'he' => 'Hebrew',
													'hi' => 'Hindi',
													'hu' => 'Hungarian',
													'id' => 'Indonesian',
													'it' => 'Italian',
													'ja' => 'Japanese',
													'ko' => 'Korean',
													'lt' => 'Latin',
													'ml' => 'Malay',
													'no' => 'Norwegian',
													'pl' => 'Polish',
													'pt-br' => 'Portuguese (Brazil)',
													'pt-pt' => 'Portuguese (Portugal)',
													'pj' => 'Punjabi',
													'ro' => 'Romanian',
													'ru' => 'Russian',
													'sb' => 'Serbian',
													'sk' => 'Slovak',
													'es' => 'Spanish',
													'sv' => 'Swedish',
													'tl' => 'Tagalog',
													'th' => 'Thai',
													'tr' => 'Turkish',
													'uk' => 'Ukrainian',
													'ur' => 'Urdu',
													'vi' => 'Vietnamese'
												),
												null, 
												['class' => 'form-control language_from', 'required' => true]
										)
						!!}
						</div>
						<div class="col-md-6">
							{!! Form::label('sel-language-to', 'Translating To') !!}
							{!! Form::select('language_to', 
												array(
														'' => 'Select Language',
														'al' => 'Albanian',
														'ar' => 'Arabic',
														'bg' => 'Bulgarian',
														'zh-cn' => 'Chinese (Cantonese)',
														'zh-si' => 'Chinese (Mandarin) Simplified',
														'zh-tr' => 'Chinese (Mandarin) Traditional',
														'cl' => 'Creole',
														'cs' => 'Czech',
														'da' => 'Danish',
														'nl' => 'Dutch',
														'en' => 'English',
														'fs' => 'Farsi',
														'fr' => 'French',
														'fr-ca' => 'French (Canadian)',
														'ka' => 'Georgian',
														'de' => 'German',
														'el' => 'Greek',
														'he' => 'Hebrew',
														'hi' => 'Hindi',
														'hu' => 'Hungarian',
														'id' => 'Indonesian',
														'it' => 'Italian',
														'ja' => 'Japanese',
														'ko' => 'Korean',
														'lt' => 'Latin',
														'ml' => 'Malay',
														'no' => 'Norwegian',
														'pl' => 'Polish',
														'pt-br' => 'Portuguese (Brazil)',
														'pt-pt' => 'Portuguese (Portugal)',
														'pj' => 'Punjabi',
														'ro' => 'Romanian',
														'ru' => 'Russian',
														'sb' => 'Serbian',
														'sk' => 'Slovak',
														'es' => 'Spanish',
														'sv' => 'Swedish',
														'tl' => 'Tagalog',
														'th' => 'Thai',
														'tr' => 'Turkish',
														'uk' => 'Ukrainian',
														'ur' => 'Urdu',
														'vi' => 'Vietnamese'
													),
													null, 
													['class' => 'form-control language_to', 'required' => true]
											)
							!!}
						</div>
					</div>
					<br>
					<strong>TEXT TO TRANSLATE</strong>
					<div class="row">
						<div class="col-md-10">
							@if(Session::has('translate_done'))
							{!! Form::textarea('texts', $texts, ['class' => 'form-control']) !!}
							@else
							{!! Form::textarea('texts', null, ['class' => 'form-control']) !!}
							@endif
						</div>
					</div>
					@if(Session::has('translate_done'))
					<strong><span class="success">RESULT</span></strong>
					<div class="row">
						<div class="col-md-10">
							{!! Form::textarea('translated', $result, ['class' => 'form-control']) !!}
						</div>
					</div>
					@endif
					<br>
					<div class="row">
						<div class="col-md-10">
							{!! Form::submit('Translate', array('class' => 'btn btn-md btn-primary')) !!}
							{!! Form::hidden('secret_key', 'a757762b97a79b6ddca87272219e5664') !!}
							{!! Form::hidden('public_key', '6dKPFntcRhVGjDpMYmBx') !!}
							{!! Form::hidden('uuid_group', 'b7eb798f-43ea-4120-8bdd-e31870eec3eb~1/') !!}
							{!! Form::hidden('order_id', '36') !!}
						</div>
					</div>		
					{!! Form::close() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
@endsection
