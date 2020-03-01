<?php
    //Sessao
    session_start();

    //conexao
    require_once 'db_connect.php';


    if(isset($_POST['btn-cadastrar'])){
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $sexo = mysqli_escape_string($connect, $_POST['sexo']);
        $cidade = mysqli_escape_string($connect, $_POST['cidade']);
        $data = mysqli_escape_string($connect, $_POST['data']);

        $sql="INSERT INTO cadastro (nome,idade,sexo,cidade,data) VALUE('$nome','$idade','$sexo','$cidade','$data')";

        if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../clientes.php?');

        }else{
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../clientes.php?');
        }
    }

?>