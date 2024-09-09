<html>
    <head> 
        <title>complete</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
		<h1 id="head"><b>AirJet</b></h1>
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
            session_start();
            //error_reporting(0);
            $pass=str_split($_POST['pass']);
            $flag=0;
            $lwr=0;
            $uppr=0;
            $num=0;
            $spc=0;
            $no=0;
            foreach($pass as $i){
                if($i>='A' AND $i<='Z')
                    $uppr=1;
                elseif($i>='a' AND $i<='z')
                    $lwr=1;
                elseif($i>='1' AND $i<='9')
                    $num=1;
                else
                    $spc=1;
            }

            if($num==1 AND $lwr==1 AND $uppr==1 AND $spc==1){
                $flag=1;
            }
            
            if($flag==0){
                echo '<h4 style="color:red;">include lowercase, uppercase, number and special characters in password*</h4>';
                echo '<a href="register.php">Go Back</a>';
            }
            if($flag==1){
            $con=mysqli_connect("localhost","root");
            $db=mysqli_select_db($con,"airjetdb");
            $pass=$_POST['pass'];
            $cid=$_POST['cid'];
            $name=$_POST['name'];
            $addr=$_POST['addr'];
            $age=$_POST['age'];
            $city=$_POST['city'];
            
            $mobile=$_POST['mob'];
            $email=$_POST['email'];
            $query="INSERT INTO customer(cid,name,addr,age,city,password,mobile,email) VALUES('$cid','$name','$addr','$age','$city','$pass','$mobile','$email')";
            $cmd=mysqli_query($con,$query);
            if(!($cmd))
                header("location:registernew.php");
            if($cmd){
                setcookie("flag",1,time() + (10 * 365 * 24 * 60 * 60));
                setcookie("user",$cid,time() + (10 * 365 * 24 * 60 * 60));
                setcookie("name",$name,time() + (10 * 365 * 24 * 60 * 60));
                if(isset($_GET['from'])){
                    header("location:select.php");
                }
                else{
                    header("location:main2.php");
                }
            }
        }
        ?>
    </body>
</html>