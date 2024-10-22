<?php
    $Servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dms_app";

    $conn = new mysqli($Servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection Failed." . $conn->connect_error);
    }
?>