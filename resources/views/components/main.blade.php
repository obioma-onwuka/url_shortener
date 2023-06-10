<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <title>@yield('title') - SEO Agency Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        @vite(['resources/lib/animate/animate.min.css'])
        @vite(['resources/lib/owlcarousel/assets/owl.carousel.min.css'])
        @vite(['resources/lib/lightbox/css/lightbox.min.css'])

        <!-- Customized Bootstrap Stylesheet -->
        @vite(['resources/css/bootstrap.min.css'])

        <!-- Template Stylesheet -->
        @vite(['resources/css/style.css'])
    </head>

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            @include('_front-navbar')


            {{$slot}}


            @include('_front-foot')
            
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        @vite(['resources/lib/wow/wow.min.js'])
        @vite(['resources/lib/easing/easing.min.js'])
        @vite(['resources/lib/waypoints/waypoints.min.js'])
        @vite(['resources/lib/owlcarousel/owl.carousel.min.js'])
        @vite(['resources/lib/isotope/isotope.pkgd.min.js'])
        @vite(['resources/lib/lightbox/js/lightbox.min.js'])

        <!-- Template Javascript -->
        @vite(['resources/js/main.js'])

        
    </body>

</html>