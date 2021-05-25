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
			<h1 class="mt-4 mb-3">Trasporti Eletrici
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
				<img class="img-fluid" src="images/portfolio-big-Item2.jpg" alt="" />
			</div>
			<div class="col-md-4">
					<h3 class="my-3">Auto elettriche: cosa sono?</h3>
					<p>Le auto elettriche sono veicoli che utilizzano l’elettricità per movimentarsi, e non la benzina o altri combustibili fossili. Attraverso l’apposita ricarica, utilizzati di solito nelle automobili.</p>
					<p>Hanno un’autonomia che varia di molto a seconda del modello e della casa automobilistica.  Le case costruttrici dichiarano, per i modelli equipaggiati con batterie al litio, delle autonomie nell’ordine di 200–400 Km. Alcuni tra i modelli più recenti,  arrivano fino a 600 Km.</p>
			</div>
		</div>
		<!-- /.row -->
		<h5 class="my-3">Auto elettriche: vantaggi</h5>
        <h6>Grazie alle auto elettriche è possibile salvaguardare l’ambiente inquinando di meno, ma anche risparmiare sui costi del carburante. I vantaggi delle auto elettriche si possono riassumere in 4 punti:</h6>
				<ul>
					<li>Manutenzione ordinaria e straordinariamente costosa</li>
					<li>Costi di ricarica ridotti</li>
					<li>Esenzione bollo auto per 5 anni</li>
                    <li>Copertura assicurativa scontata del 50%</li>
                    <li>Possibilità di accedere alle zone a traffico limitato e di parcheggiare gratuitamente sulle strisce blu</li>
                    <li>Detrazione fiscale per acquisto e installazione della colonnina di ricarica rapida</li>
                </ul>
        <h5 class="my-3">Auto elettriche: svantaggi</h5>
        <p>Oltre ai costi e ai prezzi di listino ancora abbastanza elevati, le auto elettriche presentano anche degli svantaggi legati più che altro allo stato dell’arte in Italia e nel Mondo.</p>
        <p>Dal punto di vista ambientale, le auto elettriche possono rappresentare un vantaggio solo se alimentate con energia proveniente da fonti rinnovabili.</p>
        <p>Di per sé, infatti, il motore elettrico non produce emissioni inquinanti né vapore acqueo, ma se l’energia utilizzata per ricaricare le batterie proviene da combustibili fossili, il vantaggio in termini di emissioni di CO2 viene azzerato. E non è tutto.</p>
        <p>Il meccanismo di incentivi vigente nell’Unione Europea potrebbe addirittura peggiorare la situazione. Un aumento del 10% nelle vendite di auto elettriche stimolerebbe, infatti, la produzione di nuove vetture tradizionali, finendo per far salire del 20% le emissioni inquinanti.</p>       
                <hr>
					<!-- Date/Time -->
					<p>Pubblicato il 27 maggio 2021 alle 15:21</p>
				<hr>
				<!-- Post Content -->
				<p class="lead">Auto elettriche prezzo</p>

				<p>L’ostacolo principale all’utilizzo di massa delle auto elettriche resta il prezzo d’acquisto elevato, determinato sia dal costo delle batterie, sia dall’assicurazione.</p>

				<p>Il costo medio mensile per un’auto a benzina in Italia è di 667 euro, per un diesel è 628 euro, per un’auto elettrica ci vogliono 986 euro. Tali costi potrebbero però ridurre la loro incidenza proprio con l’inizio di una produzione di serie.</p>

				<p>Per le auto elettriche il listino, invece, parte dai 23.500 euro dei modelli più semplici fino ai 150.000 euro di quelli tecnologicamente più avanzati.</p>
                
                <p>Tuttavia lo Stato incentiva l’acquisto di questi veicoli con i cosiddetti ecobonus. Gli incentivi per le auto elettriche arrivano fino a 6.000 euro e saranno erogati a partire dal primo marzo 2019.</p>
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
