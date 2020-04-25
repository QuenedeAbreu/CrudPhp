<?php
//Sessao
session_start();

//conexao
require_once 'db_connect.php';


if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    //variavel de upload de foto de perfil
    $foto_perfil = mysqli_escape_string($connect, $_FILES['foto_perfil']['name']);

    if(isset($_POST['tipo_usuario'])) {
        $tipo_usuario = mysqli_escape_string($connect, $_POST['tipo_usuario']);
    }else{
        $tipo_usuario = '0';
    }

    
    $sql="INSERT INTO usuario (nome,sobrenome,email,senha,foto,tipo_usuario,status) VALUE('$nome','$sobrenome','$email','$senha','$foto_perfil','$tipo_usuario','1')";
    
    //Movendo imagem para pasta
    $pasta = '../perfil_adms';
    move_uploaded_file($_FILES['foto_perfil']['tmp_name'],$pasta.'/'.$foto_perfil);
    
    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../pages/admins.php?');

    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../pages/admins.php?');
    }
}

?>