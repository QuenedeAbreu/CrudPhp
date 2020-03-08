<!-- footer -->
<?php

//Conexao
include_once '../php_action/db_connect.php';
//Header
include_once '../includes/header.php';
//Mensagem
include_once '../includes/mensagem.php';


?>


<main>

    <div class="row ">
        <div class="col s12 m6 push-m3 ">


            <h1>Bem Vindo a Hydra
                <br><br/> <?php echo $dados['nome']; ?> </h1>


        </div>
    </div>




</main>
<!-- footer -->
<?php
include_once '../includes/footer.php';
?>