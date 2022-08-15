<?php 
    $server = "sql213.epizy.com";
    $username = "epiz_32389129";
    $password = "kZydNxwcE7fO";
    $database = "epiz_32389129_dbruangrasa";

    $db = mysqli_connect($server, $username, $password, $database);

    if(!$db){
        die("Gagal Terhubung dengan Database!<br>". mysqli_connect_error());
    }
?>