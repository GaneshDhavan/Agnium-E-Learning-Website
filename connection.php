<?php
    $servername = 'localhost';
    $username = 'id15580762_umair';
    $password = 'zSJ<PXEU|kTP8|G';
    $database = 'id15580762_agnium';

    $conn = new mysqli($servername, $username, $password, $database);

    if(mysqli_connect_error()) {
        echo 'Connection Failed' . $conn -> connect_error;
    }
?>