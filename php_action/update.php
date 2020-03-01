<?php
    //Sessao
    session_start();

    //conexao
    require_once 'db_connect.php';


    if(isset($_POST['btn-atualizar'])){
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $sexo = mysqli_escape_string($connect, $_POST['sexo']);
        $cidade = mysqli_escape_string($connect, $_POST['cidade']);
        $data = mysqli_escape_string($connect, $_POST['data']);
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql="UPDATE cadastro SET nome = '$nome', idade = '$idade',sexo = '$sexo',cidade = '$cidade',data = '$data' WHERE id = '$id'";

         if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php?');

        }else{
            $_SESSION['mensagem'] = "Erro ao Atualizar!";
            header('Location: ../index.php?');
        }
    }

?>