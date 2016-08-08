@extends('layouts.master')


	@section('title', 'Get A Quote')

	
	<!-- start the javascript section -->
	@section('jsscripts')
	<script>
			// display the currently selected language_from
			$( ".language_from" ).change(function() {
				$(".language_from_full").val($(".language_from option:selected").text());
				lang_from = 1;
				disp_languages_container();
			});
			// display the currently selected language_from
			$( ".language_to" ).change(function() {
				$(".language_to_full").val($(".language_to option:selected").text());
				lang_to = 1;
				disp_languages_container();
			});
	</script>	
	@endsection
	<!-- end the javascript section -->
	
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
		<h3>QUOTE</h3>
		
		<div class="form-group bordered">
			<div class="row">
				<div class="row col-sm-7 form-group ">
					{!! Form::open(array('method' => 'post', 'action' => 'Quote@submitquote')) !!}
					<strong>SELECT LANGUAGE</strong>
					<div class="row form-group ">
						<div class="row col-sm-6">
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
					<div class="row col-sm-6">
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
					<strong>UPLOAD YOUR DOCUMENTS</strong>
					<div class="row form-group ">
						<input type="hidden" role="uploadcare-uploader" name="qs-file" data-upload-url-base="" data-multiple="true"/>
					</div>
					<strong>CONTACT INFORMATION</strong>
					<div class="row form-group ">
						{!! Form::label('name', 'Name') !!}
						<div class="row form-group ">
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>{!! Form::text('contact_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Sam Smith','required' => true)) !!}
							</div>
						</div>
						{!! Form::label('company_name', 'Company Name') !!}
						<div class="row form-group ">
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>{!! Form::text('contact_company_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Microsoft',)) !!}
							</div>
						</div>
							{!! Form::label('email_address', 'E-mail Address') !!}
						<div class="row form-group ">
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('contact_email', '', array('class' => 'form-control', 'placeholder' => 'e.g. mail@example.com','required' => true)) !!}
							</div>
						</div>
							{!! Form::label('contact_phone', 'Phone Number') !!}
						<div class="row form-group ">
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>{!! Form::text('contact_phone', '', array('class' => 'form-control', 'placeholder' => 'e.g. +1 (410) 555-1234','required' => true)) !!}
							</div>
						</div>
						<div class="row form-group ">
							{!! Form::checkbox('notarization', '1', false, array('class' => '')) !!}
							{!! Form::label('notartize', 'Please notarize my translation.') !!}
						</div>
						<div class="row form-group ">
							{!! Form::checkbox('physical', '1', false, array('class' => '')) !!}
							{!! Form::label('phyisical', 'Please send me a physical copy.') !!}
						</div>
						<div class="row form-group ">
							{!! Form::submit('Submit Quote Request', array('class' => 'btn btn-lg btn-success')) !!}
						</div>
							{!! Form::hidden('language_from_full', 'null', array('class' => 'language_from_full')) !!}
							{!! Form::hidden('language_to_full', 'null', array('class' => 'language_to_full')) !!}
					</div>	
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->




