<?php
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $a=14;
    $i=1;
    while($a>0){
        $query="select * from schedule";
        $cmd=mysqli_query($con,$query);
        if($i==0){
            $query2="set @sdate:= ADDDATE(@sdate, 1);";
            $cmd2=mysqli_query($con,$query2);
            //mysqli_free_result($cmd2);
        }
        $id=28;
        $sid='SC0028';
        //echo $row['date'];
        while($row=mysqli_fetch_array($cmd)){
            if($i==1){
                $query2="set @sdate:= ADDDATE('$row[dep_date]', 1);";
                $cmd2=mysqli_query($con,$query2);
                //mysqli_free_result($cmd2);
                $i--;
            }
            $id++;
            if($id>28){
                // $getsid=mysqli_query($con,$query);
                // while($row9=mysqli_fetch_array($getsid)){
                    
                //     //echo "gg";
                // }
                $t=intval(trim($sid,"SC"));
                $t+=1;
                $sid="SC".sprintf("%04d", $t);
                
            }echo $sid."<br>";
            $query3="select @sdate AS sdate";
            $cmd3=mysqli_query($con,$query3);
            $arow=mysqli_fetch_array($cmd3);
            $query4="INSERT INTO schedule VALUES ('$sid', '$arow[sdate]', '$row[dep_time]', '$arow[sdate]', '$row[arr_time]', '$row[fid]')";
            $insert=mysqli_query($con,$query4);
            if($insert){
                echo "HELLO";
            }
            //print_r($arow);
            //echo $query4;
        }
        
        mysqli_free_result($cmd);
        mysqli_free_result($cmd3);
        $a--;
    }
?>