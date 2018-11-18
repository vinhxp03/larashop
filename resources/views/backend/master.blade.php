<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from cosmoadmin.com/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Nov 2018 05:09:54 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cosmo - Responsive Dashboard Admin Template">
    <meta name="author" content="Akshay Kumar">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <link rel="icon" href="backend/images/favicon.ico">
    <!-- Messgaes CSS -->
    <link href="backend/css/pages/messages.css" rel="stylesheet">
    <!-- Base CSS -->
    <link rel="stylesheet" href="backend/css/basestyle/style.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cosmo - Responsive Dashboard Admin Template</title>
    @stack('styles')
  </head>
  <body>
    <!-- Pre Loader-->
    <div class="loader-wrapper">
      <div class="spinner">
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
          <circle class="length" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
          <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
          <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
          <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
      </div>
    </div>
    <!-- Pre Loader-->
    <section class="wrapper">
      <!-- SIDEBAR -->
      @include('backend.sidebar')
      
      <!--RIGHT CONTENT AREA-->
      <div class="content-area">
        @include('backend.header')

        <div class="content-wrapper">
          @yield('content')
         
          <footer class="footer">
            <p class="text-muted m-0"><small class="float-right">Made with <span class="material-icons md-16 text-danger align-middle">favorite</span> by Akshay Kumar </small><small >FreakPixels © 2016–2018 - freakpixels.com</small></p>
          </footer>
        </div>
      </div>

    </section>
    {{-- Modal Aplication --}}
    @include('backend.modal')

    <a target="_blank" href="{{route('trang-chu')}}" class="buynow-btn btn btn-success text-white"><span class="material-icons mr-2 align-middle"><i class="material-icons d-block mb-1">home</i></span> <span class="text">Trang chính</span></a>
    
    <script src="backend/js/lib/moment.min.js"></script>
    <script src="backend/js/lib/jquery.min.js"></script>
    <script src="backend/js/lib/popper.min.js"></script>
    <script src="backend/js/bootstrap/bootstrap.min.js"></script>
    <script src="backend/js/chosen-js/chosen.jquery.js"></script>
    <script src="backend/js/form-submit/change-pass.js"></script>
    @stack('scripts')
    <script src="backend/js/custom.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56821827-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-56821827-7');
    </script>
  </body>
  <!-- Mirrored from cosmoadmin.com/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Nov 2018 05:10:21 GMT -->
</html>