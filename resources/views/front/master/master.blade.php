<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vai, meninas! </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{url(mix('front/assets/css/vendor.css'))}}">
    <link rel="stylesheet" href="{{url(mix('front/assets/css/style.css'))}}">

    <!-- Modernizr JS -->
    <script src="{{url(mix('front/assets/js/modernizr.js'))}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{url(mix('front/assets/js/respond.js'))}}"></script>
    <![endif]-->
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
   @include('front.includes.header')

   @yield('content')

    @include('front.includes.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="{{url(mix('front/assets/js/vendor.js'))}}"></script>
<script src="{{url(mix('front/assets/js/main.js'))}}"></script>
    @yield('scripts')
</body>
</html>

