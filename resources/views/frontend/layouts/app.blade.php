<!doctype html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/animate.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/fonts/flaticon.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/boxicons.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/magnific-popup.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/owl.theme.default.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/nice-select.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/meanmenu.css">
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/jquery-ui.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/theme-dark.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('') }}frontend/assets/img/favicon.png">

    <title>Atoli - Hotel & Resorts HTML Template</title>
</head>

<body>

    <!-- PreLoader Start -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-cube-area">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- PreLoader End -->

    <!-- Top Header Start -->

    {{-- <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 pr-0">
                    <div class="language-list">
                        <select class="language-list-item">
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                            <option>简体中文</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-9 col-md-10">
                    <div class="header-right">
                        <ul>
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <a href="#">123 Virgil A Stanton, Virginia, USA</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <!-- Top Header End -->



    <!-- Start Navbar Area -->

    @include('frontend.layouts.header')

    <!-- End Navbar Area -->

        @yield('content')

    <!-- Footer Area -->

        @include('frontend.layouts.footer')

    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/owl.carousel.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/wow.min.js"></script>
    <!-- Jquery Ui JS -->
    <script src="{{ asset('') }}frontend/assets/js/jquery-ui.js"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('') }}frontend/assets/js/meanmenu.js"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('') }}frontend/assets/js/form-validator.min.js"></script>
    <!-- Contact Form JS -->
    <script src="{{ asset('') }}frontend/assets/js/contact-form-script.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('') }}frontend/assets/js/custom.js"></script>

</body>

</html>
