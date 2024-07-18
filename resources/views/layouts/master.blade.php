<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MyResume Saad El ghanemy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets1/img/favicon.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets1/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                @if (session()->get('locale') == 'en' || session()->get('locale') == null)
                    <li><a class="d-flex justify-content-center" href="{{ route('changeLang', ['lang' => 'fr']) }}"><img
                                src="{{ asset('assets1/img/flags/french.png') }}" alt="">
                            <span>{!! __('home.menu.French') !!}</span> </a></li>
                @else
                    <li> <a class="d-flex justify-content-center"
                            href="{{ route('changeLang', ['lang' => 'en']) }}"><img
                                src="{{ asset('assets1/img/flags/english.png') }}" alt="">
                            <span>{!! __('home.menu.English') !!}</span></a></li>
                @endif
                @if (session()->get('locale') == 'en' || session()->get('locale') == 'fr' || session()->get('locale') == null)
                    <li> <a class="d-flex justify-content-center"
                            href="{{ route('changeLang', ['lang' => 'de']) }}"><img
                                src="{{ asset('assets1/img/flags/german.png') }}" alt="">
                            <span>{!! __('home.menu.German') !!}</span></a></li>
                @elseif(session()->get('locale') == 'de')
                    <li><a class="d-flex justify-content-center"
                            href="{{ route('changeLang', ['lang' => 'fr']) }}"><img
                                src="{{ asset('assets1/img/flags/french.png') }}" alt="">
                            <span>{!! __('home.menu.French') !!}</span> </a></li>
                @else
                    <li><a class="d-flex justify-content-center"
                            href="{{ route('changeLang', ['lang' => 'en']) }}"><img
                                src="{{ asset('assets1/img/flags/english.png') }}" alt="">
                            <span>{!! __('home.menu.English') !!}</span> </a></li>
                @endif
                <li><a href="/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>{!! __('home.menu.Home') !!}</span></a>
                </li>
                <li><a href="/#about" class="nav-link scrollto"><i class="bx bx-user"></i>
                        <span>{!! __('home.menu.About') !!}</span></a></li>
                <li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                        <span>{!! __('home.menu.Resume') !!}</span></a>
                </li>
                <li><a href="/#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>{!! __('home.menu.Portfolio') !!}</span></a></li>
                {{-- <li><a href="/#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a>
                </li> --}}
                <li><a href="/#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                        <span>{!! __('home.menu.Contact') !!}</span></a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer id="footer">
        <div class="container">
            <h3>Saad El ghanemy</h3>
            {{-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p> --}}
            <div class="social-links">
                <a href="https://github.com/saadel123" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/saad-elghanemy/" target="_blank" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
                <a href="https://www.xing.com/profile/Saad_Elghanemy" target="_blank" class="xing"><i
                        class="bx bxl-xing"></i></a>
            </div>
            <div class="copyright">
                <br>
                {{-- Copyright <strong><span>Saad</span></strong>. All Rights Reserved --}}
            </div>
            <div class="credits">
                <br>

                {{-- Designed by <a href="#">Saad</a> --}}
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets1/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets1/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets1/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets1/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets1/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const glightbox = GLightbox({
                selector: '.glightbox'
            });
        });
    </script>

</body>

</html>
