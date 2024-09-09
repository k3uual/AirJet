<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <title>Success</title> 
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            body{
                /* background-color: white; */
                height: fit-content;
            }
            .status{
                position: relative;
                border-radius: 10px;
                width: 500px;
                padding: 20px;
                color:white;
                top: 200px;
            }
            .successstat{
                height: 70px;
                background-color: green;
                overflow: hidden;
                transition: all 0.5s;
            }
            .unsuccessstat{
                height: 45px;
                background-color: red;
            }
            .statusinfo{
                display: grid;
                grid-template-columns: auto auto;
            }
            .success,.unsuccess{
                font-size: 30px;
                text-align: center;
            }
            .indicator{
                text-align: right;
                font-size: 40px;
            }
            .tickets{
                position: relative;
                font-size: 15px;
                padding-top: 10px;
                height: fit-content;
                max-height: 50px;
                overflow: auto;
                width: fit-content;
                padding: 10px;
                background-color: rgb(0, 107, 0);
                
                top: 20px;
                transition: all 0.5s;
            }
            .ticket{
                margin-bottom: 5px;
            }
            #Button{
                position: relative;
                border:2px solid white ;
                width: fit-content;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 50%;
                bottom: 0px;
                top:8px;
                transition: all 0.5s;
                
            }
            #Button:hover{
                transform: translate(0,-3px);
                box-shadow: 0px 3px #000;
            }
            .arrow{
                transform: translate(0px,-4px);
                transition: all 0.5s;
            }
            .successstat.expand{
                height: 160px;
            }
            .successstat.expand>.tickets{
                top:-15px;
            }
            .successstat.expand>#Button{
                translate:0 100px;
                transform: rotate(180deg);
                transition: all 0.5s;
                top:0;
            }
            .successstat.expand>#Button:hover{
                rotate: 180deg;
                transform: translate(0,3px);
                box-shadow: 0px -3px #000;
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
            #btn{
                border-radius: 50px;
                position: absolute;
                bottom:200px;
                background-color: rgb(42, 238, 42);
                color: rgb(60, 61, 71);
                padding: 4px 40px 8px 40px;
                /* border: 1px solid black; */
                transition: all 1s;
                font-size: 20px;
                left: 42%;
            }
            #btn:hover{
                transform: translate(0,-5px);
                box-shadow: 0 5px  rgba(0, 0, 0, 0.286);
                transition: all 0.5s;
                background-image:linear-gradient( rgb(42, 238, 42),rgb(41, 229, 41));
                /* background-color: red; */
            }
        </style>
    </head>
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
            //echo $query.'<br>';
            $cmd=mysqli_query($con,$query);
            if($cmd)
                $ticket[$i]=$tno;
            $i++;
        }?>
        <center>
        <div class="successstat status">
            <div class="statusinfo">
                <i class="indicator fa fa-check-circle-o fa-lg"></i><div class="success"> Successfully Booked!</div> 
                
            </div>
            <div id="Button"><i class="arrow fa fa-caret-down"></i></div>
            <div class="tickets">
                <div style="margin-bottom: 5px;font-size: 18px;">Tickets Booked:</div> 
                <?php foreach($ticket as $t){
                ?>
                <div class="ticket"><?php echo $t;?></div>
                <?php }?> 
            </div>
        </div></center>
    <?php }else{
        ?>
        <center>
        <div class="unsuccessstat status">
            <div class="statusinfo">
                <i class="indicator fa fa-warning fa-lg"></i><div class="unsuccess"> Booking Unsuccessfull!</div> 
            </div>
        </div></center>
    <?php
    }
?>
    <form action="select.php" method="post">
        <input type="submit" id="btn" value="Go Back">
    </form>
    </body>
    <script>
        var expandButton = document.getElementById("Button");
        var ticket = document.querySelector(".successstat");
        
        expandButton.addEventListener("click", function() {
            ticket.classList.toggle("expand");
            
        });
        // sidebar.addEventListener("mouseenter",function(){
        //     sidebar.classList.add("expand");
        // }),
        // sidebar.addEventListener("mouseleave",function(){
        //     sidebar.classList.remove("expand");
        // });

    </script>
</html>