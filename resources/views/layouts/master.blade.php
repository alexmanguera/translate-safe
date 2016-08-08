<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>@yield('title') | TranslateSAFE</title>

<!-- Bootstrap core CSS -->
<link href="{!! asset('/assets/css/bootstrap.css') !!}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{!! asset('/assets/css/main.css') !!}" rel="stylesheet">
<link href="{!! asset('/assets/css/font-awesome.min.css') !!}" rel="stylesheet">
<link href="{!! asset('/assets/css/animate-custom.css') !!}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script src="{!! asset('/assets/js/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/assets/js/modernizr.custom.js') !!}"></script>
<script src="{!! asset('/assets/js/jquery.payment.js') !!}"></script>
<script>
	UPLOADCARE_LOCALE = "en";
	UPLOADCARE_TABS = "file gdrive dropbox skydrive";
	//UPLOADCARE_PUBLIC_KEY = "5040c4f4e8f90bd0da34"; // old sandbox
	UPLOADCARE_PUBLIC_KEY = "43e80fc682364d8060be";

	uploadcare.openDialog(null, {
	multiple: true
	}).done(function(file) {
		file.promise().done(function(fileInfo){
		console.log(fileInfo.cdnUrl);
		});
	});
</script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3PBlvZn5tMnD3KF6b4FtagJLb0s0JbrP";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<!--<script charset="utf-8" src="//ucarecdn.com/widget/2.4.4/uploadcare/uploadcare.full.min.js"></script>-->
<script charset="utf-8" src="{!! asset('/assets/js/uploadcare.full.min.js') !!}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
//browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
	//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700;
</script>
<style>
a .active {
	color: #609DDB;
}
#about {
	padding-top: 150px;
	background-color: #f8fafa;
}

.tab-pane {
	border: 1px solid #ddd;
	border-top: 1px solid transparent;
	background-color: #fff;
	padding: 20px;
}

.bottom-dashed {
	border-bottom: 1px dashed #d6dfdf;
	padding-bottom: 9px;
	padding-top: 9px;
}

#footerwrap {
	background: transparent;
	border: none;
	background-color: #f8fafa;
}


.cd-top.cd-is-visible {
  /* the button becomes visible */
  visibility: visible;
  opacity: 1;
}
.cd-top.cd-fade-out {
  /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
  opacity: .5;
}
#topcontrol {
	bottom: 35px !important;
}
</style>
@yield('cssstyle')
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
		@if(!str_contains(Request::url(), 'checkout'))
			<a href="{!! URL::to('/') !!}"><img src="{!! asset('/assets/img/logo-color.png') !!}"></a>
		@else
			<img src="{!! asset('/assets/img/logo-color.png') !!}">
		@endif
		<!--
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#home"><i class="fa fa-location-arrow"></i> Ascend</a> 
		-->
	  </div>
	  @if(!str_contains(Request::url(), 'checkout') && !str_contains(Request::url(), 'quote'))
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li {!! Request::is('/') ? 'class="active"' : '' !!}> <a href="{!! URL::to('/') !!}" class="smoothScroll">Home</a></li>
          <li {!! Request::is('faq') ? 'class="active"' : '' !!}> <a href="{!! URL::to('faq') !!}" class="smoothScroll"> FAQ</a></li>
          <li {!! Request::is('pricing') ? 'class="active"' : '' !!}> <a href="{!! URL::to('pricing') !!}" class="smoothScroll"> Pricing</a></li>
          <li {!! Request::is('reviews') ? 'class="active"' : '' !!}> <a href="{!! URL::to('reviews') !!}#" class="smoothScroll"> Reviews</a></li>
          <li {!! Request::is('about') ? 'class="active"' : '' !!}> <a href="{!! URL::to('about-us') !!}" class="smoothScroll"> About Us</a></li>
          <li {!! Request::is('quote') ? 'class="active"' : '' !!}> <a href="{!! URL::to('quote') !!}" class="smoothScroll"> Free Quote</a></li>
		  <li><a href="{!! URL::to('checkout') !!}">{!! Form::button('Order Now', array('type' => 'submit', 'class'=> 'btn btn-md btn-success', 'id' => 'submit-button')) !!}</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
	  @endif
    </div>
  </div>
