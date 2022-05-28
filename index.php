<?php
include_once "config.php";
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION["loggedin"]!==true){
	header("location:login.php");
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
						
					</li>
					
				</ul>
			</div>
		</div>
	</nav>


	
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Complete our Online Selling Course</h2>
				<p class="lead">Set up your  store once to easily sync and sell across a website, social media, marketplaces like Amazon, and live in-person. Get started with one, or try them all.</p><a class="btn btn-purple btn-lg" href="https://www.learnworlds.com/how-to-sell-online-courses/" target="_blank">Complete Online Course</a>
			</div>
		</div>
	</div>

	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">START WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/download.png">
						<h3>Ebay</h3>
						<p>eBay Inc. is an American multinational e-commerce corporation based in San Jose, California, that facilitates consumer-to-consumer and business-to-consumer sales through its website. 
							eBay was founded by Pierre Omidyar in 1995, and became a notable success story of the dot-com bubble.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/images.jfif">
						<h3>Amazon</h3>
						<p>Amazon.com, Inc., known as Amazon  is an American online business and cloud computing company. 
							It was founded on July 5, 1994 by Jeff Bezos. It is based in Seattle, Washington. It is the largest Internet-based store in the world by total sales and market capitalization.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/Wish.jpg">
						<h3>Wish</h3>
						<p>CWish is an American online e-commerce platform for transactions between sellers and buyers. Wish was founded in 2010 by Piotr Szulczewski (CEO) and Danny Zhang (former CTO).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to Sell Online</h3>

				<p>Not sure where to start? Read the complete guide to finding, evaluating, validating, and sourcing a product to sell online.</p>
			<a class="btn btn-purple btn-lg" href="https://www.learnworlds.com/how-to-sell-online-courses/" target="_blank">Complete Online Course</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/selling-online-courses-academy.jpg"></div>
		</div>
	</div>






	<?php include 'includes/footer.php'; ?>



	


</body>
</html>


