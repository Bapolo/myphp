<?php
    session_start();

    require_once "ajudante.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>Página em construção @Viris</h1>

    <?php
        if (isset($_SESSION['logado'])):
            echo "Seja bem vindo <b>".$_SESSION['dados_do_usuario']['nome']."</b>";

            echo "<br> <a href='./logout.php'>Sair</a>"; 
        else:
            redirecionar('login.php');
        endif;    
    ?>
</body>
</html>