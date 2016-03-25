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
						<!-- page title -->
						<h2 class="title1 couple-title1 title1-border">Rsvp</h2>	
						<!-- /page title -->
						<div class="row">
							<!-- RSVP -->
							<div class="col-sm-4 rsvp-text">
								<h3 class="title4">Por favor preencha o nosso formulário RSVP</h3>
								<p>Pedimos que responda até 16 de junho de 2016. Esperamos poder contar com você na nossa cerimônia!</p>								
							</div>
							<div class="col-sm-8">

								<!-- Contact Form -->
								<form id="contactForm" action="php/contact-form.php" method="POST"> 
									<!-- Form Field -->        
						            <div class="form-group">
						            	<label for="name">Seu nome</label>
						            	<input type="text" id="name" name="name" class="form-control required" placeholder="Nome"/>
						            </div>   
						            <!-- /Form Field -->   
						            <div class="row">
										<div class="col-md-6">
											<!-- item -->            
											<div class="form-group">
												<label for="email">Seu email</label>
											 	 <input type="email" id="email" name="email" class="form-control required" placeholder="Email"/>
											</div>    
											<!-- /item -->
										</div>
										<div class="col-md-6">
											<!-- item -->            
											<div class="form-group">
												<label for="guests">Quantos convidados?</label>
											 	<input type="text" class="form-control" name="guests" id="guests" placeholder="Número de convidados" required>
											</div>    
											<!-- /item -->
										</div>
									</div>  
						           <!-- item -->            
									<div class="form-group" style="display: none;">
										<label for="attending">Eu vou participar:</label>
									 	<select name="attending" id="attending" class="form-control">
									 		<option value="All Events" selected="selected">Todos os eventos</option>
									 		<option value="The Ceremony">Somente da cerimônia</option>
									 		<option value="The Party">Somente da festa</option>
									 	</select>
									</div>    
									<!-- /item -->
						            <!-- Form Field -->                 
						            <div class="form-group"> 
						            	<label for="message">Mensagem (opcional):</label>
						              	<textarea class="form-control required" id="message" name="message" placeholder="Mensagem"></textarea>
						            </div>    
						            <!-- /Form Field -->           
						            <!-- Form Field -->  
						            <div class="form-group form-send">
						            	<button type="submit" value="" class="btn btn-1c"><span class="fa fa-paper-plane"> &nbsp;</span>Enviar!</button>
						            	<!--<input type="submit" value="Send" class="btn btn-1c"/>-->
						            </div>   
						            <!-- /Form Field -->                  
					          	</form>	
					          	<!-- / Contact form -->
					          	<!-- Form - Success Message -->	
					          	<div id="contactSuccess" class="contact-feedback">Sua mensagem foi enviada!!</div>		
								<!-- /Form - Sucess Message -->
								<!-- Form - Error Message -->
								<div id="contactError" class="contact-feedback">Erro</div>
								<!-- /form - Error Message -->
								
								<div class="form">
								</div>
								<div class="wait">Enviando...</div>
				                <div class="error">Ops, algo deu errado...</div>
				                <div class="success">Sua mensagem foi enviada!</div>
							</div>
							<!-- /RSVP -->
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
