<?php
    $route[0]=array(
        array("srinagar","banglore"),
        array("F0001","F0005","F0011","F0014"),
        array("F0004","F0012"),
        array("F0002","F0021"),
        array("F0003","F0028")
    );
    
    $route[1]=array(
        array("srinagar","surat"),
        array("F0001","F0005"),
        array("F0002","F0023")
    );
    $route[2]=array(
        array("srinagar","mumbai"),
        array("F0004","F0011"),
        array("F0001","F0005","F0011")
    );
    $route[3]=array(
        array("srinagar","rajasthan"),
        array("F0002","F0024")
    );
    $route[4]=array(
        array("rajasthan","guwahati"),
        array("F0006","F0025"),
    );
    $route[5]=array(
        array("rajasthan","banglore"),
        array("F0005","F0012"),
        array("F0005","F0011","F0014")
    );
    $route[6]=array(
        array("rajasthan","mumbai"),
        array("F0005","F0011"),
    );
    $route[7]=array(
        array("surat","srinagar"),
        array("F0009","F0007")
    );
    $route[8]=array(
        array("surat","guwahati"),
        array("F0010","F0025")
    );
    $route[9]=array(
        array ("surat","banglore"),
        array("F0011","F0014")
    );
    $route[10]=array(
        array("mumbai","srinagar"),
        array("F0013","F0008"),
        array("F0013","F0009","F0007"),
        array("F0015","F0028")
    );
    $route[11]=array(
        array("mumbai","rajasthan"),
        array("F0013","F0009"),
        array("F0015","F0024")
    );
    $route[12]=array(
        array("mumbai","guwahati"),
        array("F0015","F0025"),
        array("F0014","F0019")
    );
    $route[13]=array(
        array("banglore","srinagar"),
        array("F0017","F0008"),
        array("F0017","F0009","F0007"),
        array("F0018","F0028")
    );
    $route[14]=array(
        array("banglore","rajasthan"),
        array("F0016","F0013","F0009"),
        array("F0017","F0009"),
        array("F0018","F0024")
    );
    $route[15]=array(
        array("banglore","surat"),
        array("F0016","F0013")
    );
    $route[16]=array(
        array("guwahati","rajasthan"),
        array("F0027","F0024"),
        array("F0028","F0017","F009")
    );
    $route[17]=array(
        array("guwahati","surat"),
        array("F0027","F0023"),
        array("F0028","F0017"),
        array("F0028","F0016","F0013")
    );
    $route[18]=array(
        array("guwahati","mumbai"),
        array("F0027","F0022"),
        array("F0028","F0016")
    );
    //echo $route[0][1][2];
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            hello
        </title>
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                
            }
            /* .main{
                top:20px;
            } */
            input[type="radio"]{
                width: 10px;
                position: relative;
                size: 10px;
                transform: scale(1.5);
                top: 35%;
                left:-30px;
            }
            .section{
                position: relative;
                top:15px;
                height: 480px;
                overflow: auto;
                background-color: #302e3b;
                /* border: 1px solid black; */
                border-radius: 10px;
                width: fit-content;
                min-height: 300px;
            }
            label{
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 50px;
                padding-right: 50px;
                /* border: 2px solid ; */
                background-color:  #393646;
                width: fit-content;
                display: grid;
                /* grid-template-columns: auto auto; */
                grid-template-columns: 0.1fr 1fr;
                margin: 10px;
            }
            label:hover{
                border: 1px solid greenyellow;
            }
            label:has(.radio>.radiobtn:checked){
                background-color: black;
            }
            .inside{
                
                width:fit-content;
                color: #fff;
                display: grid;
                grid-template-columns:1fr 15em 1fr 15em 1fr;
                /* font-size: 20px; */
                position: relative;
                right: 0px;
                
            }
            .time{
                font-size: 40px;
            }
            .fa-long-arrow-right{
                position: relative;
                bottom: 10px;
                font-size:50px;
            }
            .way{
                position: relative;
                bottom: -10px;
                font-size: 12px;
            }
            .class{
                position: relative;
                top:20px;
                right: 30px;
                width: 150px;
                
                font-size: 16px;
            }
            input[type="submit"]{
    background: none;
    color: inherit;
    border: none;
    padding: 0;
    font: inherit;
    cursor: pointer;
    outline: inherit;
}
#btn,#gobtn{
    border-radius: 50px;
    position: absolute;
    bottom:30px;
    background-color: rgb(42, 238, 42);
    color: rgb(60, 61, 71);
    padding: 4px 40px 8px 40px;
    /* border: 1px solid black; */
    transition: all 1s;
    font-size: 20px;
}
#btn:hover,#gobtn:hover{
    transform: translate(0,-5px);
    box-shadow: 0 5px  rgba(0, 0, 0, 0.286);
    transition: all 0.5s;
    background-image:linear-gradient( rgb(42, 238, 42),rgb(41, 229, 41));
    /* background-color: red; */
}
#gobtn{
    /* position: absolute;
    bottom: 0px; */
    height: 40px;
}
        .datesection{
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto;
                border-bottom: 2px solid rgb(163, 163, 163);
                overflow:auto;
                position: relative;
                top: 0px;
                width: fit-content;
                max-width: 80%;
                padding-top: 20px;
                padding-bottom:15px ;
                bottom: 0;
            }
        .selectdate{
                border-radius: 10px;
                width: fit-content;
                color: #fff;
                padding: 10px;
                text-align: center;
                margin: 0 10px 0 10px;
                background-color: #393646;
                cursor: pointer;
                transition: all 0.5s,border 0s;
                
            }
            .selectdate:hover{
                transform: translate(0px,-10px);
                scale: 1;
                border: 2px solid greenyellow;
                background-color: rgb(49, 49, 49);
            }
            .date{
                font-size: 22px;
            }
            .seat{
                position: relative;
                top: 8px;
                font-size: 30px;
            }
            .seatnotitle{
                font-size: 15px;
            }
            #selected{
                cursor: default;
                background-color: black;
                border: 2px solid plum;
            }
            #selected:hover{
                
                transform: none;
            }
