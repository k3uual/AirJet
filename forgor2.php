<!DOCTYPE html>
<html>
    <head>
        <title>forgot password?</title>
        <style>
            *{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            body{
                background-color: #393646;
            }
            #chng{
                background-color: #f4f4fd;
                position: relative;
                outline: black solid 2px;
                width:20em;
                top: 15em;
                border-radius:10px ;
                padding: 0px 0 60px 0;
            }
            
            
            label{
            font-size: 19px;
            
            width: 100px;
        }
        .inp{
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px;
        }
        .head{
                position: relative;
                bottom: 2.75em;
                /* border: 2px solid red; */
                
                display: grid;
                grid-template-columns: auto auto;

            }
            .sendotphead{
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
            .textbox{
                border-radius: 50px;
                width: 180px;
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
    <body><center >
        <div id="chng">
            <div class="head">
                <div class="sendotphead">Send OTP:</div>
            </div>
            <form action="otp.php" method="post" >
                <div class="inp">
                    <label for="uid">User-id : </label>
                    <input class="textbox" id="uid" type="text" placeholder="eg: C000023" name="uid" required>
                </div>
                <div class="inp">
                    <label for="email">email : </label>
                    <input class="textbox" id="email" type="text" placeholder="eg: abc@email.com" name="mail" required>
                </div>
                <div>
                    <input id="btn" type="submit" name="btn" value="Send OTP">
                </div>
            </form>
            </div>
        </center>
    </body>
</html>