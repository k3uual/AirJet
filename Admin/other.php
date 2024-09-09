<?php
    
?>
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
                top:40px;
                color: #fff;
            }
            .data{
                top:40px;
                height: fit-content;
                max-height: 68%;
            }
            table{
                
                
                width: 100%;
            }
            td,th{
                color: #e1e2ef;
            }
            .main{
                overflow: hidden;
                top:20px
            }
            .success-stat{
                position:relative;
            }
            /* .content{
                background-color: #fff;
            } */
            input[name="table"]{
                position: relative;
                /* outline: blue solid 2px; */
                visibility: hidden;
                width: 10%;
            }
            ul.section>li{
                /* border:2px solid  black; */
                
                /* list-style: none; */
                border-bottom: 1px solid #2c2a37;
                margin-left: -2.5em;
                padding-left: 2.38em;
                padding-top: 10px;
                list-style-type: none;
                display: inline-grid;
                width: 100%;
                padding-bottom: 3px;
                background-color: #434053;
                border-radius: 0px 0px 20px 20px;
                transition: all 0.5s;
                /* padding: 15px 50px 15px 50px; */
            }
            ul.section>li:hover{
                /* background-color: aqua; */
                /* box-shadow: inset 0 -5px 5px   #423f51; */
                transform: translate(0px,3px);
                border-radius: 0px 0px 20px 20px;
                /* #403d50 */
                background-image: linear-gradient(#434053,#2d2b38);
            }
            
            label.select{
                /* text-indent: -70px; */
                width: 100%;
                height: 100%;
                margin-top: -10px;
                padding-top: 5px;
                padding-bottom: 8px;
                margin-left: -2.5em;
                padding-left: 2.5em;
                
                /* border: 1px solid red; */
                /* margin-left: 20px; */
                font-size: 20px;
                color: #fff;
            }
            .selectpart{
                
                position: relative;
                width: 182px;
                top:20px;
                margin-left: 15px;
                cursor: pointer;
                /* background-color: rgb(91, 91, 226); */
                align-items: center;
            }
            
            .section{
                display: none;
                transition: all 0.5s;
                
            }
            .section-container{
                background-color: black;
            }
            @keyframes dropdown {
                from{height:0px;}
                to{height: 130px;}
            }
            .section.open{
                scroll-behavior: smooth;
                scrollbar-width: none;
                overflow-y: auto;
                animation-name: dropdown;
                animation-duration: 0.5s;
                animation-fill-mode: forwards;
                position: absolute;
                z-index: 3;
                display: inline;
                background-color: #fff;
                margin-top: -5%;
                margin-left: 10%;
                width:180.5%;
                /* outline: red solid 2px; */
                background-color: #434053;
                border-radius: 0px 0px 20px 20px;
                /* padding-right: 100%; */
            }
            .section.open{
                width: 334px;
            }
            /* input[type="radio"] {
                margin-left:10px;
            } */
            #open{
                /* remove this one later :*/
                /* outline:red solid 1px ; */
                position: relative;
                /* text-align: center; */
                display: grid;
                width:150%;
                grid-template-columns: auto auto;
                color: #fff;
                background-color:  #393646;
                padding: 15px 50px 15px 50px;
                margin-left: 10%;
                margin-bottom: 5%;
                border-radius: 10px;
            }
            #def,i.sel{
                width: 100%;
                font-size: 22px;
                text-align: left;
                /* outline: blue solid 1px; */
            }
            #def{
                text-align: left;
                
            }
            #open.drop{
                background-color: black;
                border-radius: 10px 10px 0 0;
                
                outline:green  solid 2px;
            }
            #open:hover{
                /* border:1px  solid rgba(255, 255, 0, 0.612); */
                background-image: linear-gradient(#393646,#2c2a36);
                
            }
            #open.drop:hover{
                border: none;
                background-image: none;
            }
            i.sel{
                text-align: center;
                transform: translateY(-15%);
                transition: all 0.5s;
                
            }
            #open.drop>i.sel{
                
                rotate:-180deg;
            }
            /* .content{
                background-color: #fff;
            } */
            div.stat{
                /* display: none; */
                color:#ffffff;
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
                left:450px;
                width: fit-content;
                top: 35px;
            }
        </style>
    </head>
    <body>
    
    <?php
    session_start();
        
        ?>
    <div class="container">
        
        <div class="main">
            
                <div class="content" >
                <div class="align">
                <form action="other.php" method="get">
                <div class="selectpart">
                
                <div id="open">
                <div id="def" name="def">Select To:</div><i class="sel fa fa-caret-down"></i>
                </div>
                <div class="section-container">
                <ul class="section">
                    <li class="listradio">
                    <label class="select" for="airport">
                    <input onclick="updateText()" id="airport" type="radio" class="selectinp" name="table" value="airport">airport
                    </label></li>
                    <li class="listradio">
                    <label class="select" for="fclass">
                    <input onclick="updateText()" id="fclass" type="radio" class="selectinp" name="table" value="fclass">fclass
                    </label></li>
                    <li class="listradio">
                    <label class="select" for="class">
                    <input onclick="updateText()" id="airport" type="radio" class="selectinp" name="table" value="class">class
                    </label></li>
                    <li class="listradio">
                    <label class="select" for="seat">
                    <input onclick="updateText()" id="seat" type="radio" class="selectinp" name="table" value="seat">seat
                    </label></li>
                    <li class="listradio">
                    <label class="select" for="seatschedule">
                    <input onclick="updateText()" id="seatschedule" type="radio" class="selectinp" name="table" value="seatschedule">seatschedule
                    </label></li>
                    <li class="listradio">
                    <label class="select" for="ticket">
                    <input onclick="updateText()" id="ticket" type="radio" class="selectinp" name="table" value="ticket">ticket
                    </label></li>
                    
                </ul>
                </div>
                
            </div>
            <div class="showbtn btn"><input type="submit" name="submit" value="Show Data"></div>
        </form>
        </div>
        <?php
        if(isset($_GET['status'])){
                if($_GET['status']=='success'){
        ?>
            <div class="stat" id="success"><?php echo $_GET['linkfrom']?> Successful</div>
                <?php    
                }
            elseif($_GET['status']=='unsuccess'){?>
        <div class="stat" id="unsuccess">Removal Unuccessful</div>
            <?php
                }
            }
            if(!isset($_GET['table'])){
                $display='none';
            }
            else{
            $display='block';
            $table=$_GET['table'];
            $_SESSION['table']=$table;
            include("connect.php");
            $query="show columns from $table";
            $cmd=mysqli_query($con,$query);
            $row=mysqli_fetch_array($cmd);
            $key=$row['Field'];
            mysqli_free_result($cmd);
            $cmd=mysqli_query($con,$query);
            ?>
                <div class="content-title" style="display='<?php echo $display; ?>';"><?php echo ucfirst($table);?> Data:</div>
                <div class="data" style="display='<?php echo $display; ?>';">
                    
                    <table class="tbl-head" cellpadding="0" cellspacing="0" border="0">
                        <thead style="display='<?php echo $display; ?>';">
                        <tr>
                        <?php
                            while($row=mysqli_fetch_array($cmd)){?>
                            <th>
                                <?php echo $row['Field'];?>
                            </th>
                            
                        <?php } ?>
                        <th>Edit</th>
                        <th>Remove</th>
                        </tr>
                        </thead>
                    
                    
                    <tbody>
                    <?php
                        
                    ?>
                    <?php
                        //echo mysqli_num_rows($cmd2);
                        $query2="select * from $table";
                        $cmd2=mysqli_query($con,$query2);
                        $_SESSION['flag']=0;
                        $flag=0;
                        if($table=='seatschedule'||$table=='fclass'){
                            $_SESSION['flag']=1;
                            $flag=1;
                            if($table=='seatschedule')
                                $key2='sid';

                            else
                                $key2='classid';
                        }
                        while($row2=mysqli_fetch_array($cmd2)){
                            mysqli_free_result($cmd);
                            $cmd=mysqli_query($con,$query);?>
                        <tr>
                        <?php
                        while($row3=mysqli_fetch_array($cmd)){ 
                            echo '<td>'.$row2[$row3['Field']].'</td>';
                            if($row3['Field']==$key){
                                $id=$row2[$row3['Field']];
                                
                            }
                            if($flag){
                                if($row3['Field']==$key2)
                                    $id2=$row2[$row3['Field']];
                            }
                        }
                        ?>  
                            <td><a class="edit" href="update.php?file=other&id=<?php echo $id;?>&key=<?php echo $key;if($flag){?>&id2=<?php echo $id2;?>&key2=<?php echo $key2; }?>"><i class="fa fa-pencil fa-lg"></i></a></td>
                            <td><i onclick="window.location.href='remove.php?file=other&id=<?php echo $id;?>&key=<?php echo $key;if($flag){?>&id2=<?php echo $id2;?>&key2=<?php echo $key2; }?>'" class="fa remove fa-trash-o fa-lg"></i></td>
                        </tr>
                        <?php } ?>
                    

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
                <?php }
                ?>
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
        var open = document.getElementById("open");
        var select = document.querySelector(".section");
        var radioButtons = document.querySelectorAll('input[type="radio"]');
        var main = document.querySelector(".main");
        var parent = document.querySelector("div#open");
        document.addEventListener("click", function(event) {
            var isClickInsideBox = open.contains(event.target);
            if (isClickInsideBox) {
          // Toggle the "selected" class on the box
                select.classList.toggle("open");
                parent.classList.toggle("drop");
                
            } 
            else {
              // Remove the "selected" class from the box
                select.classList.remove("open");
                parent.classList.remove("drop");
        }})
        function updateText(){
            var val = document.getElementsByName('table');
			var selectedvalue="1";
            
			for (var i = 0; i < val.length; i++) {
				if (val[i].checked) {
					selectedvalue = val[i].value;
                    // alert(fromselectedvalue);
					break;
				}
			}
            
			// get the selected value from the second radio group
			
            
			// update the text of the second span based on the selected value from the second radio group
			var text = document.getElementById('def');
            if(selectedvalue==="1"){
                text.innerHTML="Select To:";
            }
            else{
                text.innerHTML=selectedvalue;
            }
            
		}
        // sidebar.addEventListener("mouseenter",function(){
        //     sidebar.classList.add("expand");
        // }),
        // sidebar.addEventListener("mouseleave",function(){
        //     sidebar.classList.remove("expand");
        // });
        //$(".stat").html("Password is invalid").show().fadeOut(1000);
        var status = document.getElementById('success').style;
        status.opacity = 1;
        (function fade(){(status.opacity-=.1)<0?status.display="none":setTimeout(fade,4)})();
    </script>
        </body>
</html>
