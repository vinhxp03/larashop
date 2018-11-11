<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="source/styles/bootstrap4/bootstrap.min.css">
    <link href="source/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/animate.css">
	@stack('styles')
</head>

<body>
    <div class="super_container">

        <!-- Header -->
        @include('header') 

		{{-- Content --}}
        @yield('content')

        <!-- Footer -->
        @include('footer')

    </div>

    <script src="source/js/jquery-3.3.1.min.js"></script>
    <script src="source/styles/bootstrap4/popper.js"></script>
    <script src="source/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="source/plugins/greensock/TweenMax.min.js"></script>
    <script src="source/plugins/greensock/TimelineMax.min.js"></script>
    <script src="source/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="source/plugins/greensock/animation.gsap.min.js"></script>
    <script src="source/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="source/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="source/plugins/slick-1.8.0/slick.js"></script>
    <script src="source/plugins/easing/easing.js"></script>
    @stack('scripts')
</body>

</html>