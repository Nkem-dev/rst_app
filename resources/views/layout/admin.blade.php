<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:title" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:description" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Salero Restaurant Admin Bootstrap 5 Template</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="dashboard/assets/images/favicon.png">
	
	<link href="dashboard/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="dashboard/assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="dashboard/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="dashboard/assets/vendor/swiper/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="dashboard/assets/vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css" type="text/css" media="all" />
	<link href="dashboard/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- tagify-css -->
	
	<!-- Style css -->
    <link href="dashboard/assets/css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	 -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	
	
    <!--*******************
        Preloader end
    ********************-->

        <!-- Main wrapper start -->
    <div id="main-wrapper">
            <!-- Header start -->
          @include('snippets.admin.header')
        
            <!-- Header end -->

            <!-- Sidebar start -->

		@include('snippets.admin.sidebar')
		
        <!-- sidebar end -->
		
            <!-- Content body start -->

            @yield('content')

            <!-- content body end -->


       
    </div>
        <!-- Main wrapper end -->
        
        <!-- Scripts -->
    <!-- Required vendors -->
    <script src="dashboard/assets/vendor/global/global.min.js"></script>
	<script src="dashboard/assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="dashboard/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="dashboard/assets/vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="dashboard/assets/js/dashboard/dashboard-1.js"></script>
	<script src="dashboard/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
	
	
	<!-- JS for dotted map -->
    <script src="dashboard/assets/vendor/dotted-map/js/contrib/jquery.smallipop-0.3.0.min.js"></script>
    <script src="dashboard/assets/vendor/dotted-map/js/contrib/suntimes.js"></script>
    <script src="dashboard/assets/vendor/dotted-map/js/contrib/color-0.4.1.js"></script>
	
	<script src="dashboard/assets/vendor/dotted-map/js/world.js"></script>
    <script src="dashboard/assets/vendor/dotted-map/js/smallimap.js"></script>
    <script src="dashboard/assets/js/dashboard/dotted-map-init.js"></script>
   
	<!-- Apex Chart -->
	
	

	<!-- Vectormap -->
    <script src="dashboard/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="dashboard/assets/vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="dashboard/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="dashboard/assets/js/custom.js"></script>
	<script src="dashboard/assets/js/deznav-init.js"></script>
	<script src="dashboard/assets/js/demo.js"></script>
    <script src="dashboard/assets/js/styleSwitcher.js"></script>
	
	<script>
		var swiper = new Swiper(".mySwiper", {
		  slidesPerView: 5,
		  //spaceBetween: 30,
		  pagination: {
			el: ".swiper-pagination",
			clickable: true,
		  },
		  breakpoints: {
			
		  300: {
			slidesPerView: 1,
			spaceBetween: 20,
		  },
		  416: {
			slidesPerView: 2,
			spaceBetween: 20,
		  },
		   768: {
			slidesPerView: 3,
			spaceBetween: 20,
		  },
		   1280: {
			slidesPerView: 4,
			spaceBetween: 10,
		  },
		  1788: {
			slidesPerView: 5,
			spaceBetween: 20,
		  },
		},
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dzSettingsOptions.version = 'dark';
				new dzSettings(dzSettingsOptions);
			},1500)
		});
	</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif
    @if (Session::has('success'))
    <script>
        swal("Successful!", "{{ Session::get('success') }}!", "success");
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        swal("Error!", "{{ Session::get('error') }}!", "warning");
    </script>
    @endif

	
	
	
</body>

</html>