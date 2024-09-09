<!DOCTYPE html>
<html>
    <head>
        <title>
            hello
        </title>
        <link rel="stylesheet" type="text/css" href="table2.css">
        <link rel="stylesheet" type="text/css" href="sidebaradmin.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                /* color: yellow; */
            }
            .content-title{
                color: #fff;
            }
            td,th{
                color: #e1e2ef;
            }
            .main{
                
                top:20px
            }
            /* .content{
                background-color: #fff;
            } */
            div.stat{
                /* display: none; */
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
                left:450px;
                width: fit-content;
                top: 35px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        
        <div class="main">
            
                <div class="content">
            
                <div class="content-title">Employee Data:</div>
                <div class="data">
                    
                    <table class="tbl-head" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th>Eid</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Mobile No.</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Post</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                    
                    
                    <tbody>
                    <?php
                        session_start();
                        $_SESSION['table']="employee";
                        include("connect.php");
                        $query="select * from employee";
                        $cmd=mysqli_query($con,$query);
                        while($row=mysqli_fetch_array($cmd)){
                    ?>
    
                    <tr>
                            <td><?php echo $row['eid'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['addr'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['post'];?></td>
                            <td><?php echo $row['salary'];?></td>
                            <td><a class="edit" href="update.php?file=employees&id=<?php echo $row['eid']; ?>&key=eid"><i class="fa fa-pencil fa-lg"></i></a></td>
                            <td><i onclick="window.location.href='remove.php?file=employees&id=<?php echo $row['eid']; ?>&key=eid'" class="fa remove fa-trash-o fa-lg"></i></td>
                        </tr>
                        
                    <?php } ?>
                    <?php
                    if(isset($_GET['status'])){
                        if($_GET['status']=='success'){
                    ?>
                        <div class="stat" id="success">Successfully <?php echo $_GET['linkfrom']?></div>
                    <?php    
                        }
                        elseif($_GET['status']=='unsuccess'){?>
                        <div class="stat" id="unsuccess"><?php echo $_GET['linkfrom']?> Unuccessful</div>
                        <?php }
                        }?>
                    </tbody>
                    </table>

                </div>
                <div class="insertform">
                    <form action="insert.php" method="get">
                    <div class="insertsection btn">
                        <input class="insertbtn" type="submit" value="Insert Data">
                        <input type="hidden" name="file" value="other">
                    </div>
                    </form>
                </div>
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