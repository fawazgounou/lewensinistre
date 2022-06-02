<!doctype html>
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
    <link href="plugins/css/font-face.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="plugins/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="plugins/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="plugins/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="plugins/css/Stylefichier.css">

    <!-- Main CSS-->
    <link href="plugins/css/theme.css" rel="stylesheet" media="all">

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

    <script src="plugins/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="plugins/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="plugins/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- plugins/Vendor JS       -->
    <script src="plugins/vendor/slick/slick.min.js">
    </script>
    <script src="plugins/vendor/wow/wow.min.js"></script>
    <script src="plugins/vendor/animsition/animsition.min.js"></script>
    <script src="plugins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="plugins/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="plugins/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="plugins/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="plugins/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="plugins/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="plugins/vendor/select2/select2.min.js">
    </script>

    <script src="plugins/js/main.js"></script>
</body>
</html>
