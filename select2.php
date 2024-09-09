<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <title>hello</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		
		// });
        </script>
        <style>
            
            *{
                user-select: none;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            input[name="from"],input[name="to"]{
                position: relative;
                /* outline: blue solid 2px; */
                visibility: hidden;
                width: 10%;
            }
            
            ul.fromsection>li,ul.tosection>li{
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
            ul.fromsection>li:hover,ul.tosection>li:hover{
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
            .fromselectpart,.toselectpart{
                position: relative;
                width: 30%;
                margin-left: 15px;
                cursor: pointer;
                /* background-color: rgb(91, 91, 226); */
                align-items: center;
            }
            
            .fromsection,.tosection{
                display: none;
                transition: all 0.5s;
                
            }
            .fromsection-container{
                background-color: black;
            }
            @keyframes dropdown {
                from{height:0px;}
                to{height: 130px;}
            }
            
            /* .fromsection.open::-webkit-scrollbar {
                display: none;
            }
            .tosection.open::-webkit-scrollbar {
                display: none;
            } */
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
            .fromsection.open,.tosection.open{
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
            .tosection.open{
                width: 182.5%;
            }
            /* input[type="radio"] {
                margin-left:10px;
            } */
            #fromopen,#toopen{
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
            #fromdef,i.sel,#todef{
                width: 100%;
                font-size: 22px;
                text-align: left;
                /* outline: blue solid 1px; */
            }
            #fromdef,#todef{
                text-align: left;
                
            }
            #fromopen.fromdrop,#toopen.todrop{
                background-color: black;
                border-radius: 10px 10px 0 0;
                
                outline:green  solid 2px;
            }
            #fromopen:hover,#toopen:hover{
                /* border:1px  solid rgba(255, 255, 0, 0.612); */
                background-image: linear-gradient(#393646,#2c2a36);
                
            }
            #fromopen.fromdrop:hover,#toopen.todrop:hover{
                border: none;
                background-image: none;
            }
            i.sel{
                text-align: center;
                transform: translateY(-15%);
                transition: all 0.5s;
                
            }
            #fromopen.fromdrop>i.sel,#toopen.todrop>i.sel{
                
                rotate:-180deg;
            }
            fieldset{
                margin-left:1.25%;
                width: 93%;
                padding: 30px;
                border-color: #767676;
                border-style: solid;
                background-color: #454255;
                /* background-color: #fff; */
                border-radius: 10px;
                display: grid;
                
            }
            fieldset#dest{
                position: absolute;
                top:24%;
                /* width: 93%; */
                /* min-width: 20%; */
                /* margin-left:1.25%; */
                /* margin-top: 1%; */
                grid-template-columns: auto 50px auto;
                /* margin-right: 1.5%; */
            }
            legend{
                color: #949494;
            }
            .title{
                font-size: 20px;
                color: #bfbfbf;
                margin-left: 10%;
                margin-bottom: 10px;
            }
            .toselectpart{
                left: 25%;
            }
            #between{
                font-size: 50px;
                margin-top: 80%;
                color: #949494;
            }
            fieldset#date{
                position: absolute;
                top: 53%;
                /* margin-top: 1%; */
                grid-template-columns: auto auto;
            }
            
            input[type="date"]{
                background-color: #393646;
                padding: 15px;
                /* position: absolute; */
                /* transform: translate(-50%,-50%); */
                /* top: 50%;
                left: 50%; */
                font-family: "Roboto Mono",monospace;
                color: #ffffff;
                font-size: 18px;
                border: none;
                outline: none;
                border-radius: 10px;
                cursor: pointer;
            }
            input[id="departurepicker"]:hover{
                background-image: linear-gradient(#393646,#2c2a36);
                outline: green solid 2px;
            }
            /* #arrivalpicker::-webkit-calendar-picker-indicator{
                
            } */
            #arrivalpicker.enabledate::-webkit-calendar-picker-indicator,#departurepicker::-webkit-calendar-picker-indicator{
                
                
                background-color: #ffffff;
                padding: 5px;
                cursor: pointer;
                border-radius: 3px;
            }
            #departure{
                display: inline;
                position: relative;
            }  
            input#departurepicker{
                margin-top:5px;
                /* margin-left: 10%; */
            }
            .datepicker{
                margin-left: -6%;
            }
            #arrival:has(#arrivalpicker){
                /* color:#bababc;
                cursor: not-allowed; */
                display: none;
            }
            #arrival:has(#arrivalpicker.enabledate){
                display: inline;
            }
            #arrivalpicker{
                display: none;
            }

            #arrivalpicker.enabledate{
                display: inline;
                color: #fff;
                cursor: pointer;
                display: inline;
            }
            #arrivalpicker:hover{
                border: none;
                background-image: none;
            }
            
            :root {
                --form-control-color: rgb(168, 3, 168);
            }
            input[name="way"] {
                /* Add if not using autoprefixer */
                -webkit-appearance: none;
                appearance: none;
                /* For iOS < 15 to remove gradient background */
                /* background-color: #fff; */
                /* Not removed via appearance */
                margin: 0;
            }
            fieldset.trip{
                position: absolute;
                grid-template-columns: auto auto;
                top: 2%;
            }
            .onewayselect,.roundtripselect{
                color:#fff;
                font-size: 22px;
                
                width: 200px;
                padding: 10px;
                
            }
            input[name="way"]{
                /* width: 20px;
                height: 20px; */
                font: inherit;
                color: currentColor;
                width: 1.15em;
                height: 1.15em;
                border: 0.15em solid currentColor;
                border-radius: 50%;
                transform: translate(0.5em,0.15em);
                display: grid;
                place-content: center;
            }
            .waylabel{
                padding: 5px 20% 8px 0;
                border-radius: 10px;
                display: grid;
                grid-template-columns: 1.5em auto;
                gap: 0.5em;
                width: 85%;
                background-color: #393646;
                cursor: pointer;
            }
            .waylabel:hover{
                outline:greenyellow  solid 1px;
                background-color: #3b3b43;
            }
            .waylabel:has(input[name="way"]:checked){
                
                background-color: #000;
            }
            
            input[name="way"]::before {
                content: "";
                width: 0.5em;
                height: 0.5em;
                border-radius: 50%;
                transform: scale(0);
                background-color: CanvasText;
                transition: 250ms transform ease-in-out;
                box-shadow: inset 1em 1em var(--form-control-color);
            }
            /* input[name="way"]:checked{
                color: red;
            } */
            input[name="way"]:checked::before {
                
                transform: scale(1);
            }
            input[name="way"]:checked{
                color: rgb(137, 2, 137);
            }
            .onewayselect,.roundtripselect{
                position: relative;
                left: 20%;
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
                bottom:30px;
                background-color: rgb(42, 238, 42);
                color: rgb(60, 61, 71);
                padding: 4px 40px 8px 40px;
                /* border: 1px solid black; */
                transition: all 1s;
                font-size: 20px;
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
    <body>
    <?php
    error_reporting(0);
    session_destroy();
    session_start();
    if(!isset($_COOKIE['user'])){
        header("location:loginfo2.php?from=select");
    }
    $_SESSION['book']=1;
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $query="SELECT * from airport";
    $cmd=mysqli_query($con,$query);
    ?>
    <div class="container">
    <div class="main">
    <div class="content">
        <!-- <table> -->
    <form action="selectseat.php" method="post">
        <div>
            <fieldset class="trip">
                <legend>Way:</legend>
                <div class="onewayselect">
                <label for="oneway" class="waylabel">
                <input onchange="disabledate()" name="way" type="radio" id="oneway" value="oneway" checked>One-Way
                </label>
                </div>
                <div class="roundtripselect">
                <label for="roundtrip" class="waylabel">
                <input onchange="disabledate()" name="way" type="radio" id="roundtrip" value="roundtrip">Round-Trip
                </label>
                </div>
            </fieldset>
        </div>
        <div id="destination">
        <fieldset id="dest">
            <legend>Destination:</legend>
            <div class="fromselectpart">
                <div class="title">From:</div>
                <div id="fromopen">
                <div id="fromdef" name="def">Select From:</div><i class="sel fa fa-caret-down"></i>
                </div>
                <div class="section-container">
                <ul class="fromsection">
                    
                    
                    <?php while($row=mysqli_fetch_array($cmd)){?>
                    
                    <li class="listradio">
                    <label class="select" for="from<?php echo $row['city'];?>">
                    <input onclick="updateText()" id="from<?php echo $row['city'];?>" class="selectinp" type="radio" name="from" value="<?php echo $row['city'];?>"><?php echo $row['city'];?>
                    </label></li>
                    <?php }
                    mysqli_free_result($cmd);
                    $query="SELECT * from airport";
                    $cmd=mysqli_query($con,$query);?>
                    
                    
                </ul>
                </div>
            </div>
            <div id="between"><i class="fa fa-long-arrow-right"></i></div>
            <div class="toselectpart">
                <div class="title">To:</div>
                <div id="toopen">
                <div id="todef" name="def">Select To:</div><i class="sel fa fa-caret-down"></i>
                </div>
                <div class="section-container">
                <ul class="tosection">
                <?php while($row=mysqli_fetch_array($cmd)){?>
                    
                    <li class="listradio">
                    <label class="select" for="to<?php echo $row['city'];?>">
                    <input onclick="updateText()" id="to<?php echo $row['city'];?>" class="selectinp" type="radio" name="to" value="<?php echo $row['city'];?>"><?php echo $row['city'];?>
                    </label></li>
                    <?php }
                    
                    mysqli_free_result($cmd);
                    $query="select MIN(arr_date) AS mindate, MAX(arr_date) AS maxdate from schedule";
                    $cmd=mysqli_query($con,$query);
                    $row=mysqli_fetch_array($cmd);
                    
                    ?>
                    
                </ul>
                </div>
            </fieldset>
            </div>
        
        <fieldset id="date">
            <legend>Date:</legend>
            <center>
            <div id="departure">
            <div class="title datepicker">Departure Date:</div>
            <input  id="departurepicker" type="date" name="depart" min="<?php echo $row['mindate'];?>" max="<?php echo $row['maxdate'];?>">
            </div>
            </center>
            <center>
            <div id="arrival">
            <div class="title datepicker">Arrival Date:</div>
            <input disabled id="arrivalpicker" type="date" name="arrive" min="<?php echo $row['mindate'];?>" max="<?php echo $row['maxdate'];?>">
            </div>
            </center>
        </fieldset>
            <!-- <td>
                <select name="to" id="to" >
                <option value="good">good</option>
                <option value="hello">hello</option>
                <option value="bye">bye</option>
                </select>
            </td> -->
            </div>
            
        
        <center>
        <div>
            <input id="btn" type="submit" name="submit" id="submitbtn" value="Submit">
        </div></center>
    </form>
        <!-- </table> -->
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
    <script type = "text/javascript"></script>
    <script>
        var fromopen = document.getElementById("fromopen");
        var toopen = document.getElementById("toopen");
        var fromselect = document.querySelector(".fromsection");
        var toselect = document.querySelector(".tosection");
        var radioButtons = document.querySelectorAll('input[type="radio"]');
        var main = document.querySelector(".main");
        var fromparent = document.querySelector("div#fromopen");
        var toparent = document.querySelector("div#toopen");
        // var radios = document.getElementsByClassName("selectinp"); 
        // var def= document.getElementById("fromdef");
        // let html = document.getElementById("fromopen").innerHTML;
        // openselect.addEventListener("click", function() {
        //             select.classList.add("open");
                    
        // })
        document.addEventListener("click", function(event) {
            var isClickInsideBox = fromopen.contains(event.target);
            if (isClickInsideBox) {
          // Toggle the "selected" class on the box
                fromselect.classList.toggle("open");
                fromparent.classList.toggle("fromdrop");
                
            } 
            else {
              // Remove the "selected" class from the box
                fromselect.classList.remove("open");
                fromparent.classList.remove("fromdrop");
        }})
        document.addEventListener("click", function(event) {
            var isClickInsideBox = toopen.contains(event.target);
            if (isClickInsideBox) {
          // Toggle the "selected" class on the box
                toselect.classList.toggle("open");
                toparent.classList.toggle("todrop");
            } 
            else {
              // Remove the "selected" class from the box
                toselect.classList.remove("open");
                toparent.classList.remove("todrop");
        }})
        // radioButtons.forEach(function(radioButton) {
        // // var label = radioButton.nextElementSibling;
        // var li = radioButton.parentElement;
        
        //     li.addEventListener("click", function(event) {
        //         radioButton.checked = true;
        //     })
        // })
        function updateText(){
            var fromval = document.getElementsByName('from');
			var fromselectedvalue="1";
            
			for (var i = 0; i < fromval.length; i++) {
				if (fromval[i].checked) {
					fromselectedvalue = fromval[i].value;
                    // alert(fromselectedvalue);
					break;
				}
			}
            
			// get the selected value from the second radio group
			var toval = document.getElementsByName('to');
			var toselectedvalue="1";
			for (var j = 0; j < toval.length; j++) {
				if (toval[j].checked) {
					toselectedvalue = toval[j].value;
					break;
				}
			}
            
			// update the text of the second span based on the selected value from the second radio group
			var totext = document.getElementById('todef');
			var fromtext = document.getElementById('fromdef');
            
            if(toselectedvalue==="1"){
                totext.innerHTML="Select To:";
            }
            else{
                totext.innerHTML=toselectedvalue;
            }
            
			if(fromselectedvalue==="1"){
                fromtext.innerHTML="Select From:";
            }
            else{
                fromtext.innerHTML=fromselectedvalue;
            }
            
		}
        function disabledate(){
            var oneway = document.getElementById("oneway");
            var roundtrip = document.getElementById("roundtrip");
            var arrive = document.getElementById("arrivalpicker");
            var arrivefunc = document.querySelector("#arrivalpicker");
            if(oneway.checked){
                arrive.disabled = false;
                arrivefunc.classList.remove("enabledate");
            }
            else{
                arrive.disabled = false;
                arrivefunc.classList.add("enabledate");
                
            }
        }   
        // function updateText(radio) {
        //     var selectedValue = radio.value;
        //     document.getElementById("fromdef").innerHTML = selectedValue;
        // }
        // function updateText(radio) {
        //     var selectedValue = radio.value;
        //     document.getElementById("todef").innerHTML = selectedValue;
        // }
        
        var expandButton = document.getElementById("expandButton");
        var sidebar = document.querySelector(".sidebar");
        
        expandButton.addEventListener("click", function() {
            sidebar.classList.toggle("expand");
            main.classList.toggle("resize");
        });
        var startDateElement = document.getElementById("departurepicker");
        var endDateElement = document.getElementById("arrivalpicker");
    
    // Add an event listener to the start date element
        startDateElement.addEventListener("input", function() {
      // Set the minimum value of the end date element
        endDateElement.min = startDateElement.value;
    });
        // sidebar.addEventListener("mouseenter",function(){
        // sidebar.classList.add("expand");
        // }),
        // sidebar.addEventListener("mouseleave",function(){
        //     sidebar.classList.remove("expand");
        // });
        
    </script>
</body>
</html>