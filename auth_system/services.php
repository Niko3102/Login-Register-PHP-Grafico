<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>P & EW EcoWord - Services </title>
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
                     <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.php">FAQ</a>
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
			<h1 class="mt-4 mb-3">Services
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
				<li class="breadcrumb-item active">Services</li>
			</ol>
		</div>

		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />

		<!-- Services Section -->
		<div class="services-bar">
            <h1 class="my-4">I nostri argomenti</h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Case Zero Emissioni</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Il concetto di eco-casa è strettamente legato a quello di casa “passiva” ovvero un modello di abitazione che viene costruito ...</p>
                     </div>
                     <div class="card-footer">
                        <a href="profilo.php" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Trasporti Eletrici</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-02.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">L'energia elettrica accumulata dalla batteria viene trasferita al motore elettrico grazie ad un dispositivo inverter che ha ...</p>
                     </div>
                     <div class="card-footer">
                        <a href="profilo.php" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Inquinamento Ambientale</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-03.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">L’inquinamento ambientale si verifica nel momento in cui vengono disperse in un determinato luogo sostanze dannose ...</p>
                     </div>
                     <div class="card-footer">
                        <a href="profilo.php" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
		<!-- Our Customers -->
		<div class="customers-box"> 
			<h2>I nostri clienti</h2>
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
			<!-- /.row -->
		</div>
		</div>

    </div>
    <!-- /.container -->

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
								<p>Come curare il prorio giardino?</p>
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
