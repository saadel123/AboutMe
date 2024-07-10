<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MyResume Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets1/img/favicon.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets1/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                    
                <li><a href="/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="/#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                        <span>Resume</span></a>
                </li>
                <li><a href="/#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="/#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a>
                </li>
                <li><a href="/#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                        <span>Contact</span></a>
                </li>
                <?php if(session()->get('locale') == 'fr' || session()->get('locale') == null): ?>
                    <li><a href="<?php echo e(route('changeLang', ['lang' => 'en'])); ?>">English</a></li>
                <?php else: ?>
                    <li> <a href="<?php echo e(route('changeLang', ['lang' => 'fr'])); ?>">Francais</a></li>
                <?php endif; ?>
                <li> <a href="<?php echo e(route('changeLang', ['lang' => 'de'])); ?>">german</a></li>
            </ul>
        </nav>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <footer id="footer">
        <div class="container">
            <h3>Abdelilah Ezzyraouy </h3>
            
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                Copyright <strong><span>Abdo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Abdo</a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="<?php echo e(asset('assets1/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/typed.js/typed.umd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/vendor/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(asset('assets1/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const glightbox = GLightbox({
                selector: '.glightbox'
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\portfolio_v2\resources\views/layouts/master.blade.php ENDPATH**/ ?>