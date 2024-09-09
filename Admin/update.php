<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" type="text/css" href="textbox.css">
        <link rel="stylesheet" type="text/css" href="sidebaradmin.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <style>
        .main{
                top:20px
            }
    </style>
    </head>
    <body>
        
<div class="container">
        
        <div class="main">
            
                <div class="content">
            
                <?php
        session_start();
        $file=$_GET['file'];
        $id=$_GET['id'];
        $key=$_GET['key'];
        $table=$_SESSION['table'];
        include("connect.php");
        $query="show columns from $table";
        $cmd=mysqli_query($con,$query);
        

        $query2="select * from $table where $key='$id'";
        if($table=='seatschedule'||$table=='fclass'){
            
            $key2=$_GET['key2'];
            $id2=$_GET['id2'];
            $query2="select * from $table where $key='$id' AND $key2='$id2'";
        }
        
        $cmd2=mysqli_query($con,$query2);
        ?>
        <center>
        <fieldset id="formsec">
        
        <legend ><?php echo $_SESSION['table'];?> :</legend>
            <form action="updateval.php?file=<?php echo $file;?>" method="post">
            <?php
            $i=0;
            while($row=mysqli_fetch_array($cmd2)){
                while($row2=mysqli_fetch_array($cmd)){?>
                    <div class="inp">
                    <label for="<?php echo $row2['Field'];?>"><?php echo $row2['Field'];?> :</label>
                    <input class="textbox" type="text" id="<?php echo $row[$row2['Field']];?>" value="<?php echo $row[$row2['Field']];?>" name="<?php echo $row2['Field'];?>">
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
            
			<ul >
            <li class="nav-item" onclick="window.location.href='schedule.php'"><i class="fa fa-calendar-o fa-lg" href="#"><span class="remove" href="#">  Manage Schedule</span> </i></li>
                <li class="nav-item" onclick="window.location.href='customers.php'"><i class="fa fa-user fa-lg"><a class="remove" href="#">  Manage Customers</a> </i></li>
				<li class="nav-item" onclick="window.location.href='employees.php'"><i class="fa fa-group fa-lg"><a class="remove" href="#"> Manage Employees</a> </i></li>
				<li class="nav-item" onclick="window.location.href='flight.php'"><i class="fa fa-plane fa-lg"><a class="remove" href="#"> Manage Flights</a> </i></li>
                <li class="nav-item" onclick="window.location.href='other.php'"><i class="fa fa-search fa-lg"><a class="remove" href="#"> Manage Others</a> </i></li>
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