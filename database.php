<?php
    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="musique";

    $connection = mysqli_connect($servername,$username,$password,$database);

    if(!$connection){
        die("Connection failed : ".mysqli_connect_error());
    }
?>