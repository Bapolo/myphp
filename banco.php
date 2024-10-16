<?php
    require_once "ajudante.php";

    $nome_do_servidor = 'localhost';
    $nome_do_usuario = 'viris';
    $senha = '12345';
    $nome_do_banco_de_dados = 'store';

    $conexao = mysqli_connect($nome_do_servidor, $nome_do_usuario, $senha, $nome_do_banco_de_dados);

    if (!$conexao):
        erro("Erro ao conectar ao banco de dados");
    endif;

    function registrar_usuario($conexao, $nome, $email, $senha)
    {           
        $sql = "INSERT INTO usuario
        (nome, email, senha)
        VALUES
        ('{$nome}',
        '{$email}',
        '{$senha}')";

        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado):
            erro("Erro ao cadastrar usuario");
            redirecionar("criar-conta.php");
        else:
            echo "Usuario cadastrado com sucesso!";
        endif; 
    }
