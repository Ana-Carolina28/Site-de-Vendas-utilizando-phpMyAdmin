<?php
    // $conexao = mysqli_connect("localhost", "root", "", "biju_db");
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "biju_db";
    
    $conexao = mysqli_connect($host, $user, $pass, $db);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>