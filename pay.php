<?php
session_start();
  //if(isset($_COOKIE['user'])){
  $total=0;
  foreach($_SESSION['cost'] as $a){
    $total=$total+$a+100;
  }
  $_SESSION['total']=$total;
?>
<html>
<head>
        <title>class</title>
        
        
    </head>
    <body>
    

	
    <style>
      /* Style the form */
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      /* Style the input fields */
      input {
        width: 50%;
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
    <form action="ticket2.php" method="post">
      <label for="card_number"></label>
      <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" required>

      <label for="exp_date"></label>
      <input type="text" id="exp_date" name="exp_date" placeholder="MM/YY" required>

      <label for="cvv"></label>
      <input type="text" id="cvv" name="cvv" placeholder="Enter your CVV number" required>

      <label for="name_on_card"></label>
      <input type="text" id="name_on_card" name="name_on_card" placeholder="Enter the name on your card" required><br>
      <input type="text" id="total" name="total"  value="Total amount:
    <?php
        

        //echo $_POST['class'];
        echo "INR.";

        // if($_POST['class']=="first" AND isset($_SESSION['class1'])){
        //     $cost=intval(substr($_SESSION['class1'],-4,4));
            
        //     $count1 = 10 / $cost;
        //     $count2 = $count1 * 100;
        //     $tax=$count2*$cost;
        //     $total=$tax+$cost+100;
        //     echo $total;
        //     //$tax = number_format($count2, 0);
        //     $_SESSION['chosen']=$_SESSION['class1'];
        // }
        // else if($_POST['class']=="business" AND isset($_SESSION['class2'])){
        //     $cost=intval(substr($_SESSION['class1'],-4,4));
            
        //     $count1 = 6.5 / $cost;
        //     $count2 = $count1 * 100;
        //     $tax=$count2*$cost;
        //     $total=$tax+$cost+100;
        //     echo $total;
        //     //$tax = number_format($count2, 0);
        //     $_SESSION['chosen']=$_SESSION['class2'];
        // }
        // else if($_POST['class']=="economy" AND isset($_SESSION['class3'])){
        //     $cost=intval(substr($_SESSION['class1'],-4,4));
            
        //     $count1 = 5 / $cost;
        //     $count2 = $count1 * 100;
        //     $tax=$count2*$cost;
        //     $total=$tax+$cost+100;
        //     echo $total;
        //     //$tax = number_format($count2, 0);
        //     $_SESSION['chosen']=$_SESSION['class3'];
        // }
        // else{
        //     header("location:dest.php");
        // }
        echo $total;
    ?>" readonly>
    <input type="hidden" name="tax" value="<?php echo $tax;?>">
      <input type="submit" value="Submit">
    </form>
    </body>
</html>
<?php
  //}
//else{
    // $_SESSION['total']=intval(substr($_POST['total'],-4,4));
    //header("location:loginfo.php");
//}
?>