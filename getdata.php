<?php
    session_destroy();
    session_start();
    $seats=count($_POST);
    
    
    $_SESSION['chosen']=$_POST['sel'];
    
    
    $count=count($_POST['sel']);
    $i=0;
    while($i<$count){
        //$_SESSION['fid'][$i]=substr($_POST['sel'][$i],0,5);
        $_SESSION['classid'][$i]=substr($_SESSION['chosen'][$i],11,6);
        $_SESSION['seat'][$i]= substr($_SESSION['chosen'][$i],17,5);
        $_SESSION['schedule'][$i]= substr($_SESSION['chosen'][$i],5,6);
        if(substr($_POST['sel'][$i],-3,3)=="hop"){
            $_SESSION['cost'][$i]=intval(substr($_SESSION['chosen'][$i],33,4));
        }
        else{
            $_SESSION['cost'][$i]=intval(substr($_SESSION['chosen'][$i],22,4))+100;
        }
        $i++;
    }
    
    // while(1){
    //     if(isset($_POST['sel'.$i])){
    //         echo $_POST['sel'.$i];
    //         $_SESSION['chosen'][]=$_POST['sel'][];
    //         
    //         
    //         //echo "<br>".$_SESSION['classid']."<br>".$_SESSION['fid']."<br>".$_SESSION['schedule'];
    //         //header("location:ticket.php");
    //         
    //     }
        
        
    // }
    // echo $cost;
    header("location:pay.php");
?>