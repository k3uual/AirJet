<?php
    error_reporting(0);
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"airjetdb");
    $uid=$_POST['uid'];
    $m=$_POST['mail'];
    $query="select * from customer where email='$m' and cid='$uid'";
    $cmd=mysqli_query($con,$query);
    
    
    $flag=0;
    // while($row=mysql_fetch_array($cmd)){}
    if($query)
        $flag=1;
    
    if($flag==0)
        header("location:forgot.php");
    else{
        $r=strval(rand(1000,9999));
        $cmd=mysqli_query($con,"UPDATE customer SET otp='$r' where cid='$uid'");
        mail($r,"change password:",$m);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>change password</title>
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            body{
                background-color: #393646;
            }
            #otpsec{
                height: 265px;
                /* background-color: #EEEEEE; */
                background-color: #f4f4fd;
                position: relative;
                outline: black solid 2px;
                width:22em;
                top: 15em;
                border-radius:10px ;
                padding: 0px 0 40px 0;
            }
            .head{
                position: relative;
                bottom: 2.75em;
                /* border: 2px solid red; */
                
                display: grid;
                grid-template-columns: auto auto;
            }
            .newpasshead{
                background-color: #f4f4fd;
                border-radius: 20px 20px 0 0;
                font-size: 24px;
                position: relative;
                /* bottom: 1.2em; */
                /* outline: yellow solid 1px; */
                border: 2px solid black;
                left: 88px;
                width: fit-content;
                padding: 5px 15px 5px 15px;
                border-bottom: none;
                z-index: 3;
            }
            label{
                /* padding-left: 10px;
                text-align: left; */
                width: 170px;
                /* outline: red solid 2px; */
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
            .textbox{
                position: relative;
                left: 65px;
                border-radius: 50px;
                width: 150px;
                padding: 5px;
                /* padding-left: 10px; */
                border:3px solid blue;
                padding-left: 10px;
                transition: all 0.1s;
            }
            .textbox:hover{
                border: 3px solid rgb(233, 221, 55);
                
            }
            .textbox:focus{
                /* border: none; */
                outline:none;
                border:3px rgb(153, 0, 255);
                /* border: 3px solid blue; */
                /* border-image: linear-gradient(#55f, #55f) 1; */
                border-style: solid;
                /* padding: 4px; */
                padding-left: 10px;
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
                top:30px;
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
        <center>
    
            <div id="otpsec">
                <div class="head">
                    <div class="newpasshead">New Password:</div>
                </div>
                <form action="otpcheck.php" method="post" >
                    <div class="inp">
                        
                            <label class="txt" for="otp">OTP : </label>
                        
                        
                            <input  type="text" name="otp" id="otp" class="textbox" placeholder="eg: 1111" pattern="[0-9]+" title="OTP is sent to your email address" required>
                        
                    </div>
                    <div class="inp">
                        
                            <label class="txt" for="newpass">New password : </label>
                            <input  type="password" name="newpass" id="newpass" class="textbox" placeholder="eg: $P@ssword123" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        
                    </div>
                    <div class="inp">
                        
                            <label class="txt" for="confpass" >Confirm password : </label>
                        
                        
                            <input type="password" name="confpass" id="pass" class="textbox" placeholder="eg: $P@ssw0rd123" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        
                    </div>
                    
                    <div id="errorsec">
                        <div colspan="2" id="errordisp"></div>
                    </div>
                    
                    <div class="link">
                        <!-- <div  id="regsec">
                            <a href="register.php" id="reg">Register</a>
                        </div> -->
                        <div id="submitsec">
                            <input style="margin-left:10px;" id="btn" type="submit" name="btn" value="Change">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $uid; ?>">
                </form>
            </div>
            
            </center>
    </body>
</html>
