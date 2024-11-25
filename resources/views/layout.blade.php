<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css')
    }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css')
    }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}"
    rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}"
    rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}"
    rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}"
    rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}"
    rel="stylesheet">
    <link rel="shortcut icon" href="{{
    asset('frontend/images') }}/ico/favicon.ico">
</head><!--/head-->

</head><!--/head-->

<body>
    <!--/header-->
    @include("elements.top")
    <!--/slider-->
    @include("elements.slide")
	<section>
		<div class="container">
			<div class="row">
			   <div class="col-sm-3">
                @include("elements.sidebar")
               </div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
@include("elements.footer")
  
    <script src="{{ asset('frontend/js/jquery.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>