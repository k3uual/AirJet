<?php
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $uid=$_POST['id'];
    $otp=$_POST['otp'];
    $newpass=$_POST['newpass'];
    $confpass=$_POST['confpass'];
    $query="select * from customer where cid='$uid'";
    $cmd=mysqli_query($con,$query);
    
    if($newpass==$confpass){
    $flag=0;
    // while($row=mysql_fetch_array($cmd)){}
    if($query)
        $flag=1;
    
    if($flag==0){
        header("location:otp.php");
    }
    else{
        mysqli_free_result($cmd);
        $cmd=mysqli_query($con,"UPDATE customer SET otp='',password='$newpass' where cid='$uid'");
        header("location:login.php");
    }
    }
    else{
        header("location:otp.php");
    }
    ?>


