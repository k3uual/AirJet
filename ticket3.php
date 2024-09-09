<?php
    session_start();
    $flag=0;
    $_SESSION['total']=intval(substr($_POST['total'],-4,4));
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    //echo $_POST['card_number'].$_POST['exp_date'].$_POST['cvv'].$_POST['name_on_card'];
    $pay="select * from bank where cardno='$_POST[card_number]' AND expdate='$_POST[exp_date]'
    AND cvv='$_POST[cvv]' AND name='$_POST[name_on_card]'";
    $paycheck=mysqli_query($con,$pay);
    $i=0;
    $count=count($_SESSION['chosen']);
    if(mysqli_num_rows($paycheck)){
        while($i<$count){
            $cost=$_SESSION['cost'][$i];
            $schedule=$_SESSION['schedule'][$i];
            $class=$_SESSION['classid'][$i];
            $seat=$_SESSION['seat'][$i];
            
            $cust=$_COOKIE['user'];
            $query="select CONVERT(TRIM(LEADING 'T0' from tno),UNSIGNED INTEGER) AS t from ticket order by t DESC LIMIT 1";
            $tno="T00000";
            $name=$_COOKIE['name'];
            date_default_timezone_set("Asia/Kolkata");
            $date=date("Y-m-d",time());
            $cmd=mysqli_query($con,$query);
            $num=mysqli_num_rows($cmd);
            $row=mysqli_fetch_array($cmd);
            if($num){
                $t=intval($row['t'])+1;
                $tno="T".sprintf("%05d", $t);
            }
            
            mysqli_free_result($cmd);
            $query="LOCK TABLES ticket WRITE";
            $lock=mysqli_query($con,$query);
            $query="INSERT INTO ticket 
            VALUES ('$tno','$date','$cost','$_POST[card_number]','UPI','$cust','$schedule','$seat')";
            echo $query.'<br>';
            $cmd=mysqli_query($con,$query);
            if($cmd)
                $ticket[$i]=$tno;
            $i++;
        }
    }?>
    