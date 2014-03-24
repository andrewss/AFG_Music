<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1024, initial-scale=device-width">
<title>AFG Music</title>

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
</head>
<body>
<header>
	<div class="container">
		<a href="index.php"><img src="img/afg_white.png" alt="Home"></a>
		<h1>AFG Music</h1>
		<h3>Lessons - Sales - Repairs - Rentals - Performances</h3>
	</div>
</header>
<nav>
	<div class="container">
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li>
				<a href="lessons.php">Lessons<i class="fa fa-angle-down"></i></a>
				<ul>
					<li><a href="fred_gillett.php">Fred Gillett</a></li>
					<li><a href="anita_gillett.php">Anita Gillett</a></li>
					<li><a href="jon_lundgren.php">Jon Lundgren</a></li>
					<li><a href="ron_kobayashi.php">Ron Kobayashi</a></li>
				</ul>
			</li>
			<li><a href="sunset_strings.php">Sunset Strings</a></li>
			<li><a href="performances.php">Performances</a></li>
			<li><a href="rentals.php">Rentals</a></li>
			<li><a href="repairs.php">Repairs</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
	</div>
</nav>
<div class="hero">
</div>


<div class="services">
	<div class="container">
		<h3>Our Services</h3>
		<div class="single_service lessons">
			<div class="service_icon_outer">
				<i class="fa fa-music"></i>
			</div>
			<h5>Lessons</h5>
			<h6>We offer music instruction in the following instruments</h6>
			<ul class="two_column">
				<li>Guitar</li>
				<li>Piano</li>
				<li>Keyboards</li>
				<li>Violin</li>
				<li>Cello</li>
				<li>Banjo</li>
				<li>Mandolin</li>
				<li>Drums</li>
				<li>Percussion</li>
				<li>Band Instruments</li>
			</ul>
			<a href="lessons.php" class="details_btn">Details</a>
		</div>

		<div class="single_service repair">
			<div class="service_icon_outer">
				<i class="fa fa-wrench"></i>
			</div>
			<h5>Repair</h5>
			<h6>We offer repairs on the following types of instruments</h6>
			<ul>
				<li>Stringed Instruments</li>
				<li>Brass Instruments</li>
				<li>Reed Instruments</li>
			</ul>
			<a href="repairs.php" class="details_btn">Details</a>
		</div>

		<div class="single_service rental">
			<div class="service_icon_outer">
				<i class="fa fa-exchange"></i>
			</div>
			<h5>Rental</h5>
			<h6>We rent and lease various musical instruments.  We have great programs for band students.</h6>
			<p>Instrument rental is an ideal way for band students and beginning students to begin learning an instrument without making an expensive investment.</p>
			<a href="rentals.php" class="details_btn">Details</a>
		</div>
	</div>
</div>

<div class="about_us">
	<div class="container">
		<h3>About Us</h3>
		<img src='img/store_front.jpg'>
		<div class="text_container">
			<h2>AFG Music has been in business in Costa Mesa since 1980.  We feature music lessons, sales of musical instruments and supplies, repairs, and instrument rentals. </h2>
			<p>Our Sunset Strings performs at weddings and other special events.</p>
			<p>While we are not a high volume sales dealer, we do carry a selection of reasonably priced guitars and a wide assortment of parts, strings, reeds, and accessories for various instruments.  Plus we can order whatever we don't carry in stock.</p>
			<p>Take some time to explore our site to get information on our lessons and instructors, rental instruments, repairs, and our performances for your special ocassions.</p>
		</div>
	</div>
</div>
<div class="friends">
	<div class="container">
		<h3>Our Friends</h3>
		<ul>
			<li>
				<a target="_blank" href="http://newportharborhsmusic.wix.com/nhhs">
					<img src="img/nhhsm.jpg">
					<span>Newport Harbor High School Music</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="http://www.desertsymphony.org/">
					<img src="img/ds.jpg">
					<span>Desert Symphony</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<footer>
	<div class="container">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="lessons.php">Lessons</a></li>
			<li><a href="sunset_strings.php">Sunset Strings</a></li>
			<li><a href="performances.php">Performances</a></li>
			<li><a href="rentals.php">Rentals</a></li>
			<li><a href="repairs.php">Repairs</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
		</ul>
		<p>AFG Music &copy; Copyright <?php echo date("Y")?></p>
	</div>
</footer>
</body>
</html>