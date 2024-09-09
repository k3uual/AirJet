<?php
    session_start();
    
    //$_SESSION['total']=intval(substr($_POST['total'],-4,4));
        $con=mysqli_connect("localhost","root");
        $db=mysqli_select_db($con,"airjetdb");
        //echo $_POST['card_number'].$_POST['exp_date'].$_POST['cvv'].$_POST['name_on_card'];
        $pay="select * from bank where cardno='$_POST[card_number]' AND expdate='$_POST[exp_date]'
        AND cvv='$_POST[cvv]' AND name='$_POST[name_on_card]'";
        $paycheck=mysqli_query($con,$pay);
        $total=$_SESSION['cost'];
        $cost=$_SESSION['cost']-100;
        if(mysqli_num_rows($paycheck)){
        //echo $_SESSION['chosen']."<br>";
        $flight=substr($_SESSION['chosen'],0,5);
        $schedule=substr($_SESSION['chosen'],5,6);

        $seat=substr($_SESSION['chosen'],2,2);
        if(substr($_SESSION['chosen'],-3,3)=="hop"){
            $class=substr($_SESSION['chosen'],22,6);
            $cost=intval(substr($_SESSION['chosen'],28,4));
            $departtime=(substr($_SESSION['chosen'],32,5));
            $arrtime=(substr($_SESSION['chosen'],37,5));
        }
        else{
            $class=substr($_SESSION['chosen'],11,6);
            $cost=intval(substr($_SESSION['chosen'],17,4));
            $departtime=(substr($_SESSION['chosen'],21,5));
            $arrtime=(substr($_SESSION['chosen'],26,5));
        }   
        //echo $class.$schedule.$flight;
        $query="SELECT flight.fid,schedule.sid,fclass.classid,seatschedule.seatno,seatschedule.avail 
        from seatschedule
        INNER JOIN schedule ON seatschedule.sid = schedule.sid 
        INNER JOIN flight ON flight.fid = schedule.fid 
        INNER JOIN fclass ON fclass.fid = fclass.fid 
        
        where fclass.classid='$class' AND flight.fid='$flight' AND schedule.sid='$schedule' AND seatschedule.avail='1'";
        $cmd2=mysqli_query($con,$query);
        $a=1;
        while($a && $row=mysqli_fetch_array($cmd2)){
            
            $seat=$row['seatno'];
            $a--;
        }
        $cust=$_COOKIE['user'];
        //$cust="C00000";
        $query="SELECT tno from ticket";
        $tno="T00000";
        $name=$_COOKIE['name'];
        //$name="raj";
        date_default_timezone_set("Asia/Kolkata");
        $date=date("Y-m-d",time());
        $cmd=mysqli_query($con,$query);
        $num=mysqli_num_rows($cmd);
        //$tax=$_POST['tax'];
        
        if($num){
            while($row=mysqli_fetch_array($cmd)){
                $t=intval(trim($row['tno'],"T0"));
                
            }
            $t+=1;
            $tno="T".sprintf("%05d", $t);
        }
        //echo $tno."<br>".$date."<br>".$name."<br>".$tax."<br>".$total."<br>";
        $c=intval(trim($cust,"C0"))+10;
        mysqli_free_result($cmd);
        $query="LOCK TABLES ticket WRITE";
        $lock=mysqli_query($con,$query);
        $filename="AirJet-".$tno;
        $query="INSERT INTO ticket 
        VALUES ('$tno','$date','$total','$_POST[card_number]','UPI','$cust','$schedule','$seat')";
        $cmd=mysqli_query($con,$query);
        if($cmd){
            
            echo 'Thank You for booking flight with us';
            $query1="UNLOCK TABLES";
            $unlock=mysqli_query($con,$query1);
            //die(mysqli_error($cmd));
            echo $flight."<br>".$seat."<br>".$schedule."<br>".$class."<br>".$cost."<br>".$cust;
            
            $query="SELECT ticket.tno,ticket.seatno,ticket.scid,flight.fid,ticket.tdate,schedule.arr_date, 
                schedule.arr_time,schedule.dep_date,schedule.dep_time,ticket.cost,flight.from,flight.to,customer.name,
                customer.cid,customer.mobile,a.terminal AS terminal1,aa.terminal AS terminal2,a.city AS city1,aa.city AS city2 
                from ticket
                INNER JOIN schedule ON ticket.scid = schedule.sid
                INNER JOIN flight ON flight.fid = schedule.fid 
                INNER JOIN airport AS a ON a.aid = flight.from
                INNER JOIN airport AS aa ON aa.aid = flight.to 
                INNER JOIN seat ON seat.seatno = ticket.seatno 
                INNER JOIN customer ON ticket.cid = customer.cid 
                
                where ticket.tno='$tno' AND customer.cid='$cust'";
            $cmd=mysqli_query($con,$query);
            $confirmed=mysqli_num_rows($cmd);
            $date=date("d/m/Y",time());
            while($row=mysqli_fetch_array($cmd)){
                include("ticketformat.php");
            }
            
        }
        
    }
    else{
        header("location:pay.php");
    }
    
    
?>
