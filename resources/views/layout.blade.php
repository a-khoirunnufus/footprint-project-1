<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('themes/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('themes/img/favicon.png') }}">
    <title>
        @yield('title') | {{ config('app.name') }}
    </title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ url('themes/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('themes/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ url('themes/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />

    @yield('styles')
</head>

<body class="bg-gray-200">
  <div class="main-content position-relative">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-sticky shadow position-sticky top-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="#">
                <h5 class="m-0">{{ config('app.name') }}</h5>
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav w-100 ms-4">
                    @if(auth()->guard('admin')->check())
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{ route('employee') }}">
                                <i class="fa fa-users opacity-6 text-dark me-2"></i>
                                Data Pegawai
                            </a>
                        </li>
                    @endif
                    <li class="nav-item flex-grow-1">
                        <a class="nav-link me-2" href="{{ route('profile') }}">
                            <i class="fa fa-id-card opacity-6 text-dark me-2"></i>
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('logout') }}">
                            <i class="fa fa-arrow-right opacity-6 text-dark me-2"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid px-2" style="margin-top: 4rem">
        @yield('content')
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('themes/js/core/popper.min.js') }}"></script>
  <script src="{{ url('themes/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('vendor/jquery-3.7.1.js') }}"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('themes/js/material-dashboard.min.js?v=3.0.0') }}"></script>

  @yield('scripts')
</body>

</html>
