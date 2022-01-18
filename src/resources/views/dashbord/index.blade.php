<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>NFacture</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bootstrap Documentation Template For Software Developers">
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
        <link rel="shortcut icon" href="{{config('favicon_path')}}">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

        <!-- FontAwesome JS-->
        <script defer src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>

        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

    </head>
    <body>
        <header class="header fixed-top">

            <div class="branding docs-branding">
                <div class="container-fluid position-relative py-2">
                    <div class="docs-logo-wrapper">
                        <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon me-2" src="{{ asset(config('nhelper.logo_path'))}}" alt="logo"></a></div>
                    </div><!--//docs-logo-wrapper-->
                    <div class="docs-top-utilities d-flex justify-content-end align-items-center">

                        <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                        </ul><!--//social-list-->
                        {{-- <a href="">Télecharger le PDF</a> --}}
                    </div><!--//docs-top-utilities-->
                </div><!--//container-->
            </div><!--//branding-->
        </header><!--//header-->
        <div class="page-header theme-bg-dark py-5 text-center position-relative">
            <div class="theme-bg-shapes-right"></div>
            <div class="theme-bg-shapes-left"></div>
            <div class="container">
                <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
                <div class="page-intro single-col-max mx-auto">Everything you need to get your software documentation online.</div>
                <div class="main-search-box pt-3 d-block mx-auto">
                     <form class="search-form w-100">
                        <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                        <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                    </form>
                 </div>
            </div>
        </div><!--//page-header-->
        <div class="page-content">
            <div class="container">
                <div class="docs-overview py-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <span class="theme-icon-holder card-icon-holder me-2">
                                            <i class="fas fa-map-signs"></i>
                                        </span><!--//card-icon-holder-->
                                        <span class="card-title-text">Introduction</span>
                                    </h5>
                                    <div class="card-text">
                                        Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                    <a class="card-link-mask" href="docs-page.html#section-1"></a>
                                </div><!--//card-body-->
                            </div><!--//card-->
                        </div><!--//col-->
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">

            <div class="footer-bottom text-center py-5">

                <ul class="social-list list-unstyled pb-4 mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                </ul><!--//social-list-->

                <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                <small class="copyright">Copyright<i class="fas fa-heart" style="color: #f3b052;"></i> by <a class="theme-link" href="http://www.conceptic.io" target="_blank">Conceptic.io</a> </small>


            </div>

        </footer>

        <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Page Specific JS -->
        <script src="{{asset('assets/plugins/smoothscroll.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
        <script src="{{asset('assets/js/highlight-custom.js')}}"></script>
        <script src="{{asset('assets/plugins/simplelightbox/simple-lightbox.min.js')}}"></script>
        <script src="{{asset('assets/plugins/gumshoe/gumshoe.polyfills.min.js')}}"></script>
        <script src="{{asset('assets/js/docs.js')}}"></script>
    </body>
</html>
