<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from cosmoadmin.com/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Nov 2018 05:09:54 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cosmo - Responsive Dashboard Admin Template">
    <meta name="author" content="Akshay Kumar">
    <base href="{{asset('')}}">
    <link rel="icon" href="backend/images/favicon.ico">
    <!-- Messgaes CSS -->
    <link href="backend/css/pages/messages.css" rel="stylesheet">
    <!-- Base CSS -->
    <link rel="stylesheet" href="backend/css/basestyle/style.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="backend/css/daterangepicker/daterangepicker.css" />
    <!-- Full Calendar Icons -->
    <link href="backend/css/fullcalendar/fullcalendar.css" rel="stylesheet">
    <title>Cosmo - Responsive Dashboard Admin Template</title>
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
      @yield('content')

    </section>
    {{-- Modal Aplication --}}
    @include('backend.modal')

    <a target="_blank" href="{{route('trang-chu')}}" class="buynow-btn btn btn-success text-white"><span class="material-icons mr-2 align-middle"><i class="material-icons d-block mb-1">home</i></span> <span class="text">Trang chính</span></a>
    <!-- ChartJS -->
    <script src="backend/js/chartjs/Chart.js"></script>
    <script src="backend/js/chartjs/utils.js"></script>
    <script src="backend/js/lib/moment.min.js"></script>
    <script src="backend/js/lib/jquery.min.js"></script>
    <script src="backend/js/lib/popper.min.js"></script>
    <script src="backend/js/bootstrap/bootstrap.min.js"></script>
    <script src="backend/js/chosen-js/chosen.jquery.js"></script>
    <script src="backend/js/fullcalendar/fullcalendar.js"></script>
    <script src="backend/js/daterangepicker/daterangepicker.min.js"></script>
    <script src="backend/js/custom.js"></script>
    <script src="backend/js/pages/dashboard.script.js"></script>

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