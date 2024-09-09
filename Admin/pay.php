<?php
  if(isset($_COOKIE['user'])){
  
?>
<html>
<head>
        <title>class</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
    <header>
		<h1 id="head"><i>AirJet</i></h1>
	</header>

	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Book Flight</a></li>
			<li><a href="#">Manage Booking</a></li>
			<li><a href="#">Contact Us</a></li>
            <li><a href="index1.php" class="log">Login</a></li>|
            <li><a href="register.php" style="margin-left:20px;" class="log">Sign Up</a></li>
		</ul>
	</nav>
    <style>
      /* Style the form */
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      /* Style the input fields */
      input {
        width: 70%;
        padding: 12px 30px ; 
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #ccc;
      }
      input[type="text"]:focus{
        
        border:1.5px solid blue;
        border-radius:10px;
      }
      /* Style the submit button */
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input#total:focus{
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom:2px solid #ccc;
        border-radius: 0px;
        outline: none;
      }
      /* Style the form header */
      h2 {
        text-align: center;
        margin-top: 50px;
      }
    </style>
  
    <h2 style="font:comic sans;">Payment Form</h2>
    <form action="ticket.php" method="post">
      <label for="card_number"></label>
      <input type="text" id="card_number" name="card_number" placeholder="Enter your card number">

      <label for="exp_date"></label>
      <input type="text" id="exp_date" name="exp_date" placeholder="MM/YY">

      <label for="cvv"></label>
      <input type="text" id="cvv" name="cvv" placeholder="Enter your CVV number">

      <label for="name_on_card"></label>
      <input type="text" id="name_on_card" name="name_on_card" placeholder="Enter the name on your card"><br>
      <input type="text" id="total" name="total"  value="Total amount:
    <?php
        session_start();
        //echo $_POST['class'];
        echo "INR.";
        if($_POST['class']=="first" AND isset($_SESSION['class1'])){
            $cost=intval(substr($_SESSION['class1'],-4,4));
            
            $count1 = 10 / $cost;
            $count2 = $count1 * 100;
            $tax=$count2*$cost;
            $total=$tax+$cost+100;
            echo $total;
            //$tax = number_format($count2, 0);
            $_SESSION['chosen']=$_SESSION['class1'];
        }
        else if($_POST['class']=="business" AND isset($_SESSION['class2'])){
            $cost=intval(substr($_SESSION['class1'],-4,4));
            
            $count1 = 6.5 / $cost;
            $count2 = $count1 * 100;
            $tax=$count2*$cost;
            $total=$tax+$cost+100;
            echo $total;
            //$tax = number_format($count2, 0);
            $_SESSION['chosen']=$_SESSION['class2'];
        }
        else if($_POST['class']=="economy" AND isset($_SESSION['class3'])){
            $cost=intval(substr($_SESSION['class1'],-4,4));
            
            $count1 = 5 / $cost;
            $count2 = $count1 * 100;
            $tax=$count2*$cost;
            $total=$tax+$cost+100;
            echo $total;
            //$tax = number_format($count2, 0);
            $_SESSION['chosen']=$_SESSION['class3'];
        }
        else{
            header("location:dest.php");
        }
    ?>" readonly>
    <input type="hidden" name="tax" value="<?php echo $tax;?>">
      <input type="submit" value="Submit">
    </form>
    </body>
</html>
<?php
  }
else{
    // $_SESSION['total']=intval(substr($_POST['total'],-4,4));
    header("location:loginfo.php");
}
?>