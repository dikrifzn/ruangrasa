<?php 
    $server = "*****";
    $username = "*****";
    $password = "*****";
    $database = "*****";

    $db = mysqli_connect($server, $username, $password, $database);

    if(!$db){
        die("Gagal Terhubung dengan Database!<br>". mysqli_connect_error());
    }
?>
