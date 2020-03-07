
<?php 

    //Conexao
    include_once '../php_action/db_connect.php';
    //Header
    include_once '../includes/header.php';
    //Mensagem
    include_once '../includes/mensagem.php';


    ?>
   <main>
   <?php
   if(isset($_SESSION['nor'])){
        echo '<h1>Acesso Negado</h1>';
    }else{
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Clientes</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Idade:</th>
                        <th>Sexo:</th>
                        <th>Cidade:</th>
                        <th>Data:</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                        $sql = "SELECT * FROM  cadastro";
                        $resultado = mysqli_query($connect, $sql);
                        if(mysqli_num_rows($resultado) > 0){
                        //LOOP
                        while($dados = mysqli_fetch_array($resultado)) {

                    ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><?php echo $dados['sexo']; ?></td>
                        <td><?php echo $dados['cidade']; ?></td>
                        <td><?php echo $dados['id']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($dados['data']));?></td>
                        <td><a href="<?php echo "http://localhost:8080/CrudPhp/pages/visualizar.php?id={$dados['id']}"?>" class="btn-floating blue" alt="Profile" title="Profile"><i class="material-icons">zoom_in</i></a></td>
                        <td><a href="<?php echo "http://localhost:8080/CrudPhp/pages/editar.php?id={$dados['id']}"?>" class="btn-floating orange" alt="Edit" title="Edit"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"  alt="Delete" title="Delete"><i class="material-icons">delete</i></a><td>

                           <!-- Modal Structure -->
                             <div id="modal<?php echo $dados['id'];?>" class="modal bottom-sheet">

                                <div class="modal-content">
                                    <img src="http://localhost:8080/CrudPhp/img/hydra-logo.png" class="img-modal"/>
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir esse Cliente? </p>
                                </div>


                                <div class="modal-footer">

                                    <form action="../php_action/deletar.php" method="POST">
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
            <a href="adcionar.php" class="btn black">Adcionar Cliente</a>

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