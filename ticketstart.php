<?php 
    session_start();
    $count=count($_SESSION['ticket']);
    $i=0;
    include("connect.php");
    $date=date("d-m-Y",time());
    while($i<$count){
    
        $file=$tno."(".$date.").doc";
        $url="ticketdownload.php?tno=".$tno;
        if (file_put_contents($file, file_get_contents($url)))
        {
            echo "File downloaded successfully";
        }
        else
        {
            echo "File downloading failed.";
        }
        // header('Content-Type: application/octet-stream');  
        // header("Content-Transfer-Encoding: utf-8");   
        // header("Content-disposition: attachment; filename=\".$file." . basename($file_url) . "\"");   
        // readfile($file);  
        $i++;
    }
    ?>