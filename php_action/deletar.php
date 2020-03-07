<?php
    //Sessao
    session_start();

    //conexao
    require_once 'db_connect.php';


    if(isset($_POST['btn-deletar'])){

        $id = mysqli_escape_string($connect, $_POST['id']);
        $sql="DELETE FROM cadastro WHERE id = '$id'";


         if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Cliente excluido com sucesso!";
            header('Location: ../pages/clientes.php?');

        }else{
            $_SESSION['mensagem'] = $id ."Erro ao excluir esse cliente!";

            header('Location: ../pages/clientes.php?');
        }
    }

?>