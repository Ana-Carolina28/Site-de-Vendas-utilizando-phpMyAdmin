<?php
    include("conecta.php");

    // Recebendo as variáveis do form
    $id = $_POST['id'];
    $nome = $_POST['nome'];        
    $email = strtolower($_POST['email']);
    $senha = md5($_POST['senha']);

    $name = $_FILES["img"]["name"];
    $temp = $_FILES["img"]["tmp_name"];

    // Criando a Querry no BD
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha', img = '$name' WHERE id = '$id'";
    $insere = mysqli_query($conexao,$sql);

    move_uploaded_file($temp, "./img/profile/".$name);

    if($insere){
        header("location: http://127.0.0.1/biju/index.php");
    } else {
        echo "Erro".mysqli_connect_error($conexao);
    }
    
    mysqli_close($conexao);
?>