<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel Asia</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('cssc/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('cssc/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('cssc/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssc/magnific-popup.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('cssc/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>
<body>

@include('websites.layouts.headers')
@include('websites.sublayouts.banners')
@yield('content')
@include('websites.sublayouts.populars')
@include('websites.sublayouts.gallerys')
@include('websites.sublayouts.about')
@include('websites.layouts.footers')

{{--@include('sublayouts.bookings')--}}
{{--@include('sublayouts.gallerys')--}}
{{--@include('blogs')--}}
{{--@include('sublayouts.contactarea')--}}
{{--@include('sublayouts.contacts')--}}


<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>





</body>
</html>
