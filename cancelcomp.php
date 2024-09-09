<?php
    session_start();
    include("connect.php");
    //$file=$_GET['file'];
    $table='ticket';
    
    $id=$_GET['id'];
    $query="DELETE from $table WHERE tno='$id'";
    
    $stat='failed';
    $cmd=mysqli_query($con,$query);
    if($cmd){
        $stat='success';
    }
    header("location:cancel.php?status=$stat&linkfrom=Removal");
?>