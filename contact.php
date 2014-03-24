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


<div class="contact">
	<div class="container">
		<h1 class="page_title">Contact</h1>
		<div class="loc_container">
			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=711+West+17th+St.+Suite+F1+Costa+Mesa,+Ca.+92627&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=57.42297,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=711+W+17th+St,+Costa+Mesa,+California+92627&amp;t=m&amp;z=14&amp;ll=33.634883,-117.927863&amp;output=embed"></iframe>
			<div class="address_container">
				<p class="address">AFG Music</p>
				<p class="address">711 West 17th St. Suite F1</p>
				<p class="address">Costa Mesa, Ca. 92627</p>
				<p class="address">(949) 642-1686</p>
				<p class="address">(949) 548-7898</p>
				<p class="address_note">We are located a few blocks from 17th. St and Harbor Blvd. in Costa Mesa. Our address is on 17th street, but we are located in the back of the complex. To get to us, take Pomona St. to Farad, which is one block south of 17th street, and turn in the driveway on the right.</p>
			</div>
			<form method="POST">
				<div class="input_container">
					<label>First Name<span class="req">*<span></label>
					<input type="text" name="fname">
				</div>
				<div class="input_container">
					<label>Last Name<span class="req">*<span></label>
					<input type="text" name="lname">
				</div>
				<div class="input_container">
					<label>Email<span class="req">*<span></label>
					<input type="text" name="email">
				</div>
				<div class="input_container">
					<label>Phone Number</label>
					<input type="text" name="phone">
				</div>
				<div class="textarea_container">
					<label>Message<span class="req">*<span></label>
					<textarea name="message"></textarea>
				</div>
				<button type="submit">Send</button>
			</form>
		</div>
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