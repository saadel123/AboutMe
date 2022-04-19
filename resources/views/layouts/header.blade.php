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

    <!-- Font Awesome Stylesheets -->
    <link rel="stylesheet" href="assests/css/font-awesome.min.css">
    <!-- Owl Carousel Stylesheets -->
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    <!-- Lightbox Stylesheets -->
    <link rel="stylesheet" href="assests/css/lightbox.min.css">
    <!-- Parallax Stylesheets -->
    <link rel="stylesheet" href="assests/css/parallax.css" type="text/css">
    <!-- Template Main Stylesheets -->
    <link rel="stylesheet" href="assests/css/style.css" type="text/css">
    <!-- Responsive Stylesheets -->
    <link rel="stylesheet" href="assests/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="assests/css/style1.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
    <!-- start Header -->
    <header id="header" class="header">
        <div class="header-nav bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/index"><img class="logo"
                                        src="assests/images/logo-color.png" alt="AboutMe"></a>
                            </div>
                            <!--End navbar-header -->
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/index">Back To Home</a></li>
                                </ul>
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
    <!-- end Header -->
    <!-- start banner -->
    <section id="single-page-banner" class="page-title page-title-image service-hbg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Service Details</h2>
                </div><!-- end col -->
                <div class="col-sm-6">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Graphic Design</li>
                    </ul>
                </div><!-- end col -->
            </div>
        </div>
    </section>
    <!-- end slider -->

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
