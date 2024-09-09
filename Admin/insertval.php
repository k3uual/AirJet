<?php
    session_start();
    //print_r($_POST) ;
    $file=$_GET['file'];
    $table=$_SESSION['table'];
    print_r($_POST);
    $len=sizeof($_POST)/2;
    include("connect.php");
    //echo $len;
    $i=0;
    $str="(";
    while($len>0){
        $str.=$_POST["field$i"].",";
        $i++;
        $len--;
    }
    $len=sizeof($_POST)/2;
    $i=0;
    $str=rtrim($str,",");
    $str.=") values (";
    while($len>0){
        $str.="'".$_POST[$_POST['field0']]."',";;
        $i++;
        $len--;
    }
    $str=rtrim($str,",");
    $str.=")";
    
    
    $query="insert into $_SESSION[table]$str";
    $cmd=mysqli_query($con,$query);
    echo $query;
    if($cmd){
        $stat= 'success';
    }
    else{
        $stat= 'unsuccess';
    }
    //echo $stat;
    header("location:$file.php?table=$table&status=$stat&linkfrom=Inserted");
?>