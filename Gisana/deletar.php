<?php
    include("conecta.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM usuario WHERE id = '$id'";
    $deleta = mysqli_query($conexao,$sql);

    if($deleta){
        header("location: http://127.0.0.1/biju/index.php");
    } else {
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>