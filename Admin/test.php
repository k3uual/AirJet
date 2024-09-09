<?php
include("connect.php");
$cmd=mysqli_query($con,"show columns from fclass");
while($row=mysqli_fetch_array($cmd)){
    // echo $row['Field'];
    if($row['Field']=='fid'){
        echo $row['Field'];
        
        
    }
    if($row['Field']=='classid')
            echo $row['Field'];
}

?>