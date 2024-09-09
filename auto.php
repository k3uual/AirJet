<?php
    session_start();
    
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $query="SELECT * from customer";
    $cmd=mysqli_query($con,$query);
    $c=mysqli_num_rows($cmd);
    if(!($c)){
        echo "C00001";
    }
    else{
        echo "C".sprintf("%05d", $c);
    }
?>
<?php
    
?>