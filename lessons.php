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
			<li><a href="#">Sunset Strings</a></li>
			<li><a href="#">Performances</a></li>
			<li><a href="#">Rentals</a></li>
			<li><a href="#">Repairs</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
</nav>

<div class="teachers">
	<div class="container">
		<h1 class="page_title">Lessons</h1>
		<p class="tagline">At AFG Music, we are all about teaching music.  We take students of all ages and skill levels, and we teach a large variety of band and orchestra instruments here.</p>
		<ul>
			<li class="teacher">
				<img src="img/fred_gillett.jpg">
				<div class="text">
					<h2>Fred Gillett</h2>
					<h4>Guitar, Bass, Violin, Mandolin, and Banjo</h4>
					<p class="bio fred">Fred is the owner of AFG music and has spent his life performing and teaching music.  He is a great instructor with lots of patience.</p>
					<a href="fred_gillett.php">View Resume &raquo;</a>
				</div>
			</li>

			<li class="teacher">
				<img src="img/anita_gillett.jpg">
				<div class="text">
					<h2>Anita Gillett</h2>
					<h4>Cello, Violin, Piano.</h4>
					<p class="bio fred">Anita teaches these instruments and is an excellent instructor.</p>
					<a href="#">View Resume &raquo;</a>
				</div>
			</li>

			<li class="teacher">
				<img src="img/jon_lundgren.jpg">
				<div class="text">
					<h2>Jon Lundgren</h2>
					<h4>Drums, Percussion, Piano, Keyboard, and most band instruments. </h4>
					<p class="bio fred">Jon is an excellent instructor on a wide variety of instruments from drums to horns to keyboards.</p>
					<a href="#">View Resume &raquo;</a>
				</div>
			</li>

			<li class="teacher">
				<img src="img/ron_kobayashi.jpg">
				<div class="text">
					<h2>Ron Kobayashi</h2>
					<h4>Piano and Keyboards</h4>
					<p class="bio fred">Ron is an excellent musician and composer as well as an excellent instructor.</p>
					<a href="#">View Resume &raquo;</a>
				</div>
			</li>
		</ul>

		<p class="note">The standard lesson plan at AFG Music is one half hour per week at a cost of $95 per month.  Individual plans can be arranged with the instructors to meet the needs of the students.</p>
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
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
		<p>AFG Music &copy; Copyright <?php echo date("Y")?></p>
	</div>
</footer>
</body>
</html>