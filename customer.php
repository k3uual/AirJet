<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
		<h1 id="head"><i>AirJet</i></h1>
	</header>

	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Book Flight</a></li>
			<li><a href="#">Manage Booking</a></li>
			<li><a href="#">Contact Us</a></li>
            <li><a href="index1.php" class="log">Login</a></li>|
            <li><a href="register.php" style="margin-left:20px;" class="log">Sign Up</a></li>
		</ul>
	</nav>
        <?php
            $a="hello";
            $b="world";
            $c=$_POST['no'];
            echo $c;
        ?>
        <div style="border-style:solid;">
        <?php echo $a." ".$b."!";?>
        </div>
    </body>
</html>
        