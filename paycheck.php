<?php
    session_start();
    include("connect.php");
    $query="SELECT * from bank where cardno='$_POST[card_number]' AND balance>'$_SESSION[cost]'";
    $cmd=mysqli_query($con,$query);
    
    if(($cmd)){
        header("location:ticket.php");
    }
    else{
        header("location:pay.php");
    }
?>