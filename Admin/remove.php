<?php
    session_start();
    include("connect.php");
    $file=$_GET['file'];
    $table=$_SESSION['table'];
    $key=$_GET['key'];
    $id=$_GET['id'];
    $query="DELETE from $table WHERE $key='$id'";
    if($_SESSION['flag']==1){
        $key2=$_GET['key2'];
        $id2=$_GET['id2'];
        $query="DELETE from $table WHERE $key='$id' AND $key2='$id2'";
    }
    $stat='failed';
    $cmd=mysqli_query($con,$query);
    if($cmd){
        $stat='success';
    }
    header("location:$file.php?table=$table&status=$stat&linkfrom=Removal");
?>