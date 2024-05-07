<?php
    include ("connection.php");

    $sql = "SELECT * FROM `session`";
    $vehicle = $con->query($sql) or die ($con->error);
    $row = $vehicle->fetch_assoc();

    if(isset($_POST['submit'])){
        $year = $_POST['year'];
        $month = $_POST['month'];
        $quantity = $_POST['quantity'];
        $delivered = $_POST['del'];

        $sql = "INSERT INTO `session`(`year`, `month`, `quantity`, `del`) VALUES ('$year','$month','$quantity','$delivered')";
   
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
    <link rel="stylesheet" href="addreports.css">
</head>
<body>

<div class="form">
        <form action="" method="post">
            <fieldset>
                <legend><span class="number"></span> Transport Report</legend>

                <label> YEAR: </label>
                <input type="text" name="year" id="year" placeholder="2024">

                <label> MONTH: </label>
                <input type="text" name="month" id="month">

                <label> QUANTITY: </label>
                <input type="number" name="quantity" id="quantity">

                <label> Delivered: </label>
                <input type="number" name="del" id="del">

            <input type="submit" name="submit"value="Submit">
        </form>
    </div>
</body>
</html>
</body>
</html>