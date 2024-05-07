<?php
    $con = mysqli_connect("localhost:3307","root","","transport_analytic");

    if(mysqli_connect_errno()){
        echo "failed to connect to mysqli" .mysqli_connect_error();

    }else{
        echo "Connected";
    }
?>