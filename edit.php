<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" type="text/css" href="textbox.css">
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <style>
        /* .main{
                top:20px
            } */
            #formsec{
                height: 450px;
            }
            #noneditable:focus{
                border: none;
            }
    </style>
    </head>
    <body>
        
<div class="container">
        
        <div class="main">
            
                <div class="content">
            
                <?php
        session_start();
        //$file=$_GET['file'];
        //$id=$_GET['id'];
        $key='cid';
        $table='customer';
        $id=$_COOKIE['user'];
        //echo $id;
        include("connect.php");
        $query="show columns from $table";
        $cmd=mysqli_query($con,$query);
        

        $query2="select * from $table where cid='$id'";
        
        
        $cmd2=mysqli_query($con,$query2);
        ?>
        <center>
        <fieldset id="formsec">
        
        <legend >Your Data :</legend>
            <form action="updateval.php" method="post">
            <?php
            $i=0;
            while($row=mysqli_fetch_array($cmd2)){
                while($row2=mysqli_fetch_array($cmd)){?>
                    <div class="inp">
                    <label for="<?php echo $row2['Field'];?>"><?php echo $row2['Field'];?> :</label>
                    <input class="textbox" type="text" id="<?php echo $row[$row2['Field']];?>" value="<?php echo $row[$row2['Field']];?>" name="<?php echo $row2['Field'];?>"<?php if($row2['Field']=="cid"){?> readonly id="noneditable"<?php }?>>
                    <input type="hidden" name="field<?php echo $i;?>" value="<?php echo $row2['Field'];?>">
                    </div>
            <?php
            $i++;
                }
            }?>
    </fieldset>
    <div id="submitsec">
        <input id="btn" type="submit" value="Update">
    </div>
    </form>
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