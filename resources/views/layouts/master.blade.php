{{-- <!doctype html>
<html>
<head>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Diba Sinistre</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Fontfaces CSS-->
    <link href="{{asset('plugins/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('plugins/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('plugins/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <link  href="{{asset('plugins/css/Stylefichier.css')}}"  rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('plugins/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body>
    <div id="app">
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <H3><strong>DIBA SINISTRE</strong> </H3>
                    </div>

                    <div class="header__tool">
                          <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">

                                    <div class="content">
                                        <a class="js-acc-btn" style="color:rgb(111, 126, 225); font-size:25px; " href="#"><strong>{{Session::get('name')}}</strong> </a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer" style="color:rgb(111, 126, 225); background-color:rgb(111, 126, 225);" >

                                                <a class="nav-link text-dark" style="color:rgb(246, 251, 249);" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>
                                <strong>    {{ __('Déconnexion') }}</strong>
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="py-4">
            @if (session()->has('message'))
            <div class="alert alert-success" style ="text-align: center" role="alert">
            <strong>{{ session()->get('message')}}</strong>
              </div>
            @endif
            @yield('content')
        </main>
    </div>


    <!-- Main JS-->

    <script src="{{asset('plugins/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('plugins/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- plugins/Vendor JS       -->
    <script src="{{asset('plugins/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('plugins/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('plugins/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('plugins/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('plugins/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/select2/select2.min.js')}}">
    </script>

    <script src="{{asset('plugins/js/main.js')}}"></script>
</body>
</html> --}}







<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/feather/feather.css') !!}">
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/ti-icons/css/themify-icons.css') !!}">
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/css/vendor.bundle.base.css') !!}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/datatables.net-bs4/dataTables.bootstrap4.css') !!}">
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/ti-icons/css/themify-icons.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('/new-style/js/select.dataTables.min.css') !!}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{!! asset('/new-style/css/vertical-layout-light/style.css') !!}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{!! asset('/new-style/images/favicon.png ') !!}" />

  <link rel="stylesheet" href="{!! asset('/new-style/css/dataTable/dataTables.bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/new-style/css/dataTable/responsive.bootstrap4.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('/new-style/css/dataTable/rowGroup.dataTables.min.css')!!}">

  <!-- Plugin css for icons -->
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/mdi/css/materialdesignicons.min.css') !!}">

  <!-- Plugin css for select2 -->
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/select2/select2.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/new-style/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') !!}">

  <!-- Customer css -->
  <link rel="stylesheet" href="{!! asset('/new-style/css/styles.css') !!}">
     <!-- Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     @yield('styles')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div id="showMsg"></div>
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{!! asset('/new-style/vendors/js/vendor.bundle.base.js') !!}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{!! asset('/new-style/vendors/chart.js/Chart.min.js') !!}"></script>
  <script src="{!! asset('/new-style/vendors/datatables.net/jquery.dataTables.js') !!}"></script>
  <script src="{!! asset('/new-style/vendors/datatables.net-bs4/dataTables.bootstrap4.js') !!}"></script>
  <!-- script src="{!! asset('/new-style/dataTables.select.min.js') !!}"></script !-->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{!! asset('/new-style/js/off-canvas.js') !!}"></script>
  <script src="{!! asset('/new-style/js/hoverable-collapse.js') !!}"></script>
  <script src="{!! asset('/new-style/js/template.js') !!}"></script>
  <script src="{!! asset('/new-style/js/settings.js') !!}"></script>
  <script src="{!! asset('/new-style/js/todolist.js') !!}"></script>

  <script src="{!! asset('/new-style/js/jquery-3.2.1.min.js') !!}"></script>
  <script src="{!! asset('/new-style/js/popper.min.js') !!}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{!! asset('/new-style/js/dashboard.js') !!}"></script>
  <script src="{!! asset('/new-style/js/Chart.roundedBarCharts.js') !!}"></script>
  <!-- End custom js for this page-->

  <script src="{!!asset('/new-style/js/dataTable/jquery.dataTables.min.js')!!}"></script>
  <script src="{!!asset('/new-style/js/dataTable/dataTables.responsive.min.js')!!}"></script>
  <script src="{!!asset('/new-style/js/dataTable/dataTables.bootstrap4.min.js')!!}"></script>
  <script src="{!!asset('/new-style/js/dataTable/responsive.bootstrap4.min.js')!!}"></script>
  <script src="{!!asset('/new-style/js/dataTable/dataTables.rowGroup.min.js')!!}"></script>

  <script src="{!!asset('/new-style/js/functions.js')!!}"></script>

  @include('layouts.js.components')

  @yield('scripts')

</body>

</html>

