<?php

    session_start();
    require "banco.php";
    require_once "ajudante.php";

    if (isset($_POST['btn-submit']))
    {        
        $nome = mysqli_escape_string($conexao, $_POST['nome']);
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);

        if (!empty($nome) && !empty($email) && !empty($senha)):
            $senha = md5($senha);

            if (!email_ja_existe($conexao, $email)):
                registrar_usuario($conexao, $nome, $email, $senha);
            else:
                erro("Não foi possivel cadastrar, este email já foi usado anteriomente!"); 
                redirecionar("criar-conta.php");   
            endif;              
        else:
            erro("Preencha todos os campos!");
            redirecionar("criar-conta.php");
        endif;
    }