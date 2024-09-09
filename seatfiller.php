<?php
    //include("connect.php");
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $cmd=mysqli_query($con,"Select * from schedule");
    $cmd2=mysqli_query($con,"select * from seat");
    while($row=mysqli_fetch_array($cmd)){
        $i=0;
        while($row2=mysqli_fetch_array($cmd2)){
            // $insert="INSERT INTO `airjetdb`.`seatschedule` (`seatno`, `sid`, `avail`) VALUES ('$row2[seatno]', '$row[sid]', '1');";
            $insert="INSERT INTO seatschedule VALUES ('$row2[seatno]', '$row[sid]', '1');<br>";
            echo $insert;
            
            
            $i++;
        }
        mysqli_free_result($cmd2);
        $cmd2=mysqli_query($con,"select * from seat");
    }
?>
