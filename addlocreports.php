<?php
    include ("connection.php");

    $sql = "SELECT * FROM `dbycountry`";
    $location = $con->query($sql) or die ($con->error);
    $row = $location->fetch_assoc();

    if(isset($_POST['submit'])){
        $date = $_POST['date'];
        $location = $_POST['loc'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO `dbycountry`(`date`, `loc`, `quantity`) VALUES ('$date','$location','$quantity')";
   
        $con->query($sql) or die ($con->error);

        echo "<script>window.location.href = 'index.php'; </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addlocreports.css">
</head>
<body>

<div class="form">
        <form action="" method="post">
            <fieldset>
                <legend><span class="number"></span> Delivered By Country Report</legend>

                <label> DATE START: </label>
                <input type="month" name="date" id="date">

                <label> DATE END: </label>
                <input type="month" name="date" id="date">

                <label> COUNTRY: </label>
                <input type="text" name="loc" id="loc">

                <label> QUANTITY: </label>
                <input type="number" name="quantity" id="quantity">

            <input type="submit" name="submit"value="Submit">
        </form>
    </div>
</body>
</html>
</body>
</html>