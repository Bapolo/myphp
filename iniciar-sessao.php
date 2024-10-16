<?php
    session_start();
    require_once "banco.php";
    require_once "ajudante.php";

    if (isset($_POST['btn-login'])):
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (!empty($email) && !empty($senha)):
            $sql = "SELECT email FROM usuario WHERE email = '$email'";

            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

                $resultado = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultado) == 1):
                    $_SESSION['logado'] = true;
                    $_SESSION['dados_do_usuario']= mysqli_fetch_array($resultado);
                    header('Location: home.php');
                else:
                    erro("O email e a senha não correspondem!");
                    redirecionar("login.php");
                endif;
            else:
                erro("Usuario não encontrado, verifique os seus dados ou crie uma conta!");
                redirecionar("login.php");
            endif;
        else:
            erro("Preencha todos os campos!");
            redirecionar("login.php");
        endif;
    endif;