<!DOCTYPE html>
<html>
    <head>
        <title>
            hello
        </title>
        <link rel="stylesheet" type="text/css" href="table2.css">
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="textbox.css">

        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                /* color: yellow; */
            }
            body{
                background-color: #b98cb8;
            }
            .content-title{
                color: #fff;
            }
            /* .table{
                width: 100%;
            } */
            td,th{

                color: #e1e2ef;
            }
            
            /* .content{
                background-color: #fff;
            } */
            div.stat{
                /* display: none; */
                color:#fff;
                border-radius: 10px;
                user-select: none;
                opacity: 1;
                position: absolute;
                left: 45%;
                top: 45%;
                z-index: 10;
                width: fit-content;
                padding: 10px;
                font-size: 22px;
                animation: fadeout 1.5s linear forwards, goaway 0.2s linear 1.5s forwards;
                
            }
            div#success{
                background-color: green;
            }
            div#unsuccess{
                background-color: red;
            }
            @keyframes fadeout{
                0%{opacity: 0;}
                25%{opacity: 0.5;}
                50%{opacity: 1;}
                75%{opacity: 0.5;}
                100%{opacity: 0;}
            }
            @keyframes goaway{
                /* from{transform:translate(0,0);}
                to{transform:translate(1000px,1000px)} */
                from{top:45%}
                to{top:200%}
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
            .insertsection{
                position: absolute;
                bottom: 10px;
                left: 45%;
            }
            .btn{
                border-radius: 50px;
                
                
                color: #fff;
                background-color: rgb(42, 238, 42);
                color: rgb(60, 61, 71);
                padding: 4px 40px 8px 40px;
                /* border: 1px solid black; */
                transition: all 1s;
                font-size: 20px;
            }
            .btn:hover{
                transform: translate(0,-5px);
                box-shadow: 0 5px  rgba(0, 0, 0, 0.286);
                transition: all 0.5s;
                background-image:linear-gradient( rgb(42, 238, 42),rgb(41, 229, 41));
                /* background-color: red; */
            }
            .showbtn{
                align-content: left; 
                position: absolute; 
                left:550px;
                height: 40px;
                top: 5px;
            }
            .textbox{
                width: 100px
            }
            .notfound{
                position: relative;
                top:150px
            }
        </style>
    </head>
    <body>
    <div class="container">
        
        <div class="main">
            
                <div class="content">
                <div>
                    <form action="flightstat.php" method="get">
                    <label for="id" >Search Ticket :</label>
                    <input class="textbox" type="text" id="id" name="id">
                    <input id="btn" class="showbtn" type="submit" name="show" value="show">
                    </form>
                </div>
                <?php
                    session_start();
                    error_reporting(0);
                    //$_SESSION['table']="customer";
                    $display2='inline';
                    $display='none';
                    include("connect.php");
                    if(isset($_GET['show'])){
                    $query="select * from ticket where tno='$_GET[id]'";
                    $cmd=mysqli_query($con,$query);
                    $display='inline';
                    $display2='none';
                    if(mysqli_num_rows($cmd)<1){
                        $display='none';
                        $display2='inline';
                    }
                    } 
                    
                ?>
                <div class="content-title" style="display:<?php echo $display;?>;">Tickets Booked:</div>
                <div class="data" style="display:<?php echo $display;?>;">
                    
                    <table style="display:<?php echo $display;?>;" class="tbl-head" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr style="display:<?php echo $display;?>;">
                            <th>Tno</th>
                            <th>Date</th>
                            <th>Cost</th>
                            <th>Paymentid</th>
                            <th>Paymentsrc</th>
                            <th>Cid</th>
                            <th>Scid</th>
                            <th>Seatno</th>
                            
                            <th>Cancel</th>
                        </tr>
                        </thead>
                    
                    
                    <tbody>
                    <?php
                        
                        while($row=mysqli_fetch_array($cmd)){
                    ?>
    
                    <tr style="display:<?php echo $display;?>;">
                            <td><?php echo $row['tno'];?></td>
                            <td><?php echo $row['tdate'];?></td>
                            <td><?php echo $row['cost'];?></td>
                            <td><?php echo $row['paymentid'];?></td>
                            <td><?php echo $row['paymentsrc'];?></td>
                            <td><?php echo $row['cid'];?></td>
                            <td><?php echo $row['scid'];?></td>
                            <td><?php echo $row['seatno'];?></td>
                            <td><a class="edit" href="cancelcomp.php?id=<?php echo $row['tno']; ?>&cost=<?php echo $row['cost'];?>">cancel</a></td>
                            
                        </tr>
                        
                    <?php } ?>
                    <?php
                    if(isset($_GET['status'])){
                        if($_GET['status']=='success'){
                    ?>
                        <div class="stat" id="success"><?php echo $_GET['linkfrom'];?> Successful </div>
                    <?php    
                        }
                        elseif($_GET['status']=='unsuccess'){?>
                        <div class="stat" id="unsuccess"><?php echo $_GET['linkfrom'];?> Unuccessful</div>
                        <?php }
                        }?>
                    </tbody>
                    </table>
                    
                </div>
                <center>
                <div class="notfound" style="color:#fff;font-size:20px;display:'<?php echo $display2;?>';"><h3>Tickets Not found</h3></div>
                </center>
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