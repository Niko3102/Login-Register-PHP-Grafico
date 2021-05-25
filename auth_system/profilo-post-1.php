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
			<h1 class="mt-4 mb-3">Case Zero Emissioni
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
				<img class="img-fluid" src="images/portfolio-big-Item.jpg" alt="" />
			</div>
			<div class="col-md-4">
					<h3 class="my-3">Case ad emissioni zero: che cosa significa?</h3>
					<p>Il concetto di eco-casa è strettamente legato a quello di casa “passiva” ovvero un modello di abitazione che viene costruito con sistemi e impianti energetici che sfruttano le risorse rinnovabili come l’energia geotermica, l’energia solare e le biomasse. L’obiettivo è quello di garantire uno sviluppo sostenibile che abbia effetti positivi dal punto di vista ambientale, sociale ed economico.</p>
					<p>Abitazioni green e sostenibilità ambientale sono due tematiche al centro dell’attenzione a livello mondiale grazie alla sempre maggiore diffusione di una cultura edilizia che si fonda su progetti ad alta efficienza energetica e che limiti il più possibile l’impatto ambientale, migliorando contemporaneamente la salute e la qualità della vita dei cittadini. 

Grazie alle innovazioni in campo tecnologico, la costruzione di un edificio a emissioni zero è diventata realtà: se un tempo l’obiettivo emissioni zero era limitato esclusivamente al funzionamento dell’edificio, oggi è possibile estendere il concetto di “zero emission building” all’intera vita dell’edificio, includendo la fase di progettazione e costruzione.</p>
			</div>
		</div>
		<!-- /.row -->
		<h5 class="my-3">Ciò è possibile grazie alla presenza dei seguenti elementi: </h5>
				<ul>
					<li>Materiali sostenibili: per la costruzione di una casa ecologica si fa uso di materiali a basso impatto ambientale e a ciclo continuo di sviluppo come legno, argilla, lane minerali;</li>
					<li>Energie rinnovabili: le cosiddette energie alternative sono la chiave dei progetti di architettura eco-sostenibile. Tra le energie rinnovabili per la casa più diffuse si contano l’energia solare che può essere sfruttata grazie all’installazione di pannelli solari ad alta efficienza energetica e l’energia geotermica che sfrutta il calore del sottosuolo tramite impianti e sistemi a pompa di calore;</li>
					<li>Smart Home: le case eco-sostenibili più all’avanguardia integrano anche un sistema domotico che, non solo permette di gestire con facilità funzionalità domestiche come l’illuminazione o gli elettrodomestici, ma garantisce un’ottimizzazione del consumo energetico. Una casa intelligente, infatti, si fonda su un uso smart dell’energia e delle risorse, sfruttate solo quando è realmente necessario.</li>
				</ul>
                <hr>
					<!-- Date/Time -->
					<p>Pubblicato il 25 maggio 2021 alle 12:36</p>
				<hr>
				<!-- Post Content -->
				<p class="lead">Sostenibilità ambientale: nuova frontiera dell’edilizia</p>

				<p>Il concetto di sviluppo è strettamente legato a quello di tutela dell’ambiente che, negli ultimi decenni, si è evoluto andando ad includere non solo la dimensione ambientale, ma anche quella sociale ed economica. Si definisce sostenibile un modello di sviluppo che risulta capace di soddisfare i bisogni e le necessità del presente senza però compromettere la possibilità per le generazioni future di soddisfare i propri. </p>

				<p>Nel campo dell’edilizia sono sempre di più le soluzioni innovative e all’avanguardia che nascono per supportare ambiente e società con edifici e progetti urbanistici a basso impatto ambientale. Si tratta di un modo nuovo di pensare alle abitazioni, fondandosi sui principi della bioarchitettura ovvero utilizzando solo materiali e tecniche che salvaguardano l’ecosistema ambientale e, al contempo, migliorano la qualità della vita e il benessere dell’essere umano. </p>

				<p>UPTOWN Milano ha accolto pienamente questa nuova cultura dell'abitare, rispettosa sia dell’ambiente che della persona, diventata realtà grazie a edifici in classe A, impianti geotermici integrati con sistemi di teleriscaldamento e, in partnership con A2A Energia, utilizzo di energia elettrica prodotta al 100% da fonti rinnovabili sia per le zone pubbliche che per le utenze private. Scegliere un’abitazione costruita secondo le regole della bioedilizia non significa solo ottimizzare i consumi e avere migliori performance a livello energetico, ma anche fare una scelta consapevole nei confronti del pianeta e contribuire al raggiungimento di una Europa carbon free entro il 2030. </p>
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
