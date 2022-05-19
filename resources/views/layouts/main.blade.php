<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from themepure.net/template/shupmax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 09:43:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biro Pengadaan Barang dan Jasa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>

    @include('layouts.header')

    {{ $slot }}

    @include('sweetalert::alert')

    @include('layouts.footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }} "></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{ asset('js/popper.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }} "></script>
    <script src="{{ asset('js/one-page-nav-min.js') }} "></script>
    <script src="{{ asset('js/slick.min.js') }} "></script>
    <script src="{{ asset('js/ajax-form.js') }} "></script>
    <script src="{{ asset('js/wow.min.js') }} "></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }} "></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }} "></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }} "></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }} "></script>
    <script src="{{ asset('js/jquery-ui-slider-range.js') }} "></script>
    <script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }} "></script>
    <script src="{{ asset('js/meanmenu.min.js') }} "></script>
    <script src="{{ asset('js/Elemental.js') }} "></script>
    <script src="{{ asset(' js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }} "></script>
</body>


<!-- Mirrored from themepure.net/template/shupmax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 09:44:04 GMT -->

</html>