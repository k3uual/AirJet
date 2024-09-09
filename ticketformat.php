
<html>
    <head>
        <style>
            body{
                font-size: 15;
            }
            #head{
                font-size: 50;
            }
            #ref{
                font-size: 30;
            }
            table{
                width:100%;
            }
            .data{
                border: 2px solid gray;
            }
            .title{
                font-size: 25;
                
                background-color: #d7d9d8;
            }
            .info{
                font-size: 13;
            }
            .add{
                font-size: 12;
            }
            .non{
                width:40%
            }
        </style>
        <title>hello</title>
    </head>
    <body>
    <b><center><div id="head">AirJet</div></center></b>
    <br>
    <br>
    <table class="non">
        <tr>
            <td>Issuing Airline</td>
            <td>:</td>
            <td> Airjet</td> 
        </tr>
        <tr>
            <td>Place of Issue</td>
            <td>:</td>
            <td> www.airjet.com</td> 
        </tr>
        <tr>
            <td>Date of Issue</td>
            <td>:</td>
            <td><?php echo $date?></td>  
        </tr>
        <tr>
            <td>Booking Reference</td>
            <td>:</td>
        </tr>
    </table><br>
        <b><div id="ref"><?php echo $tno;?></div></b>
        <br><br>
        <div class="title">PASSANGER DETAILS:</div><br>
        <table>
            <thead>
                <th align="left">Passanger Name:</th>
                <th align="left">Passanger ID:</th>
                <th align="left">Passanger Contact no:</th>
            </thead>
            <tr>
                <td ><?php echo $row['name'];?></td>
                <td ><?php echo $row['cid'];?></td>
                <td ><?php echo $row['mobile'];?></td>
            </tr>
        </table><br><br>
        <div class="title">Flight Details:</div><br>
        <table class="info">
            <thead>
                <th class="data">Flight</th>
                <th class="data">Depart</th>
                <th class="data">Arrive</th>
                <th class="data">Class</th>
                <th class="data">Status</th>
                <th class="data">Dep.<br>Terminal</th>
            </thead>
            <center>
            <tr>
            <td class="data"><?php echo $flight;?></td>
            <td class="data"><?php echo $row['city1']."<br>".$row['dep_date']."<br>".$row['dep_time'];?></td>
            <td class="data"><?php echo $row['city2']."<br>".$row['arr_date']."<br>".$row['arr_time'];?></td>
            <td class="data"><?php echo $class;?></td>
            <td class="data"><?php ($confirmed)?print('confirmed'):print('unconfirmed');?></td>
            <td class="data"><?php echo $row['terminal1'];?></td>
            </tr></center>
            </table>
            <div class="add">Operated by AirJet - Departure:Terminal <?php echo substr($row['terminal1'],-1,1);?> / Arrival:Terminal <?php echo substr($row['terminal2'],-1,1);?> </div>
            <br><br>
            <div class="title">Fare Details:</div><br>
            <table style="width:50%">
                <tr>
                    <td>Base Fare</td>
                    <td>:</td>
                    <td><?php echo $cost;?></td>
                </tr>
                <tr>
                    <td>Aviation Security Fee</td>
                    <td>:</td>
                    <td>100</td>
                </tr>
                
                <tr>
                    <td>Total Trip Cost</td>
                    <td>:</td>
                    <td><?php echo $total;?></td>
                </tr>
                <tr>
                    <td>Form of Payment</td>
                    <td>:</td>
                    <td>UPI</td>
                </tr>
            </table><br><br>
            <div class="title">Important Note:</div><br><br>
            <div class="add">You must be present at the airport with the valid photo identification, mentioned at the time of booking, to enter the airport<br>
            We seek your attention to make a note of our Terms & Conditions of AirJet, no alteration of the ticket will be tolerated and could result in heavy fine and/or prison time.</div>

<?php 
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$tno."(".$date.").doc");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    ?>
        </table>
    </body>
</html>
