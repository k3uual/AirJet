<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="table2.css">
        <link rel="stylesheet" type="text/css" href="sidebaradmin.css">
    </head>
    <body>
        <?php
            session_start();
            $table=$_POST['table'];
            $_SESSION['table']=$table;
            
            include("connect.php");
            $query="show columns from $table";
            $cmd=mysqli_query($con,$query);
            
            
            
        ?>
        <table cellspacing="0" cellpadding="0" border="0">
            <thead>
            
                <tr>
            <?php
                while($row=mysqli_fetch_array($cmd)){
            ?>
                    <th>
                        <?php echo $row['Field'];?>
                    </th><?php } ?>
                </tr>
                
            </thead>
            <tbody>
            <?php
                
                //echo mysqli_num_rows($cmd2);
                $query2="select * from $table";
                $cmd2=mysqli_query($con,$query2);
                while($row2=mysqli_fetch_array($cmd2)){
                mysqli_free_result($cmd);
                $cmd=mysqli_query($con,$query);?>

                <tr>
                <?php
                while($row3=mysqli_fetch_array($cmd)){ 
                    echo '<td>'.$row2[$row3['Field']].'</td>';
                }
                ?>
                
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
