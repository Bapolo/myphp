<?php
    require_once "banco.php";
    function email_ja_existe($conexao, $email)
    {
        $sql = "SELECT email FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0):
            return true;
        else:
            return false; 
        endif;
     }

     function erro($mensagem)
     {
        $_SESSION['erros'][] = $mensagem;
     }

     function redirecionar($pagina)
     {
        header("Location: {$pagina}");
        exit();
     }