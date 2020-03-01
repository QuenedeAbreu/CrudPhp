
<?php 

    //Conexao
    include_once 'php_action/db_connect.php';
    //Header
    include_once 'includes/header.php';
    //Mensagem
    include_once 'includes/mensagem.php';
    ?>

        <?php
            if (isset($_GET['id'])){
             $id = mysqli_escape_string($connect, $_GET['id']);
                     
             $sql = "SELECT * FROM  cadastro WHERE id = '$id'";
             $resultado = mysqli_query($connect, $sql);
             $dados = mysqli_fetch_array($resultado);
                 }
                       
              ?>

<main>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Perfil de: <?php echo $dados['nome']; ?></h3>
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
              
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><?php echo $dados['sexo']; ?></td>
                        <td><?php echo $dados['cidade']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($dados['data']));?></td>
                        
                    </tr>
                      
                </tbody>            
            </table>
            <br/>
            <a href="clientes.php" class="btn black">Clientes</a>
        </div>

    
    </div>
 </main>
    <!-- footer -->
    <?php
    include_once 'includes/footer.php';
?>