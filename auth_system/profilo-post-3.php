<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>P & EW EcoWord - Post</title>
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
						header("location: login.php");
                    exit;
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
			<h1 class="mt-4 mb-3">Inquinamento Ambientale
				<small></small>
			</h1>
		</div>
	</div>

<!-- Page Content -->
<div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="profilo.php">Profilo</a>
				</li>
				<li class="breadcrumb-item active">Post</li>
			</ol>
		</div>

		<!-- Portfolio Item Row -->
		<div class="row">
			<div class="col-md-8">
				<img class="img-fluid" src="images/portfolio-big-Item3.jpg" alt="" />
			</div>
			<div class="col-md-4">
					<h3 class="my-3">Inquinamento ambientale: cause e situazione in Italia</h3>
					<p>L’inquinamento ambientale è costituito dall’immissione di sostanze inquinanti nell’ambiente naturale, causando gravi squilibri nell’ecosistema, danni spesso irreversibili, e conseguenze negative per la salute degli esseri viventi, piante e animali, uomo compreso. Vediamo insieme quali sono le principali cause e la situazione nel nostro paese.</p>
					<p>Per inquinamento ambientale si intende la presenza di elementi inquinanti in tutto l’ambiente naturale. Per cui comprende non solo l’atmosfera, ma anche l’acqua e il terreno. Questi elementi possono essere di qualunque genere: gas, polveri, residui di combustione, liquidi, ma anche radiazioni elettromagnetiche, sostanze radioattive, rumori e vibrazioni.</p>
			</div>
		</div>
		<!-- /.row -->
        <h5 class="my-3">Inquinamento ambientale: principali cause e situazione in Italia</h5>
        <p>Negli ultimi anni, il tema dell’inquinamento ambientale è stato trattato frequentemente. Infatti rappresenta un fattore di degrado per l’ambiente e di serio pericolo per la salute. Escludendo le pochissime cause di inquinamento naturale, ad esempio le emissioni di zolfo e anidride carbonica causate dalle eruzioni vulcaniche, ad inquinare l’ambiente è sempre la mano dell’uomo.</p>
        <p>I processi industriali, il traffico, gli impianti di incenerimento dei rifiuti, le centrali termoelettriche, le raffinerie petrolifere, la lavorazione del ferro e della plastica, l’utilizzo di fertilizzanti chimici, la produzione di scorie nucleari, oltre al traffico stradale e al riscaldamento, sono fonti di inquinamento dell’ambiente ormai diffuse a livello mondiale.</p>      
                <hr>
					<!-- Date/Time -->
					<p>Pubblicato il 19 maggio 2021 alle 19:21</p>
				<hr>
				<!-- Post Content -->
				<p class="lead">Inquinamento ambientale: cause</p>

				<p>Le cause dell’inquinamento ambientale dovute ad eventi naturali riguardano principalmente le sostanze chimiche emesse durante le eruzioni vulcaniche. Queste sono zolfo, benzene e monossido di carbonio, che si sviluppano anche dagli incendi di boschi e foreste. Tuttavia, anche gli incendi sono spesso causati dall’uomo, per favorire lo sviluppo dell’urbanistica e la costruzione di impianti industriali e infrastrutture.</p>

				<p>Molto più estese sono le cause di inquinamento ambientale derivate dalle attività umane. In particolare, industria, produzione di energia elettrica e riscaldamento, agricoltura intensiva (compreso allevamento) e traffico automobilistico.</p>

				<p>Le sostanze inquinanti presenti nell’atmosfera in forte concentrazione sono il monossido di carbonio, l’ossido e il biossido di azoto, l’anidride solforosa, l’ozono e le polveri, oltre a benzene e idrocarburi in minori quantità. Derivano tutte dalla combustione del petrolio, dai processi industriali, dalle infrastrutture e dagli impianti di refrigerazione e riscaldamento.</p>
                
                <p>A rendere più aggressiva l’azione degli elementi inquinanti è la deforestazione, che inibisce la capacità dell’ambiente naturale di assorbire l’anidride carbonica, oltre a provocare forti squilibri all’ecosistema e alla catena alimentare. Inoltre, da non sottovalutare è l’inquinamento acustico: le fonti di rumore intense, dovute al traffico e all’attività industriale, influiscono notevolmente sulla salute e sulla qualità della vita.</p>
			<hr>

			
			<div class="blog-right-side">
				<!-- Comments Form -->
				<div class="card my-4">
					<h5 class="card-header">Lascia un commento:</h5>
					<div class="card-body">
						<form>
							<div class="form-group">
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Invia</button>
						</form>
					</div>
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
