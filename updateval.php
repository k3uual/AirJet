<?php
    session_start();
    //print_r($_POST) ;
    $file=$_GET['file'];
    $table=$_SESSION['table'];
    $len=sizeof($_POST)/2;
    include("connect.php");
    //echo $len;
    $i=0;
    $str="";
    while($len>0){
        $str.=$_POST["field$i"]."='".$_POST[$_POST["field$i"]]."' , ";
        $i++;
        $len--;
    }
    $str=rtrim($str," , ");
    $str.=" WHERE ".$_POST['field0']."='".$_POST[$_POST['field0']]."'";
    if($_SESSION['flag']==1){
        $str.=" AND ".$_POST['field1']."='".$_POST[$_POST['field1']]."'";
    }
    
    $query="UPDATE $_SESSION[table] SET $str";
    $cmd=mysqli_query($con,$query);
    
    if($cmd){
        $stat= 'success';
    }
    else{
        $stat= 'unsuccess';
    }
    header("location:edit.php?status=$stat&linkfrom=Editing");
?>