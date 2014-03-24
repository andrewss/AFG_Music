<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<div class="preformances">
	<div class="container">
		<h1 class="page_title">Performances</h1>
		<img src="img/performances.jpg">
		<p class="tagline">AFG Music has a string quartet and Strolling Trio available to perform at your special event.</p>
		<p>Here are some samples of our music to listen to.  Most songs performed by our String Quartet, and some by the Strolling Trio.</p>
		<div class="sample_container">
			<button onclick="playMusic('GermanDance.mp3')">German Dance</button>
			<button onclick="playMusic('ICouldWriteABook.mp3')">I Could Write a Book</button>
			<button onclick="playMusic('Jesusita.mp3')">Jesusita</button>
			<button onclick="playMusic('LidaRose.mp3')">Lida Rose</button>
			<button onclick="playMusic('LittleMermaid.mp3')">Little Mermaid</button>
			<button onclick="playMusic('MerryWidow.mp3')">Merry Widow</button>
			<button onclick="playMusic('OdeToJoy.mp3')">Ode To Joy</button>
			<button onclick="playMusic('SomewhereMyLove.mp3')">Somewhere My Love</button>
			<button onclick="playMusic('ThinkOfMe.mp3')">Think Of Me</button>
			<button onclick="playMusic('TwoGuitars.mp3')">Two Guitars</button>
			<button onclick="playMusic('YellowBird.mp3')">Yellow Bird</button>
		</div>
		
		<audio id="audio" controls src="music/GermanDance.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
		</audio>
		<p class="note">Please contact AFG Music to discuss availability, pricing, and music selection.</p>
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

<script>
function playMusic(newSong){
	var audio = document.getElementById("audio");
	audio.src = 'music/' + newSong;
	audio.play();
}
</script>
</body>
</html>