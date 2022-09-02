<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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

    <div class="form">
        <form action="enviar.php" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input id="nome" type="text" name="nome" placeholder="Digite seu nome" maxlength="60" required>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" placeholder="Digite seu email" maxlength="100" required><br>
            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha" placeholder="Digite sua senha" maxlength="30" minlength="5" required><br><br>
            <label for="img">Foto de Perfil:</label>
            <input id="img" type="file" name="img" accept="image/*">
            <button type="submit" class="button button1">Enviar</button>
        </form>
    </div>
</body>
</html>