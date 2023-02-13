<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Resep Bapakku</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{ asset('Yummy/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('Yummy/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{ asset('Yummy/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('Yummy/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('Yummy/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Yummy/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="{{ asset('Yummy/assets/css/main.css') }}" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Yummy - v1.3.0
        * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>
<body>
@include('layouts.partials.header')

<main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
		@yield('content')
	  </div>
	</section>
</main>
@include('layouts.partials.footer2')

</div>
</div>

<!-- Vendor JS Files -->
<script src="{{ asset('Yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Yummy/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('Yummy/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('Yummy/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('Yummy/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('Yummy/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('Yummy/assets/js/main.js') }}"></script>

	@yield('js')

</body>

</html>