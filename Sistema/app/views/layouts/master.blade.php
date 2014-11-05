<!DOCTYPE html>
<html lang="en">
<head> 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="escudopostgrado.ico">
	<title>
      @section('title')
        Direccion de Postgrado
      @show   
     </title>
	 @section('header')
	<!-- <link rel="stylesheet" href="assets/fe/css/my-bootstrap-theme.css" >-->
    <?php
    echo HTML::style('assets/fe/bootstrap/dist/dist/css/bootstrap.min.css');
    echo HTML::style('assets/fe/less/cloud-admin-frontend.less');
    echo HTML::style('assets/fe/css/cloud-admin-frontend.css');
    echo HTML::style('assets/fe/font-awesome/css/font-awesome.css');
    // HOVER 
	echo HTML::style('assets/fe/css/img-hover/style_common.css'); 
    echo HTML::style('assets/fe/css/img-hover/style1.css');
	// ANIMATE 
    echo HTML::style('assets/fe/css/amimatecss/animate.min.css'); 
	// COLORBOX 
	echo HTML::style('assets/fe/js/colorbox/colorbox.css'); 
	// CAROUSEL 
    echo HTML::style('assets/fe/css/carousel.css'); 
	// FONTS 
	echo HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'); 
    ?>
</head>
<body>
	<!-- PAGE -->
	<div id="page">
	    <!-- HEADER -->
	    @section('cara')
		<section id="header" data-type="background" data-speed="10">	
			<!-- OVERLAY -->
			<!-- <div class="overlay"> -->
				<!--MENU CELULAR-->
				<div id="sidebar-collapse" class="sidebar-collapse btn visible-xs">
					<i class="fa fa-bars" data-icon="fa fa-bars" data-icon1="fa fa-bars"></i>
				</div>
				<div class="divide60"></div>
				<div id="mobile-menu" class="list-group collapse text-center">
				  <a href="" class="list-group-item">Inicio</a>
				  <a href="#parallax-2" class="list-group-item">Eventos</a>
				  <a href="#portfolio" class="list-group-item">Ofertas</a>
				  <a href="#features" class="list-group-item">Informacíon</a>
				  <a href="#contact" class="list-group-item">Contactos</a>
				  <a href="<?=URL::to('login');?>" class="list-group-item external">Acceso</a>
				</div>

					<!-- MENU PAGINA INICIO HERO -->
					<div class="container-transparent text-center">
						<ul class="heronav left hidden-xs">
							<li><a href="">Inicio</a></li>
							<li><a href="#parallax-2">Eventos</a></li>
							<li><a href="#portfolio">Ofertas</a></li>
						</ul>
						<ul class="heronav right hidden-xs">
							<li><a href="#features">Informacíon</a></li>
							<li><a href="#contact">Contactos</a></li>
							<li><a href="<?=URL::to('login');?>" class="external">Acceso</a></li>
						</ul>
						<h1>
						<img class="logo" src="assets/fe/img/logo/escudopostgrado.png" height="120px" alt="logo name">
						</h1>
						<h1 class="page-title">Direccíon de Postgrado</h1>
						<h1 class="page-sub-title">Universidad Autónoma"Tomás Frías"</h1>
						<div class="showcase">
						</div>
					</div>
				<!--/HERO -->
			<!-- </div> -->
			<!--/OVERLAY -->
            
		<!--/HEADER -->	
		</section>
		@show
		@section('menu-nav')
		<!-- MENU FIXED  NAV-BAR -->
		<div id="nav-bar" style="top:0px;" border="1px">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-md-4">
						<div class="logo" >
							<a href="<?=URL::to('/');?>"><img src="assets/fe/img/logo/banner1.png" height="40" alt="logo name"/></a>
						</div>
					</div>
					<div class="col-sm-9 col-md-8">
						<nav id="fixed-top-navigation">
							<ul class="list-inline pull-right">
								<li><a href="<?=URL::to('/');?>">Inicio</a></li>
								<li><a href="#parallax-2">Eventos</a></li>
								<li><a href="#portfolio">Ofertas</a></li>
								<li><a href="#features">Informacion</a></li>
								<li><a href="#contact">Contactos</a></li>
								<li><a href="<?=URL::to('login');?>" class="external">ACCESO</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--/NAV-BAR -->
        @show
        @section('content')
		
		@show
		<!-- FOOTER -->
		
		<section id="footer" class="color-light pattern">
			<div class="container">
			@section('pie')
				
			@show
			</div>
		</section>
		
		<!--/FOOTER -->
	</div>
	<!--/PAGE -->
	@section('footer')
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="assets/fe/js/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/fe/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <?php
     // JAVASCRIPTS
       echo HTML::script('assets/fe/js/jquery-1.9.1.min.js');
       echo HTML::script('assets/fe/bootstrap/js/transition.js');
       echo HTML::script('assets/fe/bootstrap/js/alert.js');
       echo HTML::script('assets/fe/bootstrap/js/modal.js');
       echo HTML::script('assets/fe/bootstrap/js/dropdown.js');
       echo HTML::script('assets/fe/bootstrap/js/scrollspy.js');
       echo HTML::script('assets/fe/bootstrap/js/tab.js');
       echo HTML::script('assets/fe/bootstrap/js/tooltip.js');
       echo HTML::script('assets/fe/bootstrap/js/popover.js');
       echo HTML::script('assets/fe/bootstrap/js/button.js');
       echo HTML::script('assets/fe/bootstrap/js/collapse.js');
       echo HTML::script('assets/fe/bootstrap/js/carousel.js');
       echo HTML::script('assets/fe/bootstrap/js/typeahead.js');
       echo HTML::script('assets/fe/js/waypoint/waypoints.min.js');
       echo HTML::script('assets/fe/js/navmaster/jquery.scrollTo.js');
       echo HTML::script('assets/fe/js/navmaster/jquery.nav.js');
       echo HTML::script('assets/fe/js/swiper/idangerous.swiper-1.9.3.js');
       echo HTML::script('assets/fe/js/isotope/jquery.isotope.min.js');
       echo HTML::script('assets/fe/js/isotope/imagesloaded.pkgd.min.min.js');
       // COLORBOX 
       echo HTML::script('assets/fe/js/colorbox/jquery.colorbox.js');
       echo HTML::script('assets/fe/js/script.js');
       echo HTML::script('assets/fe/js/less-1.3.3.min.js');
       ?>
       @show
</body>
</html>