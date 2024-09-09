<?php
$i=0;
$j=50;
include("connect.php");
$query="call scheduleupdate";
 while($i<$j){
    mysqli_query($con,$query);
 }
?>