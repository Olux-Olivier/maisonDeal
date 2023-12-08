<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('cssTemplate/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('cssTemplate/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('cssTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('cssTemplate/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('cssTemplate/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('cssTemplate/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('cssTemplate/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('cssTemplate/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('cssTemplate/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
    <body>
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 id="title_ndeal">nDeal</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                
                <!-- Declaration de la variable active -->
                <?php  $active = 'text-white' ?>
                <!-- fin  -->

                <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? $active : ' ' }}">Accueil</a></li>
                <li><a href="{{ route('abonnements') }}" class="{{ request()->routeIs('abonnements') ? $active : ' ' }}">Abonnements</a></li>
                <li class="dropdown"><a href="#"><span>Collections</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Toutes les collections</a></li>     
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Vente</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? $active : ' ' }}">Contact</a></li>
                <li><a class="get-a-quote" href="{{ route('connexion') }}">Se connecter</a></li>
                </ul>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->


        <!-- Content -->
        @yield('content')
        <!-- End Content-->


        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span id="title_ndeal">nDeal</span>
                </a>
                <p> Vous pouvez nous contacter par les liens de nos medias sociaux que nous 
                    vous presentons ci-bas et nous ferons de notre mieux pour satisfaire à vos besoins.
                    chez nous le client est un réel noir. avec NYUMBADEAL, rassurez-vous que vous ne serez jamais
                    decu.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61553683690425" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                <h4 id="apropos">A PROPOS</h4>
                <ul>
                    <li><a href="#qui_sommes-nous">Qui sommes-nous ?</a></li>
                    <li><a href="#a_savoir">A savoir</a></li>
                    <li><a href="#equipe">Notre equipe</a></li>
                    
                </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                <h4 id="liens">LIENS</h4>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="abonnement.html">Abonnement</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4 id="contact">CONTACT Us</h4>
                <p>
                    79 Avenue de l'église <br>
                    Q/Gambela 2, C/Lubumbashi <br>
                    RDC <br><br>
                    <strong>Phone:</strong> +243 854 721 056<br>
                    <strong>Phone:</strong> +243 991 511 081 <br>
                    <strong>Email:</strong> info@example.com<br>
                </p>

                </div>

            </div>
            </div>

            <div class="container mt-4">
            <div class="copyright">
                &copy; nDeal <strong></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
                Designed by <a href="/github.com/Olux-Olivier">Olivier Kasongo</a> & <a href="/github.com/Gopher-Kaseya">Gopher Kaseya </a>
            </div>
            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('cssTemplate/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('cssTemplate/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('cssTemplate/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('cssTemplate/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('cssTemplate/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('cssTemplate/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('cssTemplate/assets/js/main.js') }}"></script>
    </body>
</html>