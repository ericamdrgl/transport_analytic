<?php
include("connection.php");

$session = "SELECT * FROM 'session'";
$dbycountry = "SELECT * FROM 'dbycountry'";
$speedfuel = "SELECT * FROM 'speedfuel'";

$result_s = $con->query($session) or die ($con->error);
$result_d = $con->query($dbycountry) or die ($con->error);
$result_sf = $con->query($speedfuel) or die ($con->error);
$row1 = $result_s->fetch_assoc();
$row1 = $result_d->fetch_assoc();
$row1 = $result_sf->fetch_assoc();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Analytic</title>
    <link rel="stylesheet" href="index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <header>
            <!-- <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><ion-icon style="cursor:pointer" name="chevron-back-outline" onclick="closeNav()"></ion-icon></a>
                <a href="#"> Fuel </a>
                <a href="#"> Maintenaince </a>
                <a href="#"> Cost Effective </a>
                <a href="login\login.php">Logout</a>
            </div>
            
            <ion-icon style="cursor:pointer" name="grid-outline" onclick="openNav()"></ion-icon> -->

            <h1 style="text-align:center">Transport Analytics</h1>
            
                 <!-- Open Navigation Menu for Modules -->
            <!-- <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "300px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script> -->

    </header>

        <div class="sf_c" style="border:2px solid">
            <?php echo $row3['date'];?>
            <h3> Speed and Fuel Consumption Report </h3>
            <div class= "speed">
                <?php echo $row3['duration'];?>
            </div>

            <div class="fuel">
                <?php echo $row3['Fuel'];?>
            </div>
                
                <div class="button">
                    <a href="update.php"> UPDATE </a>
                </div> 
        </div> 
        
        <div class="location" style="border:2px solid">
            <h3> Delivered By Country </h3>
            <div class= "loc_c">
            <?php do { ?>
                <?php echo $row2['date'];?>
                <?php echo $row2['loc'];?>
                <?php echo $row2['quantity'];?></br>
            <?php }while ($row2 = $result_d->fetch_assoc()) ?>
            </div>

            <div class="button">
                <a href="addlocreports.php"> ADD REPORTS </a>
                <a href="update.php"> UPDATE </a>
            </div> 
        </div>


        <div class="session" style="border:2px solid">
            <h3 style="text-align:center; border-bottom:1px solid; margin:auto; padding:10px"> Transport Report </h3>
            <div class= "child_s">
                <table style="margin-top:5px">
                    <tr>
                        <th>Year </th>
                        <th> Month</th>
                        <th> Quantity</th>
                        <th> Delivery Copmplete</th>
                    </tr>
                    <?php do { ?>
                    <tr>
                        <td><?php echo $row1['year'];?></td>
                        <td><?php echo $row1['month'];?></td>
                        <td><?php echo $row1['quantity'];?></td>
                        <td><?php echo $row1['del'];?></td>
                    </tr>
                    <?php }while ($row1 = $result_s->fetch_assoc()) ?>
                </table>
                <div class="button">
                    <a href="addreports.php"> ADD REPORTS </a>
                    <a href="update.php"> UPDATE </a>
            </div> 
        </div> 
</body>
</html>