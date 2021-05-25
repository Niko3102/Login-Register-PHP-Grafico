<?php
require './include/default.php';
$ris = "";
if($_POST) {
     $ris = $auth->registraNuovoUtente($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>P & EW EcoWord - Register</title>
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
                     <a class="nav-link active" href="login.php">Login</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Register
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
				<li class="breadcrumb-item active">Register</li>
			</ol>
		</div>

      <!-- Content Row -->
      <div class="row">
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Register</h3>
          
          <form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label>Inserisci Username:</label>
                <input type="text" class="form-control" name="uname" required data-validation-required-message="Inserisci Username" size="100" maxlength="200">
            </div>
            <div class="form-group">
                <label>Inserisci Password:</label>
                <input type="password" class="form-control" name="pwd" required data-validation-required-message="Inserisci Password" size="100" maxlength="200">
            </div>
            <div class="form-group">
                <label>Reinserisci Password:</label>
                <input type="password" class="form-control" name="re_pwd" required data-validation-required-message="Reinserisci Password" size="100" maxlength="200">
            </div>
            <div class="form-group">
                <label>Inserisci Nome:</label>
                <input type="text" class="form-control" name="nome" required data-validation-required-message="Inserisci Nome" size="100" maxlength="200">
            </div>
            <div class="form-group">
                <label>Inserisci Email:</label>
                <input type="text" class="form-control" name="email" required data-validation-required-message="Inserisci Email" size="100" maxlength="200">
            </div>
            <?php
               if (isset($ris)) {
                  echo "<h7 style='color:red'>$ris</h7>";
               }
            ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Effettua la registrazione</button>
            </div> 
         
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</body>
</html>