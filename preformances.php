<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1024, initial-scale=1">
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
					<li><a href="#">Fred Gillett</a></li>
					<li><a href="#">Anita Gillett</a></li>
					<li><a href="#">Jon Lundgren</a></li>
					<li><a href="#">Ron Kobayashi</a></li>
				</ul>
			</li>
			<li><a href="sunset_strings.php">Sunset Strings</a></li>
			<li><a href="#">Performances</a></li>
			<li><a href="#">Rentals</a></li>
			<li><a href="#">Repairs</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
</nav>


<div class="preformances">
	<div class="container">
		<h1 class="page_title">Performances</h1>
		<img src="img/performances.jpg">
		<p class="tagline">AFG Music has a string quartet and Strolling Trio available to perform at your special event.</p>
		
		<audio controls>
			<source src="music/GermanDance.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
		</audio>
		<div class="sample_container">
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
			<button onclick="playMusic()">German Dance</button>
		</div>
		<p>Here are some samples of our music that you can listen to.  Most songs performed by our String Quartet, and some by the Strolling Trio.</p>
		<p>Please contact AFG Music to discuss availability, pricing, and music selection.</p>
	</div>
</div>


<footer>
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Lessons</a></li>
			<li><a href="#">Sunset Strings</a></li>
			<li><a href="#">Preformances</a></li>
			<li><a href="#">Rentals</a></li>
			<li><a href="#">Repairs</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
		<p>AFG Music &copy; Copyright <?php echo date("Y")?></p>
	</div>
</footer>
</body>
</html>