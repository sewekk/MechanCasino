<?php

    $serverName ="localhost";
    $userName = "root";
    $pass = "";
    $tableName="mechanCasino";

    $conn = mysqli_connect($serverName,$userName,$pass,$tableName);

    if(!$conn){
        die("Connection failed:". mysqli_connect_error());
    }

?>