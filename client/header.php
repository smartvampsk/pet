<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light clientNav ">
			   	<a class="navbar-brand" href="../"><img class="rounded-circle" src="../images/logo2.png" height="60px"></a>
			   	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   	<span class="navbar-toggler-icon"></span>
			   	</button>
			   	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			      	<ul class="navbar-nav mr-auto">
			         	<li class="nav-item active">
			            	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			         	</li>
			         	<li class="nav-item dropdown">
			            	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Membership</a>
			            	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			               	<a class="dropdown-item" href="Information.php">Information</a>
			               	<a class="dropdown-item" href="register.php">Registration</a>
			            	</div>
			         	</li>
			         	<li class="nav-item">
			            	<a class="nav-link" href="contact.php">Contact us</a>
			         	</li>
			         	<li class="nav-item">
			            	<a class="nav-link" href="about.php">About us</a>
			         	</li>
			         	<?php 
			         		session_start();
							if (isset($_SESSION['user'])) { ?>
								<li class="nav-item">
			        	    		<a class="nav-link" href="newsletter.php">Newsletter</a>
			         			</li>
								<li class="nav-item">
			            			<a class="nav-link" href="logout.php">Logout</a>
			         			</li>
							<?php  } 
							else { ?>
								
			    	     		<li class="nav-item">
			        	    		<a class="nav-link" href="login.php">Login</a>
			         			</li> 
			         		<?php } ?>  
			      	</ul>
			      	<form class="form-inline my-2 my-lg-0">
			         	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			         	<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
			      	</form>
			   	</div>
			</nav>
		</div>
	</header>
	<div class="container">
		<img class="pt-0" src="../images/6.jpg" alt="image" style="margin-left: -15px; padding-right:3px;" width="103%" height="410px">
	</div>
	<section class="container mt-0 pt-0">
		
		