<?php
    require_once "registro.php";

    if (isset($_SESSION['erros'])):
        $erros = $_SESSION['erros'];
        unset($_SESSION['erros']);
    endif;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/criar_conta.css">  
    <title>Criar Conta</title>
</head>
<body>
    <div class="container">
        <h1  >Criar conta</h1>

        <!--script para mostrar os erros -->
        <?php 
            if (!empty($erros)):
                foreach($erros as $erro):
                    echo "<p style='color: red; margin-bottom: 0px; margin-top: 8px; '>$erro</p>";
                endforeach;
            endif;
        ?>

        <form action="./registro.php" method="POST" id="formulario_criar_conta">
            <label>
                Nome completo:
                <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
            </label>

            <label>
                Email:
                <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required>
            </label>

            <label>
                Senha:
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </label>

            <button type="submit" name="btn-submit">Criar conta</button>
        </form>

        <a href="login.php" id="link">Iniciar sessão!</a>
    </div>
</body>
</html>