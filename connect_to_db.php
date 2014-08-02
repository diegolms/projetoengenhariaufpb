<?php
    $con = mysqli_connect('127.0.0.1','root','Dev12345', 'ProjetoES');
    //$con = mysqli_connect('mysql.1freehosting.com','u340985508_ppgi','ppgiufpb12345', 'u340985508_ppgi');
    if (!$con) {
        die('Could not connect to MySQL: ' . mysqli_error());
    }
?>