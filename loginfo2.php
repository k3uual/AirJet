<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            body{
                background-color: #393646;
            }
            .head{
                position: relative;
                bottom: 2.85em;
                /* border: 2px solid red; */
                
                display: grid;
                grid-template-columns: auto auto;
            }
            .login,.register{
                background-color: #f4f4fd;
                border-radius: 20px 20px 0 0;
                font-size: 24px;
                position: relative;
                /* bottom: 1.2em; */
                /* outline: yellow solid 1px; */
                border: 2px solid black;
                
                width: fit-content;
                padding: 5px 15px 5px 15px;
                
            }
            
            .register:hover{
                background-color: #66627a;
            }
            .login{
                border-bottom: none;
                margin-left: -1.5px;
            }
            .register{
                cursor: pointer;
                background-color:  #717186;
                color: #ffffff;
                margin-left: 86.5px;
            }
            label{
                font-size: 19px;
            }
            .inp{
                display: grid;
                grid-template-columns: 7em auto;
                /* outline: blue solid 2px ; */
                width: 100%;
                overflow: auto;
                padding: 10px 0 10px 0;
            }
            
            #forgotsec{
                position: relative;
                
                top:-16px;
                padding-top:-5px;
                
            }
            #forgotpass{
                position: relative;
                top:5px;
                /* outline: green solid 2px; */
                font-size: 13px; 
                margin-left: 5em;
            }
            
            #log{
                /* background-color: #EEEEEE; */
                background-color: #f4f4fd;
                position: relative;
                outline: black solid 2px;
                width:20em;
                top: 15em;
                border-radius: 0 0 10px 10px;
                padding: 0px 0 40px 0;
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
                position: relative;
                top:20px;
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
            #regsec{
                position: relative;
                left: 50%;
                
            }
            .textbox{
                border-radius: 50px;
                
                padding: 5px;
                /* padding-left: 10px; */
                border:3px solid blue;
                padding-left: 10px;
                transition: all 0.1s;
            }
            .textbox:hover{
                border: 3px solid rgb(1, 183, 1);
                
            }
            .textbox:focus{
                /* border: none; */
                outline:none;
                border:6px blue;
                /* border: 3px solid blue; */
                /* border-image: linear-gradient(#55f, #55f) 1; */
                border-style: double;
                padding: 4px;
                padding-left: 10px;
            }
            
            #reg{
                font-size: 13px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
    <center>
    
    <div id="log">
        <div class="head">
            <div class="login">LOGIN</div>
            <div onclick="window.location.href='registernew.php<?php if(isset($_GET['from'])){?>?from=select<?php }?>'" class="register">REGISTER</div>
        </div>
        <form action="login.php<?php if(isset($_GET['from'])){?>?from=select<?php }?>" method="post" >
            <div class="inp">
                <div id="uidtxtsec" class="label">
                    <label class="txt" for="uid">User-id : </label>
                </div>
                <div id="uidinpsec" class="txtbox">
                    <input  type="text" name="uid" id="uid" class="textbox" placeholder="eg: C00023">
                </div>
            </div>
            <div class="inp">
                <div id="passtxtsec" class="label">
                    <label class="txt" for="pass" >password : </label>
                </div>
                <div id="passinpsec" class="txtbox">
                    <input type="password" name="pass" id="pass" class="textbox" placeholder="eg: $P@ssword123" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <!-- placeholder="••••••••" -->
            </div>
            <div id="forgotpass-div">
                <div></div>
                <div id="forgotsec" >
                    <a href="forgor2.php" id="forgotpass">forgot password?</a>
                </div>
            </div>
            <div id="errorsec">
                <div colspan="2" id="errordisp"></div>
            </div>
            
            <div class="link">
                <!-- <div  id="regsec">
                    <a href="register.php" id="reg">Register</a>
                </div> -->
                <div id="submitsec">
                    <input style="margin-left:10px;" id="btn" type="submit" name="btn" value="Login">
                </div>
            </div>
        </form>
    </div>
    
    </center>
    </body>
</html>