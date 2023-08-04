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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-fluid p-2">
        <div class="row">
            <nav class="col-md-2 ">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a class="active" href="/admin">Home</a></li>
                    <li><a href="/skill">Skill</a></li>
                    <li><a href="/edc">Education</a></li>
                    <li><a href="/exp">Experience</a></li>
                    <li><a href="/service">Service</a></li>
                    <li><a href="/project">Projects</a></li>
                </ul>
            </nav>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
    <style>
        .navbar-nav {
            background-color: #f0f0f0;
            min-height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar-nav li {
            padding: 25px;
        }

        .navbar-nav a {
            color: black;
        }
    </style>
</body>

</html>
