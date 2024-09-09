<?php
    $from=substr($_POST['from'],-4,4);
    $to=substr($_POST['to'],-4,4);
    echo $to.$from;
    $date="2023-04-30";
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $query="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,fclass.classid,fclass.cost,a.city AS city1,aa.city AS city2  
    from schedule
    INNER JOIN seatschedule ON seatschedule.sid = schedule.sid
    INNER JOIN flight ON flight.fid = schedule.fid 
    INNER JOIN fclass ON flight.fid = fclass.fid
    INNER JOIN airport AS a ON a.aid = flight.from
    INNER JOIN airport AS aa ON aa.aid = flight.to 
    where seatschedule.avail=1 AND flight.from='$from' AND flight.to='$to' 
    AND schedule.arr_date='$date' GROUP BY fid,classid ";
    // $query="SELECT ticket.tno,ticket.seatno,ticket.scid,flight.fid,ticket.tdate,schedule.arr_date, 
    // schedule.arr_time,schedule.dep_date,schedule.dep_time,ticket.cost,flight.from,flight.to,customer.name,
    // customer.cid,customer.mobile,a.terminal AS terminal1,aa.terminal AS terminal2,a.city AS city1,aa.city AS city2 
    // from ticket
    // INNER JOIN schedule ON ticket.scid = schedule.sid
    // INNER JOIN flight ON flight.fid = schedule.fid 
    // INNER JOIN airport AS a ON a.aid = flight.from
    // INNER JOIN airport AS aa ON aa.aid = flight.to 
    // INNER JOIN seat ON seat.seatno = ticket.seatno 
    // INNER JOIN customer ON ticket.cid = customer.cid ";
    
    //schedule.arr_time>=ADDTIME('10:00:00','4') 
    $cmd=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($cmd)){
        echo $row['seatno']."--".$row['sid']."--".$row['fid']."--".$row['classid']."--".$row['cost']."--".$row['city1']."--".$row['city2']."--".$row['arr_time']."--".$row['dep_time']."<br>";
        $arr=$row['arr_time'];
        $newfrom=$row['to'];
    }
    $i=100;
    while($i>0){
        $query2="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,fclass.classid,fclass.cost,a.city AS city1,aa.city AS city2  
        from schedule
        INNER JOIN seatschedule ON seatschedule.sid = schedule.sid
        INNER JOIN flight ON flight.fid = schedule.fid 
        INNER JOIN fclass ON flight.fid = fclass.fid
        INNER JOIN airport AS a ON a.aid = flight.from
        INNER JOIN airport AS aa ON aa.aid = flight.to 
        where seatschedule.avail=1 AND schedule.arr_date='$date' AND schedule.dep_time>='$arr' AND flight.from='$newfrom'
        GROUP BY fid,classid ";
        echo "<br><br><br>";
        $cmd2=mysqli_query($con,$query2);
        while($row=mysqli_fetch_array($cmd2)){
            echo $row['seatno']."--".$row['sid']."--".$row['fid']."--".$row['classid']."--".$row['cost']."--".$row['city1']."--".$row['city2']."--".$row['arr_time']."--".$row['dep_time']."<br>";
            $query3="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,fclass.classid,fclass.cost,a.city AS city1,aa.city AS city2  
            from schedule
            INNER JOIN seatschedule ON seatschedule.sid = schedule.sid
            INNER JOIN flight ON flight.fid = schedule.fid 
            INNER JOIN fclass ON flight.fid = fclass.fid
            INNER JOIN airport AS a ON a.aid = flight.from
            INNER JOIN airport AS aa ON aa.aid = flight.to 
            where seatschedule.avail=1 AND schedule.arr_date='$date' AND schedule.dep_time>='$arr' AND flight.from='$newfrom'
            GROUP BY fid,classid ";
            echo "<br><br><br>";
            $cmd3=mysqli_query($con,$query2);
            while($row2=mysqli_fetch_array($cmd2)){
                echo $row2['seatno']."--".$row2['sid']."--".$row2['fid']."--".$row2['classid']."--".$row2['cost']."--".$row2['city1']."--".$row2['city2']."--".$row2['arr_time']."--".$row2['dep_time']."<br>";
                //$newfrom=$row2['to'];
            }
            
            mysqli_free_result($cmd3);
            $newfrom=$row['to'];
        }
        $i--;
        mysqli_free_result($cmd2);
    }
?>