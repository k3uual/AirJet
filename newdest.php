<?php
error_reporting(0);
session_destroy();
session_start();
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"airjetdb");
$query="SELECT * from airport";
$cmd=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .content{
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	
</head>
<body>
    
	<div class="container">
        <div class="main">
            <div class="content">
            <table>
        <form action="dest.php" method="post">
            <tr>
                <td>FROM:</td>
                <td>TO:</td>
            </tr>
            <tr>
                <td><select name="from" id="frm" >
                    <?php while($row=mysqli_fetch_array($cmd)){?>
                    <option value="<?php echo $row['aid']?>"><?php echo $row['city']?></option>
                    <?php }
                    mysqli_free_result($cmd);?>
                </select></td>
                <td><select name="to" id="to" >
                    <?php 
                    $cmd=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($cmd)){?>
                    <option value="<?php echo $row['aid']?>"><?php echo $row['city']?></option>
                    <?php }?>
                </select></td>
                </tr>
                <tr><td>Select date:</td></tr>
            <tr>
                
                
                <td><input type="date" name="date" id="date" >
                    <?php 
                    // while($row=mysqli_fetch_array($cmd)){
                    // $date=$row['dep_date'];
                    // $y=substr($date,0,4);
                    // $m=substr($date,4,4);
                    // $d=substr($date,-1,2);
                    // $date=$d.$m.$y;
                    ?>
                    <?php //} 
                    ?>
                </td>
            </tr>
        <?php
            $show="none";
            $rep="inline";
            if(isset($_POST['date']) && isset($_POST['next']) ){
                $_SESSION['from']=$_POST['from'];
                $_SESSION['to']=$_POST['to'];
                $_SESSION['date']=$_POST['date'];
                mysqli_free_result($cmd);
                $query="SELECT arr_time from schedule where arr_date='$_POST[date]'";
                $run=mysqli_query($con,$query);
                $num=mysqli_num_rows($run);
                if($num!=0){
                    $show="inline";
                    $rep="none";
            }
            }
            
        ?>
        <tr>
            <td><input type="button" name="prev" value="prev" style="display:<?php echo $rep;?>;"></td>
            <td><input type="submit" name="next" value="next" style="display:<?php echo $rep;?>;"></td>
        </tr>
        </form>
            <tr style="display:<?php echo $show;?>;">
            <form action="avail.php" method="post" >
                
                    <td><select name="time" id="time">
                    <?php while($row=mysqli_fetch_array($run)){?>
                    <option value="<?php echo $row['arr_time']?>"><?php echo $row['arr_time']?></option>
                    <?php }
                    mysqli_free_result($run);?>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="done" value="submit" style="display:<?php echo $show;?>;"></td>
            </form>
            </tr>
            
    
    </table>
            </div>
        </div>
		<div class="sidebar">
            <i id="expandButton" class="fa fa-bars fa-lg"></i>
            <a class="logo-a" href="main2.php"><p class="logo"></p></a>
			<ul >
                <li onclick="window.location.href=''"><i class="fa fa-clock-o fa-lg" href="#"><a class="remove" href="#">  Flight Status</a> </i></li>
                <li onclick="window.location.href=''"><i class="fa fa-plane fa-lg"><a class="remove" href="#">  Search Flights</a> </i></li>
				<li onclick="window.location.href=''"><i class="fa fa-pencil-square-o fa-lg"><a class="remove" href="#"> Manage Account</a> </i></li>
				<li onclick="window.location.href='main.php'"><i class="fa fa-tags fa-lg"><a class="remove" href="#"> Manage Booking</a> </i></li>
				<li onclick="window.location.href=''"><i class="fa fa-power-off fa-lg"><a class="remove" href="#">  Logout</a> </i></li>
                
                
			</ul>
			
		</div>
	</div>
    <script>
        var expandButton = document.getElementById("expandButton");
        var sidebar = document.querySelector(".sidebar");
        var remove = document.getElementsByClassName("remove");
        expandButton.addEventListener("click", function() {
            sidebar.classList.toggle("expand");
            // remove.fadeToggle(1000);
        });
        // sidebar.addEventListener("mouseenter",function(){
        //     sidebar.classList.add("expand");
        // }),
        // sidebar.addEventListener("mouseleave",function(){
        //     sidebar.classList.remove("expand");
        // });

    </script>
</body>
</html>

