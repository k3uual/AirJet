<?php
    session_start();
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $query="SELECT seatschedule.seatno,schedule.sid,flight.fid,fclass.classid,fclass.cost   
    from schedule
    INNER JOIN seatschedule ON seatschedule.sid = schedule.sid
    INNER JOIN flight ON flight.fid = schedule.fid 
    INNER JOIN fclass ON flight.fid = fclass.fid
    where seatschedule.avail=1 AND flight.from='$_SESSION[from]' AND flight.to='$_SESSION[to]' 
    AND schedule.arr_date='$_SESSION[date]' AND schedule.arr_time='$_POST[time]'";
    $cmd=mysqli_query($con,$query);
    $_SESSION['data']=array();
    //echo $_SESSION['flight'][0].$_SESSION['flight'][1];
    $num=mysqli_num_rows($cmd);
    echo mysqli_num_rows($cmd);
    $i=0;
    while($row=mysqli_fetch_array($cmd)){
        $_SESSION['data'][$i]=$row['fid'].$row['seatno'].$row['sid'].$row['classid'].$row['cost'];
        $i++;
    }
    header("location:class2.php");
?>