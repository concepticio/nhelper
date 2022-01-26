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
        <link rel="shortcut icon" href="{{asset(config('favicon_path'))}}">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <!-- FontAwesome JS-->
        <script defer src="{{asset('vendor/nhelper/assets/fontawesome/js/all.min.js')}}"></script>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
        <link rel="stylesheet" href="{{asset('vendor/nhelper/assets/plugins/simple-lightbox.min.css')}}">


        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="{{asset('vendor/nhelper/assets/css/theme.css')}}">
        <style>  p{ line-height: 20px; } </style>
    </head>
    <body>
        <header class="header fixed-top">

            <div class="branding docs-branding">
                <div class="container-fluid position-relative py-2">
                    <div class="docs-logo-wrapper">
                        <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="site-logo"><a class="navbar-brand" href="{{ route('nhelper.index') }}"><img class="logo-icon me-2" src="{{ asset(config('nhelper.logo_path')) }}" width=50 height=45 ="logo"></a></div>

                    </div><!--//docs-logo-wrapper-->
                    <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                        <a href="http://test.nfacture.com/" class="btn btn-primary d-none d-lg-flex">NFacture</a>
                    </div>
                </div><!--//container-->
            </div><!--//branding-->
        </header><!--//header-->
        <div class="docs-wrapper">
            @yield('sider')
            <div class="page-content">
                <div class="container">
                    @yield('contentindex')
                </div>
            </div>

            <div class="docs-content">
                <div class="container">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>


        <script src="{{asset('vendor/nhelper/assets/plugins/popper.min.js')}}"></script>
        <script src="{{asset('vendor/nhelper/assets/plugins/bootstrap.min.js')}}"></script>

         <!-- Page Specific JS -->
        <script src="{{asset('vendor/nhelper/assets/plugins/smoothscroll.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
        <script src="{{asset('vendor/nhelper/assets/js/highlight-custom.js')}}"></script>
        {{-- <script src="{{asset('vendor/nhelper/assets/plugins/simple-lightbox.min.js')}}"></script> --}}
        <script src="{{asset('vendor/nhelper/assets/plugins/gumshoe.polyfills.min.js')}}"></script>
         </script>@yield('script')
    </body>
</html>
