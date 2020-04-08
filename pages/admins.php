<?php
//Conexao
include_once '../php_action/db_connect.php';
//Header
include_once '../includes/header.php';
//Mensagem
include_once '../includes/mensagem.php';
if (isset($_SESSION['nor'])) {
    include_once '../pages/acesso_negado.php';

    ?>

    <?php
}else {
    ?>
    
    <main>

        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light">Admins da Plataforma</h3>
                <table class="striped">
                    <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Sobrenome:</th>
                        <th>E-mail:</th>
                        <th>Tipo de Usuário:</th>
                        <th>Perfil:</th>
                    </tr>
                    </thead>


                    <tbody>
                    <?php
                    $sql = "SELECT * FROM  usuario ORDER BY 2";
                    $resultado = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado) > 0){
                        //LOOP
                        while($dados = mysqli_fetch_array($resultado)) {

                            ?>
                            <tr>
                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['sobrenome']; ?></td>
                                <td><?php echo $dados['email']; ?></td>
                                <td><?php
                                    if($dados['tipo_usuario'] == '1'){
                                        echo 'Administrador';
                                    }else{
                                        echo 'Professor';
                                    }

                                    ?></td>
                                
                                <?php 
                               
                                    if($dados['foto'] == null){ ?>
                                        <td> <img src="../img/hydra-logo.png" class="foto"/></td>
                                    <?php }else{ ?>
                                       <td> <img src="../img/<?php echo $dados['foto'];?>" class="foto"/></td>
                                    <?php }
                                ?>
                                

                                <td><a href="<?php echo "http://localhost:8080/CrudPhp/pages/visualizar.php?id={$dados['id']}"?>" class="btn-floating blue" alt="Profile" title="Profile"><i class="material-icons">zoom_in</i></a></td>
                                <?php
                                if(isset($_SESSION['nor'])){
                                    ?>
                                    <style type="text/css">
                                        .display-none{
                                            display: none;
                                    </style>

                                    <?php
                                }else{
                                ?>
                                <td><a href="<?php echo "http://localhost:8080/CrudPhp/pages/editar.php?id={$dados['id']}"?>" class="btn-floating orange display-none" alt="Edit" title="Edit"><i class="material-icons">edit</i></a></td>
                                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger display-none"  alt="Delete" title="Delete"><i class="material-icons">delete</i></a><td>
                                    <?php
                                    }?>

                                    <!-- Modal Structure -->
                                    <div id="modal<?php echo $dados['id'];?>" class="modal bottom-sheet">

                                        <div class="modal-content">
                                            <img src="http://localhost:8080/CrudPhp/img/hydra-logo.png" class="img-modal"/>
                                            <h4>Opa!</h4>
                                            <p>Tem certeza que deseja excluir esse Cliente? </p>
                                        </div>


                                        <div class="modal-footer">

                                            <form action="../php_action/deletar_adm.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                                                <button type="submit" name="btn-deletar" class="btn red">Sim quero deletar!</button>
                                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                            </form>
                                        </div>
                                    </div>

                            </tr>
                            <?php
                        }
                    }else{ ?>
                        <tr>
                            <td colspan="5"  class="td" ><h5>Na há ninguem cadastrado!</h5><td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <br/>
                <a href="adcionar_adm.php" class="btn black  display-none">Adicionar Admins</a>

            </div>


        </div>
        <?php
}
        ?>
    </main>

    <!-- footer -->
<?php

include_once '../includes/footer.php';
?>