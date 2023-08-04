<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <title>AboutMe - Personal Portfolio Resume Template</title>
    <!-- set your website meta description and keywords -->
    <meta name="description" content="Add your business website description here">
    <meta name="keywords" content="Add your business website keywords here">
    <!-- set your website favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Bootstrap Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.min.css') }}">
    <!-- Font Awesome Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/font-awesome.min.css') }}">
    <!-- Owl Carousel Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/owl.theme.default.min.css') }}">
    <!-- Lightbox Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/lightbox.min.css') }}">
    <!-- Animate Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/animate.css') }}" type="text/css">
    <!-- Parallax Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/parallax.css') }}" type="text/css">
    <!-- Template Main Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}" type="text/css">
    <!-- Responsive Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assests/css/responsive.css') }}" type="text/css">
    <style>
        .isotopeSelector {
            margin-right: 15px;
        }

        .images {
            display: flex;
            justify-content: space-around;
        }

        .images img {
            margin-right: 10px;
        }

        #testplus,
        #testmoin {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            outline: none
        }

        #test {
            margin: 15px;
        }
    </style>
</head>

<body>

    <!-- start Header -->
    <header id="header" class="header">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <img class="logo logo-white" src="{{ asset('assests/images/logo.png') }}"
                                        alt="logo">
                                    <img class="logo logo-color" src="{{ asset('assests/images/logo-color.png') }}"
                                        alt="logo">
                                </a>
                            </div>
                            <!--End navbar-header -->
                            <div id="navbar" class="navbar-collapse collapse">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="active" href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#pricingtable">Pricing</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a class="last" href="#contact">Contact</a></li>
                                        @if (!Auth::check())
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/register">Register</a></li>
                                        @endif
                                        @if (Auth::check())
                                            <li><a class="last" href="/admin">Admin Panel</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">Log
                                                    Out
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </form>
                            </div>
                            <!--End navbar -->
                        </nav>
                    </div>
                    <!--End col -->
                </div>
                <!--End row -->
            </div>
            <!--End container -->
        </div>
        <!--End header-nav -->
    </header>

    <!-- start About section -->
    <section id="about" class="about about-timeline-style">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <!-- start section title-wrap -->
                    <div class="title-wrap wow zoomIn">
                        <div class="section-title-box">
                            <h2 class="section-title"> <strong>
                                    <p>{{ $project->title }}</p>
                                </strong></h2>
                        </div><!-- end section-title-box -->
                    </div>
                    <!-- end section title-wrap -->
                </div><!-- end col -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6" style="display: flex;flex-direction: column;align-items: center;">
                            <div class="profile-image">
                                <a data-lightbox="websites" data-title="Image Preview"
                                    href="{{ asset('storage/' . $project->image) }}">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="profile photo">
                                </a>
                            </div><!-- end profile-image -->
                            <div class="images">
                                {{-- <a data-lightbox="websites" data-title="Image Preview" href="{{ asset('storage/' . $project->image) }}"> 
                                    <img style="max-height:100px;"  src="{{ asset('storage/' . $project->image) }}" alt="profile photo">
                                </a> --}}
                                @foreach ($project->images as $item)
                                    <a data-lightbox="websites" data-title="Image Preview"
                                        href="{{ asset('storage/' . $item->link) }}">
                                        <img style="max-height:100px;" src="{{ asset('storage/' . $item->link) }}"
                                            alt="profile photo">
                                    </a>
                                @endforeach

                            </div>
                        </div><!-- end col -->
                        <div class="col-sm-6" style="margin-top: 40px;">
                            <div class="about-text">
                                <div class="btnsize"
                                    style="display: flex;align-items: center;justify-content: space-evenly;">
                                    <input type="button" class="btn btn-Light" id="testmoin" value="A-">
                                    <input type="button" class="btn btn-Secondary" id="testplus" value="A+">
                                </div>
                                <p id="test">{{ $project->description }}</p>
                                {{-- <div class="button-holder">
                                        <a class="btn btn-shutter-out-horizontal" href="#">Download Resume</a>
                                        <a class="btn btn-shutter-out-horizontal" href="#contact">Hire Me</a>
                                    </div> --}}
                                <!-- end button-holder -->
                            </div><!-- about-text -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <div class="col-sm-12">
                    <div class="title-wrap wow zoomIn">
                        <div class="section-title-box">
                            <h4 class="section-title"> <strong>
                                    <p>Video</p>
                                </strong></h4>
                        </div><!-- end section-title-box -->
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/_y4Rkdk_B3Q"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rarUiUc2oTs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- end col-sm-12 -->
                {{-- <div class="col-sm-12">
                    <div class="nav-tab-menu">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <button data-toggle="tab" data-target="#tab1" aria-expanded="true">
                                    <i class="fa fa-paper-plane-o"></i>
                                    <span class="tab-title text-bold">Experience</span>
                                </button>
                            </li>
                            <li>
                                <button data-toggle="tab" data-target="#tab2" aria-expanded="false">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span class="tab-title text-bold">Education</span>
                                </button>
                            </li>
                            <li>
                                <button data-toggle="tab" data-target="#tab3" aria-expanded="false">
                                    <i class="fa fa-trophy"></i>
                                    <span class="tab-title text-bold">Award</span>
                                </button>
                            </li>
                            <li>
                                <button data-toggle="tab" data-target="#tab4" aria-expanded="false">
                                    <i class="fa fa-diamond"></i>
                                    <span class="tab-title text-bold">Skills</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="icon-holder experience">
                                <i class="fa fa-paper-plane-o"></i>
                                <span class="tab-content-title text-bold">Experience</span>
                            </div>
                            <ul class="timeline">
                                @foreach ($listexps as $exps)
                                    <li class="timeline-{{ $exps->postion }}">
                                        <div class="timeline-badge">
                                            <i class="fa fa-calendar"></i>
                                        </div><!-- end timeline-badge -->
                                        <div class="timeline-panel wow slideIn{{ $exps->slide }}">
                                            <div class="experience-content">
                                                <h4>{{ $exps->titre }}</h4>
                                                <p>{{ $exps->body }}<br><strong><small>{{ date('Y', strtotime($exps->debut))}} -
                                                    {{ date('Y', strtotime($exps->fin))}}</small></strong></p>
                                            </div>
                                        </div>
                                        <!--end timeline-panel -->
                                    </li><!-- end timeline-right -->
                                @endforeach
                            </ul><!-- end timeline -->
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="icon-holder education">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="tab-content-title text-bold">Education</span>
                            </div>
                            <ul class="timeline">
                                @foreach ($listedcs as $edcs)


                                    <li class="timeline-{{ $edcs->positioned }}">
                                        <div class="timeline-badge">
                                            <i class="fa fa-calendar"></i>
                                        </div><!-- end timeline-badge -->
                                        <div class="timeline-panel">
                                            <div class="experience-content">
                                                <h4>{{ $edcs->titreed }}</h4>
                                                <h5>{{ date('Y', strtotime($edcs->debuted))}}- {{ date('Y', strtotime($edcs->fined))}}</h5>
                                                <p>{{ $edcs->bodyed }}</p>
                                            </div>
                                        </div>
                                        <!--end timeline-panel -->
                                    </li><!-- end timeline-left -->
                                @endforeach

                            </ul><!-- end timeline -->
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="icon-holder education">
                                <i class="fa fa-trophy"></i>
                                <span class="tab-content-title text-bold">Award</span>
                            </div>
                            <ul class="timeline">
                                @foreach ($listsawrds as $awords)
                                    <li class="timeline-{{ $awords->position }}">
                                        <div class="timeline-badge">
                                            <i class="fa fa-calendar"></i>
                                        </div><!-- end timeline-badge -->
                                        <div class="timeline-panel">
                                            <div class="experience-content">
                                                <h4>{{ $awords->instit }}</h4>
                                                <h5>{{ date('Y', strtotime($awords->year))}}</h5>
                                                <p>{{ $awords->body }}.</p>
                                            </div>
                                        </div>
                                        <!--end timeline-panel -->
                                    </li><!-- end timeline-right -->
                                @endforeach
                            </ul><!-- end timeline -->
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="row">
                                <div class="progressbar-wrap">
                                    @foreach ($listskills as $skills)
                                        <div class="col-xs-3">
                                            <div class="progressbar" data-animate="false">
                                                <div class="circle" data-percent="{{ $skills->percent }}"
                                                    data-color="#04b962">
                                                    <div></div>
                                                    <p>{{ $skills->langage }}</p>
                                                </div><!-- end circle -->
                                            </div><!-- end progressbar -->
                                        </div><!-- end col -->
                                    @endforeach
                                </div><!-- end progressbar-wrap -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- end tab-content -->
                </div> --}}

            </div>
            {{-- <div class="row mt-5">
                <div class="col-10">
                    @foreach ($project->images as $item)
                        <div class="col-4">
                            <img style="max-height:100px;" src="{{ asset('storage/' . $item->link) }}"
                                alt="profile photo">
                        </div>
                    @endforeach
                </div>
            </div> --}}
            <!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end About section -->

    <!-- start footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-top clearfix">
                    <div class="col-sm-4">
                        <div class="columnbottom-margin subscribe-form-wrap">
                            <h4 class="widget-title">Subscribe <span>NewsLetter</span></h4>
                            <p>By subscribing to our mailing list you will always get latest news from us.</p>
                            <!-- start mailchimp form -->
                            <div class="mc-form-holder">
                                <form id="mc-form">
                                    <input id="mc-email" class="form-control" placeholder="email address"
                                        name="EMAIL" type="email">
                                    <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                                    <label for="mc-email"></label>
                                </form>
                            </div>
                            <!-- end mailchimp form -->
                        </div><!-- end subscribe-form-wrap -->
                    </div><!-- end col -->
                    <div class="col-sm-4">
                        <div class="columnbottom-margin recent-work-wrap">
                            <h4 class="widget-title">Recent <span>Work</span></h4>
                            <div class="latest-pfolio">
                                <div class="col-xs-4 no-space">
                                    <div class="portfolio-wrapper">
                                        <img src="images/portfolio/thumb/2.jpg" alt="Portfolio Title">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-inner">
                                                <div class="portfolio-overlay-content">
                                                    <div class="portfolio-link">
                                                        <a title="Details" href="single-portfolio.html"><i
                                                                class="fa fa-link"></i></a>
                                                        <a data-lightbox="recentwork" data-title="Image Preview"
                                                            href="images/portfolio/2.jpg"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                    <!--End portfolio-link -->
                                                </div>
                                                <!--End portfolio-overlay-content -->
                                            </div>
                                            <!--End portfolio-overlay-inner -->
                                        </div>
                                        <!--End portfolio-overlay -->
                                    </div>
                                    <!--End portfolio-wrapper -->
                                </div>
                                <!--End ./col- -->
                                <div class="col-xs-4 no-space">
                                    <div class="portfolio-wrapper">
                                        <img src="images/portfolio/thumb/3.jpg" alt="Portfolio Title">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-inner">
                                                <div class="portfolio-overlay-content">
                                                    <div class="portfolio-link">
                                                        <a title="Details" href="single-portfolio.html"><i
                                                                class="fa fa-link"></i></a>
                                                        <a data-lightbox="recentwork" data-title="Image Preview"
                                                            href="images/portfolio/3.jpg"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                    <!--End portfolio-link -->
                                                </div>
                                                <!--End portfolio-overlay-content -->
                                            </div>
                                            <!--End portfolio-overlay-inner -->
                                        </div>
                                        <!--End portfolio-overlay -->
                                    </div>
                                    <!--End portfolio-wrapper -->
                                </div>
                                <!--End ./col- -->
                                <div class="col-xs-4 no-space">
                                    <div class="portfolio-wrapper">
                                        <img src="images/portfolio/thumb/4.jpg" alt="Portfolio Title">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-inner">
                                                <div class="portfolio-overlay-content">
                                                    <div class="portfolio-link">
                                                        <a title="Details" href="single-portfolio.html"><i
                                                                class="fa fa-link"></i></a>
                                                        <a data-lightbox="recentwork" data-title="Image Preview"
                                                            href="images/portfolio/4.jpg"><i
                                                                class="fa fa-search-plus"></i></a>
                                                    </div>
                                                    <!--End portfolio-link -->
                                                </div>
                                                <!--End portfolio-overlay-content -->
                                            </div>
                                            <!--End portfolio-overlay-inner -->
                                        </div>
                                        <!--End portfolio-overlay -->
                                    </div>
                                    <!--End portfolio-wrapper -->
                                </div>
                                <!--End ./col- -->
                            </div>
                            <!--End latest-portfolio -->
                            <div class="clearfix"></div>
                        </div><!-- end recent-work-wrap -->
                    </div><!-- end col -->
                    <div class="col-sm-4">
                        <div class="columnbottom-margin contact-info-wrap">
                            <h4 class="widget-title">Contact <span>Details</span></h4>
                            <ul class="contact-info list-unstyled">
                                <li><i class="fa fa-home"></i>Morocco Casablanca</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:+212600570107">+212600570107</a></li>
                                <li><i class="fa fa-envelope"></i> <a
                                        href="mailto:elghanemysaad@gmail.com">elghanemysaad@gmail.com</a></li>
                            </ul><!-- end contact-info  -->

                            <ul class="list-inline list-social clearfix">
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-gplus">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-vimeo">
                                        <i class="fa fa-vimeo"></i>
                                        <i class="fa fa-vimeo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-pinterest">
                                        <i class="fa fa-pinterest"></i>
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul><!-- end list-social -->
                        </div><!-- end contact-info-wrap -->
                    </div><!-- end col -->
                </div><!-- end footer-top  -->
            </div><!-- end row -->
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="footer-logo-link"><img class="footer-logo"
                            src="assests/images/footer-logo.png" alt="Steve"></a>
                    <p class="text-center copyright">&copy; 2021 All rights reserved.</p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer>
    <!-- end footer -->
    <a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>
    <!-- jQuery Library -->
    <script src="{{ asset('assests/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assests/js/bootstrap.min.js') }}"></script>
    <!-- Particles JS -->
    <script src="{{ asset('assests/js/particles.min.js') }}"></script>
    <script src="{{ asset('assests/js/app.js') }}"></script>
    <!-- wow Js -->
    <script src="{{ asset('assests/js/wow.min.js') }}"></script>
    <!-- Circle Progress Js -->
    <script src="{{ asset('assests/js/circle-progress.js') }}"></script>
    <!-- Isotope Filtring Js -->
    <script src="{{ asset('assests/js/isotope.pkgd.min.js') }}"></script>
    <!-- Lightbox Js -->
    <script src="{{ asset('assests/js/lightbox.min.js') }}"></script>
    <!-- owl.carousel Js -->
    <script src="{{ asset('assests/js/owl.carousel.min.js') }}"></script>
    <!-- Form validator Js -->
    <script src="{{ asset('assests/js/validator.min.js') }}"></script>
    <!-- ajaxchimp Js -->
    <script src="{{ asset('assests/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- counterup Js -->
    <script src="{{ asset('assests/js/waypoint.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.counterup.min.js') }}"></script>
    <!-- Template main Js -->
    <script src="{{ asset('assests/js/main.js') }}"></script>
    <script>
        var wow = new WOW({});
        wow.init();
    </script>

    <script>
        // JavaScript code to upgrade the font size of the label element

        var test = document.getElementById('test');
        var testplus = document.getElementById('testplus');
        var testmoin = document.getElementById('testmoin');

        // Get the initial font size (remove 'px' from the string and convert to integer)
        var initialFontSize = parseInt(window.getComputedStyle(test).fontSize);

        testplus.addEventListener('click', function() {
            var currentFontSize = parseInt(test.style.fontSize) || initialFontSize;
            if (currentFontSize < 25) {
                var newFontSize = currentFontSize + 1;
                test.style.fontSize = newFontSize + 'px';
            }
        });
        testmoin.addEventListener('click', function() {
            var currentFontSize = parseInt(test.style.fontSize) || initialFontSize;
            if (currentFontSize > 12) {
                var newFontSize = currentFontSize - 1;
                test.style.fontSize = newFontSize + 'px';
            }
        });
    </script>
</body>

</html>
