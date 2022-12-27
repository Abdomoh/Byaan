<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{__('main.title')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="web/assets/img/logo.jpeg" rel="icon">
    <link href="web/assets/img/logo.jpeg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="web/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="web/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="web/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="web/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="web/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="web/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="web/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Company - v4.9.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h6 style="font-family: 'Cairo', sans-s;" class="logo me-auto"><a href="index.html"> <img src="web/assets/img/logo.jpeg" rel="icon"> {{__('main.title')}} </a></h6>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{url('/')}}" class="active">{{ __('main.home') }}</a></li>

                    <li><a href="#idea">{{ __('main.idea') }}</a></li>
                    <li><a href="#goles">{{ __('main.Goals') }}</a></li>
                    <li><a href="#output">{{ __('main.output') }}</a></li>
                    <li><a href="#contact">{{ __('main.contact') }}</a></li>
                    <li>
                        @auth
                        <a href="{{ url('logout') }}" class="text-white btn btn-warning" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                تسجيل خروج
                            </a>

                            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                        <a href="{{('login')}}" class="text-white btn btn-warning">{{__('main.login')}}</a>
                        @endauth
                    </li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="social-links text-center text-md-right pt-3 pt-md-0">
                            <a href="https://www.twitter.com/bayan_dawah1" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.snapchat.com/bayan_dawah1" class="snapchat"><i class="bx bxl-snapchat"></i></a>
                            <a href="https://www.instagram.com/bayan_dawah1/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=966583301643" class="whatsapp-plus"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <hr>
                    <br><br>
                    <div class="col-lg-12 col-md-2 footer-contact">
                        <h2 class="text-center" style="font-size: 30px;    font-weight:bold;">{{__('main.title')}}</h2>
                        <p class="text-center" style="  font-weight:bold;">{{__('main.title-hero')}}</p>

                    </div>

                    <hr>
                    <br>
                    <p class="text-center" style="  font-weight:bold;">برنامج بيان لتأهيل الداعيات 2022 جميع الحقوق محفوظة </p>

                </div>
            </div>
        </div>


    </footer><!-- End Footer -->

    <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=966583301643"><i class="bx bxl-whatsapp" style="    border-radius: 100px;
    z-index: 1001;
    position: fixed;
    right: 0;
    bottom: 10px;
    color: #fff;
    background: rgb(9, 160, 17);
    box-shadow: #ccc 0 0 2px;
    font-size: 28px;
    display: block;
    -webkit-border-bottom-right-radius: 0;
    -webkit-border-top-right-radius: 0;
    -moz-border-radius-bottomright: 0;
    -moz-border-radius-topright: 0;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    padding: 10px 16px 10px 14px;
    cursor: pointer;">

            </i>
        </a>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="web/assets/vendor/aos/aos.js"></script>
    <script src="web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="web/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="web/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="web/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="web/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="web/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="web/assets/js/main.js"></script>

</body>

</html>