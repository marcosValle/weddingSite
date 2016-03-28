<?php 
	include('php/logado.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Deborah & Marcos</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<!-- / Favicons
================================================== -->

<!-- >> CSS	
============================================================================== -->
<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- /google web fonts -->
<!-- bootstrap -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- nivo lightbox -->
<link href="vendor/nivo-lightbox/nivo-lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/nivo-lightbox/themes/default/default.css" type="text/css" />
<!-- animate -->
<link href="vendor/animate.css" rel="stylesheet">
<!-- Font Awesome -->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<!-- main styles -->
<link href="css/styles.css" rel="stylesheet">
<!-- >> /CSS
============================================================================== -->
</head>
<body>

<!-- Page Loader
========================================================= -->
<div class="loader" id="page-loader"> 

  <div class="loading-wrapper">
  	<div class="loader-heart loader-heart1"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart2"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart3"><img src="img/intro-heart.png" alt=""></div>
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->

<!-- === PAGE BACKGROUND === -->
<!-- Background container -->
<div class="page-background-container viewport">
	<!-- background-mask -->
	<div class="bg-mask viewport"></div>
	<!-- /background-mask -->
	<!-- background-slideshow -->
	<div class="bg-slideshow">
		<!-- slideshow-item -->
		<div class="page-background viewport" style="background-image: url('img/background.jpg')"></div>
		<!-- /slideshow-item -->	
	</div>
	<!--/Background-slideshow -->
</div>
<!-- Background-container -->
<!-- === /PAGE BACKGROUND === -->

<!-- Main Content
================================================== -->
<div id="body" class="viewport animated">
	<div class="container">
		<div class="boxed-content">	
			<!-- Header -->
			<header id="header" class="navbar navbar-default navbar-static-top" > 
				<div class="clearfix">
				    <!-- logo -->	   
				    <div class="hd-logo">
				      <a href="index.php"><img src="img/d_m_logo.png" title="" alt="Deborah & Marcos"></a>
				    </div>	   
				    <!-- /logo -->
				    <!-- responsive menu -->
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Navigation Menu</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <!-- /responsive menu -->    
				    <!-- menu -->
				    <nav class="hd-nav nav navbar-nav navbar-right navbar-collapse collapse">
				      <ul class="nav navbar-nav hd-list-menu clearfix">
				        <li>
				        	<a href="about.php">
				        		<span class="link-title">Sobre nós</span>
				        		<span class="link-subtitle">Nossa história</span>
				        	</a>
				        </li>
				         <li>
				        	<a href="gallery.php">
				        		<span class="link-title">Galeria</span>
				        		<span class="link-subtitle">Nossas fotos</span>
				        	</a>
				        </li>	        
				        <li>
				        	<a href="ceremony.php">
				        		<span class="link-title">Casamento</span>
				        		<span class="link-subtitle">Mais informações</span>
				        	</a>
				        </li>
				        <li>
				        	<a href="rsvp.php">
				        		<span class="link-title">RSVP</span>
				        		<span class="link-subtitle">Confirmação</span>
				        	</a>
				        </li>
				       	<li>
				        	<a href="http://www.planosdeumanoiva.wordpress.com">
				        		<span class="link-title">Blog</span>
				        		<span class="link-subtitle">Notícias!</span>
				        	</a>
				        	
				        </li>
				        <li>
				        	<a href="page-registry.php">
				        		<span class="link-title">Presentes</span>
				        		<span class="link-subtitle">Lista de presentes</span>
				        	</a>
				        </li>
				      </ul> 
				    </nav>
				    <!-- /menu -->
				</div>
			</header>
			<!-- /header -->
			<!-- content -->
			<div class="page-content">				
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">

						<div class="gift-list">

						<h1 class="title1 title1-border">Um pedacinho da nossa casa...</h1>
							<div class="row">
								<!-- item -->
								<div class="gift-item col-sm-12" align="center">
									<a href="http://www.tokstok.com.br"><img src="img/tokstok.jpeg" alt="tokstok"></a>
								</div>

								<h1 class="title1 title1-border">Um momento inesquecível...</h1>
								<!-- /item -->
								<div class="row text-center">

									<div class="col-xs-6">

										<img src="img/presents/snowland.jpg" style="max-height:180px" class="img-responsive center-block" />

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
											<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>



									<div class="col-xs-6">
		
										<img src="img/presents/maria.jpg" style="max-height:180px" class="img-responsive center-block" />
		
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
											<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>


								</div>



								<br /> <br />



								<div class="row text-center">
									<div class="col-xs-6">
										<img src="img/presents/noitegaucha.jpg" style="max-height:180px" class="img-responsive center-block"  />

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
											<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>




									<div class="col-xs-6">
										<img src="img/presents/noitesuica.jpg" style="max-height:180px" class="img-responsive center-block"  />

										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
										">
											<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
											<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
										</form>
									</div>

								</div>



								</div>


							</div>
						</div>
					</div>
				</div>





		<!-- /content -->
			<!-- footer -->
			<footer id="footer">
				<p class="footer-icon"><img src="img/ft-icon.png" alt=""></p>
			  	<p class="quote-content">"Someone like you make it all worth while..."</p>
			</footer>
			<!-- /footer -->
		</div>
	</div>
</div>
<audio src="audio/van_morrison.mp3" loop="true" autoplay="true" controls />

<!-- /Main Content
================================================== -->

<!-- >> JS
============================================================================== -->
<script src="js/audio.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Validate -->
<script src="vendor/validate.js"></script>
<!-- Countdown -->
<script src="vendor/jquery.countdown.min.js"></script>
<!-- Mansonry -->
<script src="vendor/imagesloaded.pkgd.min.js"></script>
<script src="vendor/masonry.pkgd.min.js"></script>
<!-- Modal box-->
<script src="vendor/nivo-lightbox/nivo-lightbox.min.js"></script>
<!-- Cycle -->
<script src="vendor/cycle2.js"></script>
<!-- SmoothScroll -->
<script src="vendor/smoothScroll.js"></script>
<!-- Placeholder for IE -->
<script src="vendor/placeholders.jquery.min.js"></script>
<!-- Crossbrowser -->
<script src="js/cross-browser.js"></script>
<!-- Main Config -->
<script src="js/main.js"></script>
<!-- Holder -->
<script src="vendor/holder.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="vendor/html5shiv.js"></script>
  <script src="vendor/respond.min.js"></script>
<![endif]-->
<!-- >> /JS
============================================================================= -->
</body>
</html>
