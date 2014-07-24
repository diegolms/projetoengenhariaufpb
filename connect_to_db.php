<?php
    $con = mysqli_connect('127.0.0.1','root','Dev12345', 'ProjetoES');
    //$con = mysqli_connect('mysql.hostinger.com.br','u120513476_ppgi','ppgiufpb12345', 'u120513476_ppgi');
    if (!$con) {
        die('Could not connect to MySQL: ' . mysqli_error());
    }
?>