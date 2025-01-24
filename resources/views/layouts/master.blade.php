<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Saad El Ghanemy</title>
    <meta content="Saad EL Ghanemy: Aspiring software developer skilled in PHP, Laravel, Vue.js, and more, eager to build impactful and user-friendly digital solutions" name="description">
    <meta content="" name="keywords">
    @yield('meta')
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets1/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets1/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets1/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets1/img/favicon/site.webmanifest') }}">
    <!--End Favicon-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets1/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/style.css') }}?v=2" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                @php
                    $languages = config('languages');
                    $currentLocale = session()->get('locale', 'en');
                    $defaultLocale = 'en';

                    // Excluding the current locale from the list of available languages
                    $availableLanguages = array_filter(
                        $languages,
                        function ($key) use ($currentLocale) {
                            return $key !== $currentLocale;
                        },
                        ARRAY_FILTER_USE_KEY,
                    );
                @endphp

                @foreach ($availableLanguages as $langCode => $lang)
                    <li>
                        <a class="d-flex justify-content-center"
                            href="{{ route('changeLang', ['lang' => $langCode]) }}">
                            <img src="{{ asset($lang['flag']) }}" alt="">
                            <span>{!! __('home.menu.' . $lang['name']) !!}</span>
                        </a>
                    </li>
                @endforeach

                <li><a href="{{ url('/') }}" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>{!! __('home.menu.Home') !!}</span></a>
                </li>
                <li><a href="{{ url('/#about') }}" class="nav-link scrollto"><i class="bx bx-user"></i>
                        <span>{!! __('home.menu.About') !!}</span></a></li>
                <li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                        <span>{!! __('home.menu.Resume') !!}</span></a>
                </li>
                <li><a href="{{ url('/#portfolio') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>{!! __('home.menu.Portfolio') !!}</span></a></li>
                <li><a href="{{ url('/#certificates') }}" class="nav-link scrollto"><i class="bi bi-patch-check"></i>
                        <span>{!! __('home.menu.certificates') !!}</span></a></li>
                <li><a href="{{ url('/#contact') }}" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                        <span>{!! __('home.menu.Contact') !!}</span></a>
                </li>
                {{-- <li><a href="{{ url('/#services') }}" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a>
                </li> --}}
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
    <!--<div id="preloader"></div>-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $('.loading').hide();
            $('.sent-message').hide();
            $('.error-message').hide();
            $('#contact-form').on('submit', function(event) {
                event.preventDefault();
                $('.loading').show();
                $('#submit-btn').prop('disabled', true).html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="visually-hidden">Loading...</span>'
                );
                $.ajax({
                    url: "{{ route('contact.submit') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        $('.loading').hide();
                        $('#submit-btn').prop('disabled', false).html(
                            '{!! __('home.Contact.btn') !!}');
                        if (response.success) {
                            $('.sent-message').show();
                            $('#contact-form')[0].reset();
                        } else {
                            $('.error-message').text(response.error).show();
                        }
                    },
                    error: function(xhr) {
                        $('.loading').hide();
                        $('#submit-btn').prop('disabled', false).html(
                            '{!! __('home.Contact.btn') !!}');
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';
                        for (let key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errorMessage += errors[key] + ' ';
                            }
                        }
                        $('.error-message').text(errorMessage).show();
                    }
                });
            });
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6DP35YH6X6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-6DP35YH6X6');
    </script>

</body>

</html>
