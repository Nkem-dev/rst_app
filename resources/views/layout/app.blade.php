<!doctype html>
<html lang="en">


<!-- Mirrored from george-fx.github.io/deli-taste/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 16:17:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DeliTaste</title>
    <meta name="description" content="Delitaste - Food delivery and Restaurant HTML Template" />
    <meta name="author" content="George_Fx">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/js/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>

    <div class="page-loading">
        <img src="assets/images/loader.gif" alt="" />
    </div><!--page-loading end-->

    <!-- <div class="wrapper"> -->

    <!-- start header -->
    @include('snippets.header')
        <!--header end-->

       @yield('content')

        <!-- start footer -->
        @include('snippets.footer')
        <!--footer end-->
        
    <!-- </div>  -->
    <!-- wrapper end -->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lib/slick/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>