<?php
    include("conecta.php");

    // Recebendo as variáveis do form
    $nome = $_POST['nome'];        
    $email = strtolower($_POST['email']);
    $senha = md5($_POST['senha']);

    $name = $_FILES["img"]["name"];
    $temp = $_FILES["img"]["tmp_name"];

    // Criando a Querry no BD
    $sql = "INSERT INTO usuario (id,nome,email,senha,img) VALUES (NULL,'$nome','$email','$senha','$name')";
    $insere = mysqli_query($conexao,$sql);

    move_uploaded_file($temp, "./img/profile/".$name);

    if($insere){
        header("location: http://127.0.0.1/biju/index.php");
    } else {
        echo "Erro".mysqli_connect_error($conexao);
    }
    
    mysqli_close($conexao);
?>