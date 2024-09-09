<?php 
    setcookie("flag",1,time() + (-(10 * 365 * 24 * 60 * 60)));
    setcookie("user","",time() + (-(10 * 365 * 24 * 60 * 60)));
    setcookie("user","",time() + (10 * 365 * 24 * 60 * 60));
    header("location:main2.php");
    
?>
