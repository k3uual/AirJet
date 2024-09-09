<?php
//session_start();
$table="customer";
//$_SESSION['table']=$table;

include("connect.php");
$query="show columns from $table";
$cmd=mysqli_query($con,$query);
while($row=mysqli_fetch_array($cmd)){
     echo $row['Field'];
            }
        
                
                //echo mysqli_num_rows($cmd2);
                $query2="select * from $table";
                $cmd2=mysqli_query($con,$query2);
                while($row2=mysqli_fetch_array($cmd2)){
                mysqli_free_result($cmd);
                $cmd=mysqli_query($con,$query);
                while($row3=mysqli_fetch_array($cmd)){ 
                    echo $row2[$row3['Field']];
                    // echo '<td>'.$row2['classid'].'</td>';
                    // echo '<td>'.$row2['type'].'</td>';
                }
                
                } 
?>