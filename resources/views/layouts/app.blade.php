{{--

=========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

--}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">    {{-- attach a token to any request for a js --}}

        <title>{{ __($title) }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

        <!-- Favicon -->
        <!-- Fonts and Icon-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        
        <!-- CSS file-->
        @stack('css')

        <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset("css/demo.css") }}" rel="stylesheet" />
    </head>
    <body>
        <div class="wrapper @guest wrapper-full-page @endguest">
            @auth
                @include('layouts.navbars.sidebar')
                @include('pages.sidebarstyle')
            @endauth
            <div class="@auth main-panel @endauth">
                @include('layouts.navbars.navbar')
                @yield('content')
                @include('layouts.footer.nav')
            </div>
        </div>
    </body>
        <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <!--  jVector Map  -->
    <script src="{{ asset('js/plugins/jquery-jvectormap.js') }}" type="text/javascript"></script>
    <!--  Share Plugin -->
    <script src="{{ asset('js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <!--  DatetimePicker   -->
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <!--  Sweet Alert  -->
    <script src="{{asset('js/plugins/sweetalert2.min.js') }}" type="text/javascript"></script>
    <!--  Tags Input  -->
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
    <!--  Sliders  -->
    <script src="{{ asset('js/plugins/nouislider.js') }}" type="text/javascript"></script>
    <!--  Bootstrap Select  -->
    <script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
    <!--  jQueryValidate  -->
    <script src="{{ asset('js/plugins/jquery.validate.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <!--  Bootstrap Table Plugin -->
    <script src="{{ asset('js/plugins/bootstrap-table.js') }}"></script>
    <!--  DataTable Plugin -->
    <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <!--  Full Calendar   -->
    <script src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
    <!-- Light Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('js/demo.js') }}"></script>

    @stack('js')
    <script>
        $(document).ready(function () {
          
          $('#facebook').sharrre({
            share: {
              facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options) {
              api.simulateClick();
              api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://light-bootstrap-dashboard-pro-laravel.creative-tim.com/login'
          });

          $('#google').sharrre({
            share: {
              googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options) {
              api.simulateClick();
              api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://light-bootstrap-dashboard-pro-laravel.creative-tim.com/login'
          });

          $('#twitter').sharrre({
            share: {
              twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
              twitter: {
                via: 'CreativeTim'
              }
            },
            click: function(api, options) {
              api.simulateClick();
              api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://light-bootstrap-dashboard-pro-laravel.creative-tim.com/login'
          });
        });
      </script>
</html>