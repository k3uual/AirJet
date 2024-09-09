<?php
            session_start();
                $con=mysqli_connect("localhost","root");
                $db=mysqli_select_db($con,"airjetdb");
                $query="select * from customer where cid = '$_POST[uid]' AND password='$_POST[pass]' ";
                $cmd=mysqli_query($con,$query);
                $row=mysqli_fetch_array($cmd);
                if(!$row){
                    header("location:loginfo2.php");
                }
                if($_POST['uid']=="admin" && $_POST['pass']=="@Password123"){
                    header("location:admin/customers.php");
                }
                //setcookie('flag',"");
                if($row){
                    if(!($_COOKIE['flag'])){
                        setcookie("flag",1,time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("user",$_POST['uid'],time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("name",$row['name'],time() + (10 * 365 * 24 * 60 * 60));
                        if(isset($_GET['from'])){
                            header("location:select.php");
                        }
                        else{
                            header("location:main2.php");
                            
                        }
                    }
                }
                if(isset($_COOKIE['flag'])){
                    $none="display:none;";
                }
                if(!(isset($_COOKIE['flag']))){
                    $sec="display:none;";
                }
                
        ?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
		<h1 id="head"><b>AirJet</b></h1>
	</header>

	<nav>
		<ul>
			<li><a href="main.php">Home</a></li>
			<li><a href="#">Book Flight</a></li>
			<li><a href="#">Manage Booking</a></li>
			<li><a href="#">Contact Us</a></li>
            <li style="<?php echo $none;?>"><a href="index1.php" class="log" style="margin-right:20px;">Login</a>|</li>
            <li style="<?php echo $none;?>"><a href="register.php"  class="log">Sign Up</a></li>
            <li style="<?php echo $sec;?>"><a href="logout.php" style="margin-right:20px" class="log" >Logout</a></li>
        </ul>
	</nav>
        <!-- <table>
        
        <tr>
            <td><?php echo $row['cid']; ?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['addr']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['email']; ?></td>
                
        </tr> -->
        <!-- </table> -->
        <?php
        // if(!$row)
        //     echo "logged in successfully";
        ?>
        <!-- <form action="main.php">
            <input type="submit" value="go back">
        </form> -->
        <?php 
        // setcookie("flag",1,time() + (-(10 * 365 * 24 * 60 * 60)));
        // setcookie("user",$_POST['uid'],time() + (-(10 * 365 * 24 * 60 * 60)));
        if(isset($_COOKIE['flag'])){
            $none="display:none;";
            
            // echo $_COOKIE['user'];
            // echo $_COOKIE['flag'];
        }
        ?>
    </body>
</html>