</div>

@yield('content')
 

@if(!str_contains(Request::url(), 'checkout') && !str_contains(Request::url(), 'quote'))
<!-- -->
<div id="footer-custom" name="footer-custom">
<div class="container">
	
	<div class="row">
		<div class="col-md-3">
			<h4>SERVICES</h4>
			<ul class="list-with-icons list-icons-right-open link-no-style">
				<li><a href="{!! URL::to('/services/certified-translation') !!}">Certified Translation</a></li>
				<li><a href="{!! URL::to('/pricing') !!}">Pricing</a></li>
				<li><a href="{!! URL::to('/enterprise/law-firms') !!}">Law Firms</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h4>SUPPORT</h4>
			<ul class="list-with-icons list-icons-right-open link-no-style">
				<li><a href="{!! URL::to('/faq') !!}">Frequently Asked Questions</a></li>
				<li><a href="{!! URL::to('/order/status') !!}">Order Status</a></li>
				<li><a href="{!! URL::to('/about-us') !!}">Our Company</a></li>
				<li><a href="{!! URL::to('/about-us/contact-us') !!}">Contact Us</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h4>POLICIES</h4>
			<ul class="list-with-icons list-icons-right-open link-no-style">
				<li>
					<a href="{!! URL::to('/') !!}/legal/privacy-policy" target="_blank">Privacy Policy</a>
				</li>
				<li>
					<a href="{!! URL::to('/') !!}/legal/terms-of-service" target="_blank">Terms of Service</a>
				</li>
				<li>
					<a href="{!! URL::to('/') !!}/legal/refund-policy" target="_blank">Refund &amp; Guarantee Policy</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6">
					<img src="{!! asset('/assets/img/norton.png') !!}" width="120" height="65" style="display:inline;">
				</div>
				<div class="col-md-6">
					<br>
					 <img src="{!! asset('/assets/img/uscis.png') !!}" width="105" height="32" style="margin-left:5px;display:inline;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<br>
					<img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png" border="0" alt="Secured by PayPal">
				</div>
			</div>	
		</div>

	</div>
</div>	
</div>	
@endif
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow27.js"></script>

	
<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2015</span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>



<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript" src="{!! asset('/assets/js/bootstrap.min.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('/assets/js/retina.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('/assets/js/jquery.easing.1.3.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('/assets/js/smoothscroll.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('/assets/js/jquery-func.js') !!}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69049607-1', 'auto');
  ga('send', 'pageview');

</script>
@yield('jsscripts')
@if(str_contains(Request::url(), 'checkout'))
<script>
(function() {
	setTimeout(function() {
	var __redirect_to = '{!! URL::to('/') !!}';

	var _tags = ['button', 'input', 'a'], _els, _i, _i2;
	for(_i in _tags) {
		_els = document.getElementsByTagName(_tags[_i]);
		for(_i2 in _els) {
			if((_tags[_i] == 'input' && _els[_i2].type != 'button' && _els[_i2].type != 'submit' && _els[_i2].type != 'image') || _els[_i2].target == '_blank') continue;
			_els[_i2].onclick = function() {window.onbeforeunload = function(){};}
		}
   }

	window.onbeforeunload = function() {
		setTimeout(function() {
			window.onbeforeunload = function() {};
			setTimeout(function() {
				//document.location.href = __redirect_to;
			}, 500);
		},5);
		return 'Your order is not yet complete!\n\rIf you leave, your order information will be lost and will have to start from Step 1.\n\r'
	}
	}, 500);
})();
</script>
@endif
</body>
</html>