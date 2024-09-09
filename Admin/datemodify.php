<?php
    $from=trim($_POST['from'],":");
    $to=trim($_POST['to'],":");
    //$fromimutable=$dt = new DateTimeImmutable("$from");
    $tos=intval(substr($to,-2,2));
    $tom=intval(substr($to,3,2));
    $toh=intval(substr($to,0,2));
    $frms=intval(substr($to,-2,2));
    $frmm=intval(substr($to,3,2));
    $frmh=intval(substr($to,0,2));
    include("connect.php");
    $query="Select sid,arr_time,dep_time,if(arr_time<'10:00:00',1,0) AS valid from schedule";
    $cmd=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($cmd)){
        echo $row['sid']."<br>";
        echo $row['dep_time']."<br>";
        echo $row['arr_time']."<br>";
        echo $row['valid'];
    }
    //$acmd=mysqli_query($con,"set @a=SELECT ADDDATE('2023-04-10', INTERVAL 1 DAY)");
    $ashow=mysqli_query($con,"set @a:= ADDDATE('2023-04-10', 1);");
    $aa=mysqli_query($con,"select @a");
    $arow=mysqli_fetch_array($aa);
    print_r($arow);
    //echo $from."<br>".$tos."<br>".$tom."<br>".$toh."<br>";
    var_dump($toh);
    $a=mktime($toh,$tom,$tos);
    // $b=date('H:m:s',$frmh.$frmm.$frms);
    // $c=$fromimutable->modify("-$to");
    //new DateInterval();
    //echo $c;
?>