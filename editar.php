<?php 

    //Conexao
    include_once 'php_action/db_connect.php';
    //Header
    include_once 'includes/header.php';
 
    ?>
<main>
        <?php
            if (isset($_GET['id'])){
             $id = mysqli_escape_string($connect, $_GET['id']);
                     
             $sql = "SELECT * FROM  cadastro WHERE id = '$id'";
             $resultado = mysqli_query($connect, $sql);
             $dados = mysqli_fetch_array($resultado);
            }
                       
              ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Editar Cliente</h3>
           <form action="php_action/update.php" method="POST">
           <input type="hidden" name="id" value="<?php echo $dados ['id'] ?>">
                <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $dados ['nome'] ?>">
                    <label for="nome">Nome</label>
                </div>

             <div class="input-field col s12">
                <i class="material-icons prefix">insert_emoticon</i>
                    <input type="number" name="idade" id="idade"  value="<?php echo $dados ['idade'] ?>">
                    <label for="idade">Idade</label>
             </div>

            <div class = "input-field col s12">
                <i class="material-icons prefix">thumbs_up_down</i>
                 <select id="sexo" name="sexo">
                  <option  value="<?php echo $dados ['sexo'] ?>" disabled selected><?php echo $dados ['sexo'] ?></option>
                  <option value = "Masculino">Masculino</option>
                  <option value = "Feminino">Feminino</option>
                  
               </select>   
               <label for="sexo">Sexo</label>           
            </div>     

            <div class="input-field col s12">
                     <i class="material-icons prefix">location_city</i>
                    <input type="text" name="cidade" id="cidade"  value="<?php echo $dados ['cidade'] ?>">
                    <label for="cidade">Cidade</label>
                </div>

                <div class="input-field col s12">
                     <i class="material-icons prefix">date_range</i>
                    <input type="date" name="data" id="data"  value="<?php echo $dados ['data'] ?>">
                    <label for="data">Data</label>
                </div>
                
                <button type="submit" name="btn-atualizar" class="btn">Atualizar</button>
                <a class="btn green" href="index.php">Clientes</a>
           </form>
        </div>

    
    </div>



    
   </main>
    <!-- footer -->
    <?php
    include_once 'includes/footer.php';
?>