::-webkit-scrollbar {
    width: 6px;
    height: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
        </style>
    </head>
    <body>
        <?php
        error_reporting(0);
        session_start();
            
            if(isset($_POST['submit'])){
                $_SESSION['from']=$_POST['from'];
                $_SESSION['to']=$_POST['to'];
                //echo $to.$from;
                $_SESSION['date']=$_POST['depart'];
            }
            
            $date=$_SESSION['date'];
            $to=$_SESSION['to'];
            $from=$_SESSION['from'];
            if(isset($_GET['date'])){
                $date=$_GET['date'];
                
            }
            $con=mysqli_connect("localhost","root");
            $db=mysqli_select_db($con,"airjetdb");
            $i=18;
            $flag=1;
            $f=0;
            
            // if(!isset($from) || !isset($to) || !isset($date)){
            //     $flag=0;
            // }
        ?>
        <div class="container">
        
            <div class="main">
                <div class="content">
                    <center>
                    <div class="datesection">
                        <?php
                            $query="SELECT arr_date from schedule group by arr_date order by arr_date";
                            $dateselect=mysqli_query($con,$query);
                            
                            while($daterow=mysqli_fetch_array($dateselect)){
                                //echo $daterow['arr_date'];
                                
                        ?>
                        <div class="selectdate" <?php if($date==$daterow['arr_date']){?>id="selected"<?php }else{?> onclick="window.location.href='data2.php?date=<?php echo $daterow['arr_date']; ?>'"<?php }?>>
                            <div class="date">
                                <?php 
                                $day=substr($daterow['arr_date'],-2,2);
                                $month=substr($daterow['arr_date'],-5,2);
                                echo $day."/".$month;
                                //echo $daterow['arr_date'];
                                ?></div>
                            <div class="day"><?php echo date('D',strtotime($daterow['arr_date']))?></div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    </center>
                    <form action="getdata.php" method="post">
                        <center>
                        <div class="section">
                        <?php
                        $query="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,seat.classid,afrom.city AS city1,ato.city AS city2,class.type
                        from seat
                        INNER JOIN seatschedule ON seatschedule.seatno = seat.seatno
                        INNER JOIN class On seat.classid = class.classid
                        INNER JOIN schedule ON seatschedule.sid = schedule.sid
                        INNER JOIN flight ON schedule.fid = flight.fid
                        INNER JOIN airport AS afrom ON afrom.aid = flight.from
                        INNER JOIN airport AS ato ON ato.aid = flight.to
                        where seatschedule.avail=1 AND ato.city='$to'  AND schedule.dep_date='$date' AND afrom.city='$from'";
                        $direct=mysqli_query($con,$query);
                        $d;
                        if(!$direct || mysqli_num_rows($direct)==0){
                            $f++;
                        }
                        while($row=mysqli_fetch_array($direct)){
                            //echo "hello";
                            $departtime=$row['dep_time'];
                            $fid1=$row['fid'];
                            $sid1=$row['sid'];
                            //$classid1=$row['classid'];
                            $costfind=mysqli_query($con,"select cost from fclass where fid='$row[fid]' AND classid='$row[classid]'");
                            while($costval=mysqli_fetch_array($costfind)){
                                $cost2=$costval['cost'];
                            }
                            mysqli_free_result($costfind);
                            $arrtime=$row['arr_time'];
                            $seatno=$row['seatno'];
                            $classid=$row['classid'];
                            $type=$row['type'];
                            $value=$fid1.$sid1.$classid.$seatno.$cost2.substr($departtime,0,5).substr($arrtime,0,5)."dir";
                            
                            ?>
                        <label for="<?php echo $value;?>">
                            <div class="radio">
                                <input class="radiobtn" type="radio" name="sel" id="<?php echo $value;?>" value="<?php echo $value;?>">
                            </div>
                            <div class="inside">
                                <div class="seat">
                                    <div class="seatnotitle">seatno:</div>
                                    <div><?php echo $seatno;?></div>
                                </div>
                                <div class="fromsec">
                                    <div class="fromtime time"><?php echo substr($departtime,0,5);?></div>
                                    <div class="fromtext"><?php echo $from;?></div>
                                </div>
                                <div class="middle">
                                <div class="way">Direct</div>
                                <div><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                                <div class="tosec">
                                    <div class="totime time"><?php echo substr($arrtime,0,5);?></div>
                                    <div class="totext"><?php echo $to;?></div>
                                </div>
                                <div class="class">
                                    <div><?php echo $type;?></div>
                                    <div>Rs.<?php echo $cost2;?></div>
                                </div>
                            </div>
                        </label>
                        <?php
                        }
                        while($i>=0){
                            if($route[$i][0][0]==strtolower($from) && $route[$i][0][1]==strtolower($to)){
                                //echo "hello";
                                $a=count($route[$i])-1;
                                while($a>=1){
                                $f=count($route[$i][$a]);
                                $last=$route[$i][$a][$f-1];
                                $first=$route[$i][$a][0];
                                $j=0;
                                    // while($j<$f){
                                        
                                    //     $query1="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,fclass.classid,fclass.cost,afrom.city AS city1,ato.city AS city2  
                                    //     from schedule
                                    //     INNER JOIN seatschedule ON seatschedule.sid = schedule.sid
                                    //     INNER JOIN flight ON flight.fid = schedule.fid 
                                    //     INNER JOIN fclass ON flight.fid = fclass.fid
                                    //     INNER JOIN airport AS afrom ON afrom.aid = flight.from
                                    //     INNER JOIN airport AS ato ON ato.aid = flight.to 
                                    //     where seatschedule.avail=1 AND flight.fid='$route[$i][$a][$j]'  GROUP BY fid,classid";
                                    //     $cmd1=mysqli_query($con,$query1);
                                    //     mysqli_num_rows($cmd1);
                                    //     while($row=mysqli_fetch_array($cmd1)){
                                    //         $fid[$j]=$row['fid'];
                                    //         echo $row['fid'];
                                            
                                    //     }
                                    //     $j++;
                                    //     mysqli_free_result($cmd1);
                                    // }
                                //echo $first.$last;
                                $query="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,seat.classid,afrom.city AS city1,ato.city AS city2,class.type
                                from seat
                                INNER JOIN seatschedule ON seatschedule.seatno = seat.seatno
                                INNER JOIN class On seat.classid = class.classid
                                INNER JOIN schedule ON seatschedule.sid = schedule.sid
                                INNER JOIN flight ON schedule.fid = flight.fid
                                INNER JOIN airport AS afrom ON afrom.aid = flight.from
                                INNER JOIN airport AS ato ON ato.aid = flight.to
                                where seatschedule.avail='1' AND flight.fid='$first' AND schedule.dep_date='$date'";
                                $cmd=mysqli_query($con,$query);
                                while($row=mysqli_fetch_array($cmd)){
                                    $departtime=$row['dep_time'];
                                    $fid1=$row['fid'];
                                    $sid1=$row['sid'];
                                    //$classid1=$row['classid'];
                                    $costfind=mysqli_query($con,"select cost from fclass where fid='$row[fid]' AND classid='$row[classid]'");
                                    while($costval=mysqli_fetch_array($costfind)){
                                        $cost1=$costval['cost'];
                                    }
                                    mysqli_free_result($costfind);
                                    
                                    $seat1=$row['seatno'];
                                    //echo $row['seatno']."--".$row['sid']."--".$row['fid']."--".$row['classid']."--".$row['cost']."--".$row['city1']."--".$row['city2']."--".$row['arr_time']."--".$row['dep_time']."<br>";
                                }
                                mysqli_free_result($cmd);
                                $query="SELECT seatschedule.seatno,flight.to,flight.from,schedule.sid,schedule.dep_time,schedule.arr_time,flight.fid,seat.classid,afrom.city AS city1,ato.city AS city2,class.type
                                from seat
                                INNER JOIN seatschedule ON seatschedule.seatno = seat.seatno
                                INNER JOIN class On seat.classid = class.classid
                                INNER JOIN schedule ON seatschedule.sid = schedule.sid
                                INNER JOIN flight ON schedule.fid = flight.fid
                                INNER JOIN airport AS afrom ON afrom.aid = flight.from
                                INNER JOIN airport AS ato ON ato.aid = flight.to 
                                where seatschedule.avail='1' AND flight.fid='$last' AND schedule.dep_date='$date'";
                                $cmd=mysqli_query($con,$query);
                                while($row=mysqli_fetch_array($cmd)){
                                    $arrtime=$row['arr_time'];
                                    $costfind=mysqli_query($con,"select cost from fclass where fid='$row[fid]' AND classid='$row[classid]'");
                                    while($costval=mysqli_fetch_array($costfind)){
                                        $cost2=$costval['cost'];
                                    }
                                    mysqli_free_result($costfind);
                                    $fid2=$row['fid'];
                                    $sid2=$row['sid'];
                                    $classid=$row['classid'];
                                    $type=$row['type'];
                                    $seat2=$row['seatno'];
                                    //echo $seatno;
                                    $value=$fid1.$sid1.$classid.$seat2.$fid2.$sid2.$cost2.substr($departtime,0,5).substr($arrtime,0,5)."hop";
                                    //echo $row['seatno']."--".$row['sid']."--".$row['fid']."--".$row['classid']."--".$row['cost']."--".$row['city1']."--".$row['city2']."--".$row['arr_time']."--".$row['dep_time']."<br>";
                                    
                        ?>
                        <label for="<?php echo $value;?>">
                            <div class="radio">
                                <input class="radiobtn" type="radio" name="sel" id="<?php echo $value;?>" value="<?php echo $value;?>">
                            </div>
                            <div class="inside">
                                <div class="seat">
                                    <div class="seatnotitle">seatno:</div>
                                    <div><?php echo $seat2;?></div>
                                </div>
                                <div class="fromsec">
                                    <div class="fromtime time"><?php echo substr($departtime,0,5);?></div>
                                    <div class="fromtext"><?php echo $from;?></div>
                                </div>
                                <div class="middle">
                                <div class="way">Hopping</div>
                                <div><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                                <div class="tosec">
                                    <div class="totime time"><?php echo substr($arrtime,0,5);?></div>
                                    <div class="totext"><?php echo $to;?></div>
                                </div>
                                <div class="class">
                                    <div><?php echo $type;?></div>
                                    <div>Rs.<?php echo $cost2;?></div>
                                </div>
                            </div>
                        </label>
                        <?php
                                }
                                $j=1;
                                $a--;
                                }
                                mysqli_free_result($cmd);
                            }
                            
                            //echo "hello";
                            $i--;
                        }
                        $falg=1;
                            if( $value==NULL){
                                $f++;
                                //echo 'heloo';
                            }
                            if($f==2){
                                $flag=0;
                                //echo 'hecloo';
                            }
                        
                        ?>
                        
                        </div>
                        <?php if($flag){ ?>
                        <div><input id="btn" type="submit" name="submit" value="Book"></div>
                        
                        </center>
                        <?php }else{?>
                    </form>
                    <?php ?>
                    
                    <form action="select.php" method="post">
                    <center>
                    <div><h3 style="position:relative;left:70px;color:#fff;z-index:10;">NO FLIGHTS FOUND</h3></div>
                    
                    <div><input style=" z-index:10" id="gobtn" type="submit" name="submit" value="Go Back"></div>
                    </center>
                    </form>
                    <?php }?>
                    
                </div>
            </div>
<div class="sidebar">
    <i id="expandButton" class="fa fa-bars fa-lg"></i>
    <a class="logo-a" href="main2.php"><p class="logo"></p></a>
    <ul >
        <!-- <li class="nav-item" onclick="window.location.href='flightstat.php'"><i class="fa fa-clock-o fa-lg" href="#"><span class="remove" href="#">  Flight Status</span> </i></li> -->
        <li class="nav-item" onclick="window.location.href='select.php'"><i class="fa fa-plane fa-lg"><a class="remove" href="#">  Search Flights</a> </i></li>
        <li class="nav-item" onclick="window.location.href='edit.php'"><i class="fa fa-pencil-square-o fa-lg"><a class="remove" href="#"> Manage Account</a> </i></li>
        <li class="nav-item" onclick="window.location.href='cancel.php'"><i class="fa fa-tags fa-lg"><a class="remove" href="#"> Manage Booking</a> </i></li>
        <li class="nav-item" onclick="window.location.href='logout.php'"><i class="fa fa-power-off fa-lg"><a class="remove" href="#">  Logout</a> </i></li>
        
        
    </ul>
    
</div>
        </div>
        
        
        <script>
            var expandButton = document.getElementById("expandButton");
            var sidebar = document.querySelector(".sidebar");
            var main = document.querySelector(".main");
            expandButton.addEventListener("click", function() {
                sidebar.classList.toggle("expand");
                main.classList.toggle("resize");
            });
            // sidebar.addEventListener("mouseenter",function(){
            //     sidebar.classList.add("expand");
            // }),
            // sidebar.addEventListener("mouseleave",function(){
            //     sidebar.classList.remove("expand");
            // });
    
        </script>
    </body>
</html>