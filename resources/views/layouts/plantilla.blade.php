<!Doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- TITLE OF SITE -->
		<title>Hecho con Amor</title>
		
        <!-- responsive meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--font-family-->
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		
		<!--base.css-->
		<link rel="stylesheet" href="css/base.css"  type="text/css"/>
		<!--hover.min.css-->
		<link href="css/hover-min.css" rel="stylesheet" type="text/css"/>
		
		<!--font-awesome.min.css-->
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		
		<!--SLIDER REVOLUTION 4.x CSS SETTINGS-->
		<link href="plugin/css/captions.css" rel="stylesheet" type="text/css"/>
		<link href="plugin/css/settings.css" rel="stylesheet" type="text/css"/>
		
		<!-- slicknav.css -->
		<link href="css/slicknav.css" rel="stylesheet" type="text/css"/>
		
		<!--prettyPhoto CSS-->
		<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
		
		<!--bootstrap.min.css-->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<!--style.css-->
		<link href="css/preset.css" rel="stylesheet" type="text/css"/>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		
		<!--responsive.css-->
		<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
		
	</head>
	
	<body>
	<!-- Start header -->
	@yield('navegacion')
		<section id="header">
			<div class="logo">
				<a href="/"><img src="images/logo-inicio.png" alt="image"/></a>
			</div>
			<div class="menu-top">
				<div class="logo-bottom"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="dropdown">
										  <a href="/">Inicio</a>
										</li>										
										<li><a href="about">Nosotros</a></li>
										<li><a href="contact">Contactanos</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav><!-- /.navbar navbar-default -->
					</div><!-- /.coloum -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- #header -->
		<!-- End header -->
		
		<section id="module">
			<div class="container">
				@yield('contenido')
			</div>
		</section>	
		
		
	
	
	
		<!--footer start-->
		<section id="footer" class="text-center">
			<div class="container">
				<div class="footer-content">
					<h4>Hecho con Amor</h4>
					<p></span>Developed by On Focus Labs</p>
				</div>
				
				<div class="social-icon">
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<p><a href="#">Share<br>It</a></p>
								</div>
								<div class="ch-thumb"><a href="#"><i class="fa fa-facebook"></i></a></div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<p><a href="#">Share<br>It</a></p>
								</div>
								<div class="ch-thumb"><a href="#"><i class="fa fa-twitter"></i></a></div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<p><a href="#">Share<br>It</a></p>
								</div>
								<div class="ch-thumb"><a href="#"><i class="fa fa-youtube"></i></a></div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<p><a href="#">Share<br>It</a></p>
								</div>
								<div class="ch-thumb"><a href="#"><i class="fa fa-pinterest"></i></a></div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<p><a href="#">Share<br>It</a></p>
								</div>
								<div class="ch-thumb"><a href="#"><i class="fa fa-wifi"></i></a></div>
							</div>
						</li>
					</ul>
				</div>
			</div><!--.container-->
			
			<div class="scrollup">
				<a href="">Top</a>
				<img src="images/red-top.png" alt="image"/>
			</div>	
		</section><!--#footer-->
		<!--end footer-->
	
	
	
		<!--jquery,bootstrap,modernizr.js-->
		<script src="js/modernizr.js" type="text/javascript"></script>
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
		<!--SLIDER REVOLUTION 4.x SCRIPTS-->
		<script type="text/javascript" src="plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="plugin/js/jquery.themepunch.revolution.min.js"></script>	
		<script type="text/javascript" src="plugin/js/revolution.callback.js"></script>
		
		<!--jquery.scrollUp.js-->
		<script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
		
		<!-- slicknav.js -->
		<script src="js/jquery.slicknav.js" type="text/javascript"></script>
		
		<!--prettyPhoto.js-->
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		
		<!--custom.js-->
		<script src="js/custom.js" type="text/javascript"></script>
		<script type="text/javascript">
			// prettyPhoto Script
			$("area[rel^='prettyPhoto']").prettyPhoto();
			
			$(".pp:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
			$(".pp:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
		</script>
	</body>

</html>

