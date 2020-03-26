<?php require_once('couch/cms.php'); ?>
<cms:template title='Homepage' />
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Page Title-->
	<title>JJ Firewood - Home</title>
	
	<!--CSS-->
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--Font Awesome-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<!--Custom-->
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!--JavaScript-->
	<!--Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!--JQuery-->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!--Custom-->
	<script src="js/global/footer.js"></script>
	<script src="js/global/nav.js"></script>
</head>
<body>

<div class="bg-dark">
	<div id="nav" class="navbar navbar-expand-lg navbar-dark mx-auto"></div>
</div>

	<div id="firewoodShowcase" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#firewoodShowcase" data-slide-to="0" class="active"></li>
			<li data-target="#firewoodShowcase" data-slide-to="1"></li>
			<li data-target="#firewoodShowcase" data-slide-to="2"></li>
			<li data-target="#firewoodShowcase" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
				<div class="carousel-item active" data-interval="3000">
				<img src="images/showcase/img1.jpg" class="" alt="Firewood Carousel Image 1">
				<div class="carousel-caption">
					<h5>Quality Firewood!</h5>
				</div>
			</div>
			<div class="carousel-item" data-interval="3000">
				<img src="images/showcase/img2.jpg" class="" alt="Firewood Carousel Image 2">
				<div class="carousel-caption">
					<h5>Dry Wood!</h5>
				</div>
			</div>
			<div class="carousel-item" data-interval="3000">
				<img src="images/showcase/img4.jpg" class="" alt="Firewood Carousel Image 4">
				<div class="carousel-caption">
					<h5>Split Wood!</h5>
				</div>
			</div>
			<div class="carousel-item" data-interval="3000">
				<img src="images/showcase/img5.jpg" class="" alt="Firewood Carousel Image 5">
				<div class="carousel-caption">
					<h5>Stock up for Winter!</h5>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#firewoodShowcase" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#firewoodShowcase" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div id="introduction" class="container">
        <h1>About Us</h1>
        <cms:editable name='about_us' type='richtext'>
            <p>We are located near Sedalia, Missouri and have been delivering high quality firewood since 2019. All of our firewood we sell is spit and seasoned so you always know you are getting high quality firewood. We sell short wood for indoor fireplaces, short wood with high BPUs for indoor stoves, and long wood with high BPUs for outdoor stoves. We sell woods of all kinds and sizes to meet your needs. We deliver 7 days a week and charge by the mile. We can throw off wood or stack for an extra charge depending on the situation. Browse our inventory to find your high quality winter supply for a reasonable price.</p>
        </cms:editable>
	</div>

<div id="footer"></div>
</body>
</html>
<?php COUCH::invoke(); ?>