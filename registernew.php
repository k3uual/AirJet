<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        div.inp{
            /* outline: red solid 2px; */
            padding: 5px 0 5px 0;
        }
        label{
            width: 120px;
            /* outline: green solid 2px; */
        }
        body{
            background-color: #393646;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
          -webkit-appearance: none; 
          margin: 0; 
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
        .reg{
            background-color: #f4f4fd;
            position: relative;
            display: grid;
            
            /* grid-template-columns: auto auto; */
            width:25em;
            top: 5em;
            border-radius: 0 0 10px 10px;
            padding: 0px 0 40px 0;
            outline: black solid 2px;
        }
        .textbox{
                border-radius: 50px;
                width: 200px;
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
            /* 
            .agesec{
                outline: red solid 2px;
                position: relative;
                left: 100px;
                display: grid;
                grid-template-columns: auto auto;
                width: 100px;
            }
            #city{
                position: relative;
                right: 90px;
                width: 150px;
            }
            .citysec{
                position:relative;
                bottom:42px;
                left: 30px;
            }*/
            #addr{
                border-radius: 20px;
                height: 40px;
            }
            
        label{
            font-size: 19px;
        }
        .inp{
            display: grid;
            grid-template-columns: auto auto;
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
            #age{
                position: relative;
                width: 40px;
                margin: none;
                left: -80px;
            }
            /* .agetxt,.citytxt{
                position: relative;
                width: fit-content;
                
            }
            .agetxt{
                left: 50px;
            } */
            .login:hover{
                background-color: #66627a;
            }
            .login{
                cursor: pointer;
                background-color:  #717186;
                color: #ffffff;
                margin-left: -1.5px;
            }
            .register{
                border-bottom: none;
                margin-left: 166.75px;
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
            #uid:hover{
                border:3px solid blue;
            }
            #uid:focus{
                padding: 5px;
                padding-left: 10px;
                border:3px solid blue;
            }
            /* div{
                outline: red solid 2px;
            } */
            
    </style>
    <title>
        Register
    </title>
    <?php
    //echo $_GET['from'];
    include("connect.php");
    $query="select CONVERT(TRIM(LEADING 'C0' from cid),UNSIGNED INTEGER) AS c from customer order by c DESC LIMIT 1";
    $cid="C00000";
    $cmd=mysqli_query($con,$query);
    $num=mysqli_num_rows($cmd);
    $row=mysqli_fetch_array($cmd);
    echo $num;
    if($num){
        $c=intval($row['c'])+1;
        $cid="C".sprintf("%05d", $c);
    }
    ?>
    <body>
        <center>
            <div class="reg">
                <div class="head">
                    <div onclick="window.location.href='loginfo2.php<?php if(isset($_GET['from'])){echo '?from=select';}?>'" class="login">LOGIN</div>
                    <div  class="register">REGISTER</div>
                </div>
            <form action="regcomp.php<?php if(isset($_GET['from'])){?>?from=select<?php }?>" method="post">
                
                    <h6 style="color:red;">remember your UserId*</h6>
                
                <div>
                    <div class="uid inp">
                        <label for="uid">UserId: </label>
                        <input id="uid" class="textbox"  type="text" name="cid" value="<?php echo $cid;?>" readonly>
                        
                    </div>
                </div>
                <div>
                    <div class="inp">
                        <label for="name">Name: </label>
                        <input id="name" class="textbox" type="text" name="name" required placeholder="Your Name">
                    </div>
                </div>
                <div>
                    <div class="inp">
                        <label for="pass">Password: </label>
                        <input id="pass" class="textbox"  type="password" name="pass" placeholder="eg: $P@ssword123" requiredpattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                </div>
                
                <div>
                    <div class="agesec inp">
                        <label class="agetxt" for="age">Age: </label>
                        <input id="age" class="textbox"  type="number" name="age" required>
                    </div>
                </div>
                <div>
                    <div class="citysec inp">
                        <label class="citytxt" for="city">City: </label>
                        <input id="city" class="textbox"  type="text" name="city" placeholder="eg: mumbai" required>
                    </div>
                </div>
                
                <div>
                    <div class="inp">
                        <label for="mob">Mobile: </label>
                        <input id="mob" class="textbox"  type="tel" name="mob" placeholder="eg: 9999999999" required>
                    </div>
                </div>
                <div>
                    <div class="inp">
                        <label for="email">Email: </label>
                        <input id="email" class="textbox"  type="email" name="email" placeholder="eg: abc@email.com" required>
                    </div>
                </div>
                <div>
                    <div class="inp">
                        <label class="addrtxt" for="addr">Address: </label>
                        <textarea id="addr" class="textbox"  name="addr" cols="20" rows="5" placeholder="optional"></textarea>
                    </div>
                </div>
                <div>
                    <div>
                        <input id="btn" type="submit" value="Sign Up">
                    </div>
                </div>
                <input type="hidden" name="hid" value="1">
            </form>
            </div>
        </center>
    </body>
</html>