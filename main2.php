<?php
	error_reporting(0);
	
    if(isset($_COOKIE['flag'])){
        $none="display:none;";
		
    }
    if(!(isset($_COOKIE['flag']))){
        $sec="display:none;";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>AirJet</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
			
		}
		.banner{
			width: 500px;
			background-image: url("banner.jpeg");
			background-size: 550px 500px;
			background-position: center;
			background-repeat: no-repeat;
			
		}
		.bannertxt{
			color: #fff;
		}
		nav {
			background-color: #666;
			color: #fff;
			padding: 10px;
			text-align: center;
		}

		nav a {
			display: inline-block;
			color: #fff;
			text-decoration: none;
			padding: 10px;
			margin: 0 5px;
			border-radius: 5px;
			background-color: #999;
			transition: background-color 0.3s ease;
		}

		nav a:hover {
			background-color: #333;
		}

		section {
			background-color: #fff;
			padding: 20px;
			margin: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		section h2 {
			color: #333;
			font-size: 28px;
			margin-bottom: 20px;
		}

		section p {
			color: #666;
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
		}

		section button {
			display: block;
			margin: 0 auto;
			padding: 10px;
			border: none;
			background-color: #333;
			color: #fff;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		section button:hover {
			background-color: #666;
		}

		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		#logo{
			/* transform: scale(0.5); */
		}
        h3:hover{
			cursor: pointer;
			color: green;
		}
	</style>
</head>
<body>
	<header>
		<img id="logo" src="Logowithtext-white.svg" alt="">
		<p>Welcome to our website!</p>
	</header>

	<nav>
		<a href="#">Home</a>
		<a href="select.php">Book Flight</a>
		<a href="cancel.php">Manage Booking</a>
		<a href="#">Contact</a>
        <a style="<?php echo $none;?>" href="loginfo2.php" style="margin-right:20px" class="log" >Login</a>
        <a style="<?php echo $none;?>" href="registernew.php"  class="log">Sign Up</a>
        <a style="<?php echo $sec;?>" href="logout.php" style="margin-right:20px" class="log" >Logout</a>
	</nav>
	<center>
	<section class="banner">
		<h2 class="bannertxt">Welcome to AirJet</h2>
		<p class="bannertxt">Book your flight today and enjoy the best travel experience.</p>
	</section></center>
	<section>
		<h2>Our Moto</h2>
		<p>Book Flights And Travel Now!!!</p>
		<button>Learn More</button>
	</section>
    <section class="featured-flights">
		<h2 style="color:#000">Featured Flights</h2>
		
			<div onclick="window.location.href='select.php'">
				
				<h3>Mumbai</h3>
				
			</div>
			<div onclick="window.location.href='select.php'">
				
				<h3>Srinagar</h3>
				
			</div>
			<div onclick="window.location.href='select.php'">
				
				<h3>Surat</h3>
				
				
			</div>
			
		
	</section>
	<footer>
		<p>&copy; 2023 AirJet. All rights reserved.</p>
	</footer>
</body>
</html>
