<?php
//Sessao
session_start();

//conexao
require_once 'db_connect.php';


if(isset($_POST['btn-cadastrar'])){
    if(isset($_POST['tipo_usuario'])){

    $tipo_checkbos = mysqli_escape_string($connect,$_POST['tipo_usuario']);
    echo $tipo_checkbos;
    echo " E admin";

    }else{
        $tipo_checkbos = 0;
        echo $tipo_checkbos;
        echo " Não é admin";
    }
}

?>
