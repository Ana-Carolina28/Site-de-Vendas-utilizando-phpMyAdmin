<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/icon.png"> 
</head>

<body>
    <nav id="menu-h">
        <ul>
            <a href="http://127.0.0.1/biju/index.php"><img class="logo" src="img/logo.png"></a>
            <li><a href="http://127.0.0.1/biju/cadastro.php">Cadastro</a></li>
            <li><a href="http://127.0.0.1/biju/buscar.php">Buscar</a></li>           
            <li><a href="http://127.0.0.1/biju/index.php#brincos">Brincos</a></li>           
            <li> <a href="http://127.0.0.1/biju/index.php#aneis">Anéis</a></li>            
            <li><a href="http://127.0.0.1/biju/index.php#colares">Colares</a></li>
            <li> <a href="http://127.0.0.1/biju/index.php#pulseiras">Pulseiras</a></li>           
        </ul>
    </nav>

    
        <?php
            include("conecta.php");

            $email = strtolower($_POST['email']);
            $senha = md5($_POST['senha']);

            $querry_email = "SELECT email FROM usuario WHERE email='$email'";
            $seleciona_email = mysqli_query($conexao, $querry_email);
            $querry = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
            $seleciona = mysqli_query($conexao, $querry);

            if(mysqli_num_rows($seleciona_email) > 0){
                if(mysqli_num_rows($seleciona) > 0){ ?>
                    <div class="busca">
                <?php
                    $campo = mysqli_fetch_assoc($seleciona)?>
                        <img src="<?php echo "./img/profile/".$campo["img"]?> " class="perfil">
                        <br>
                        <h3>Nome:</h3>
                        <p><?=$campo["nome"]?></p>
                        <br>
                        <h3>Email:</h3>
                        <p><?=$campo["email"]?></p>
                        <br>
                        <hr>
                        <p>
                            <a href="editar.php?id=<?=$campo["id"]?>" class="link">Editar</a> 
                            <a href="deletar.php?id=<?=$campo["id"]?>" class="link">Deletar</a>
                        </p>
                    </div>
            <?php
                } else {?>
                    <div class="erro">
                        <h1>Senha Incorreta!</h1>
                        <a href="http://127.0.0.1/biju/buscar.php"><button class="button button1">Voltar</button></a>
                    </div>
                <?php
                }
            } else {?>
                <div class="erro">
                    <h1>Email não cadastrado!</h1>
                    <a href="http://127.0.0.1/biju/buscar.php"><button class="button button1">Voltar</button></a>
                </div>
            <?php
            }
            mysqli_close($conexao);
            ?>
    </div>
</body>
</html>