<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>P & EW EcoWord - About </title>
	<link rel="icon" type="image/png" href="images/favicom.png"/>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Portfolio
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.php">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.php">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.php">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.php">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.php">Single Portfolio Item</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.php">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.php">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.php">Blog Post</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.php">FAQ</a>
                        <a class="dropdown-item" href="404.php">404</a>
                        <a class="dropdown-item" href="pricing.php">Pricing Table</a>
                     </div>
					 </li>
					 <li class="nav-item">

					 <?php
					 require './include/default.php';
					 if(!$auth->utenteLoggato()){
					 ?>   
					 <a class="nav-link" href="login.php">Login</a>
					 <?php
					 }
					 ?>
				   	</li>
               </ul>
            </div>
        </div>
    </nav>
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">About
				<small></small>
			</h1>
		</div>
	</div>
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">About</li>
			</ol>
		</div>
		<!-- About Content -->
		<div class="about-main">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid rounded mb-4" src="images/elexpo.jpg" alt="" />
				</div>
				<div class="col-lg-6">
					<h2>Chi siamo</h2>
					<p>P & EW EcoWord è il principale informatore Vittuonese. È stata fondata nel 2021 a Vittuone, in Italia.</p>
					<p>Fin dalla sua nascita, l'azienda è stata un importante punto di riferimento per l'industria del informazione. Il suo impegno per il bilanciamento dell'ambientale, elevati standard etici negli accordi commerciali e sforzi regolari per migliorare la qualità hanno contribuito a raggiungere nuovi traguardi e stabilire nuovi principi.</p>
 				</div>
			</div>
			<!-- /.row -->
		</div>

		<!-- Team Members -->
		<div class="team-members-box">  
			<h2>La nostra squadra</h2>
			<div class="row">
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="images/team_01.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Spinarelli Mauro</h4>
						<h6 class="card-subtitle mb-2 text-muted">Insegnante</h6>
						<p class="card-text">Le sue armi principali sono il cecchino e i suoi elexpoglasses, questi due oggetti conferiscono un potere immenso all'utilizzatore, nelle mani sbagliate potrebbe portare all'estinzione della razza umana.</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="images/team_02.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Marino Nicola</h4>
						<h6 class="card-subtitle mb-2 text-muted">Studente</h6>
						<p class="card-text">Creatore del progetto e portatore di idee rivoluzionarie, risce grazie alle sua potetissime abilità a superare qualsiasi ostacolo.</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="images/team_03.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Trezzi David</h4>
						<h6 class="card-subtitle mb-2 text-muted">Futuro Elexpo</h6>
						<p class="card-text">Gli "Eletti di Expo" sono persone normali che imparano a fare cose straordinarie quando scoprono alcuni paradossi della realtà in cui vivono. L'Elexpo segue una direzione evolutiva espressa nei termini di una "Navigazione nella Rete della Vita".</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		
		<!-- Our Customers 
		<div class="customers-box"> 
			<h2>Our Customers</h2>
			<div class="row">
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_01.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_02.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_03.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_04.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_05.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="images/logo_06.png" alt="" />
				</div>
			</div>
			 /.row 
		</div>
		 /.container -->
	</div>

    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Trovaci</h5>
					<!--headin5_amrc-->
					<p class="mb10"></p>
					<p><i class="fa fa-location-arrow"></i> via milano 9</p>
					<p><i class="fa fa-phone"></i> +31-333327839875 </p>
					<p><i class="fa fa fa-envelope"></i> info@ecoword.com</p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Seguici</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-linkedin fleft padding-right"></i> </a>
							<p>...<a href="https://it.linkedin.com/">https://it.linkedin.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>...<a href="https://twitter.com/">https://twitter.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
							<p>...<a href="https://www.instagram.com/">https://www.instagram.com/</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Link veloci</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="faq.php">Chi siamo</a></li>
						<li><a href="services.php">I nostri servizi</a></li>
						<li><a href="mailto:tua@email.com">Mettiti in contatto</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<h5 class="headin5_amrc col_white_amrc pt2">Messaggi recenti</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-01.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>Come trovare cibo a Km 0?</p>
								<span>10 Maggio 2021</span>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-02.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>Come non sprecare il cibo</p>
								<span>24 Maggio 2021</span>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-03.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>Come curere il prorio giardino?</p>
								<span>18 Giugno 2021</span>
							</div>
						</li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="images/footer-logo.png" alt="" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">Tutti i diritti riservati &copy; <span id="anno"></span> <a href="#">P & EW EcoWord</a></p>
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>

<script>
var d = new Date();
document.getElementById("anno").innerHTML = d.getFullYear();
</script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
