
<?php 
    include_once '../includes/header.php';


if (isset($_SESSION['nor'])) {
        include_once '../pages/acesso_negado.php';

    ?>

        <?php
        }else {
        ?>
<main>
        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="light">Novo Cliente</h3>
                <form action="<?php echo 'http://localhost:8080/CrudPhp/php_action/create.php'; ?>" method="POST">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome" id="nome">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">insert_emoticon</i>
                        <input type="number" name="idade" id="idade">
                        <label for="idade">Idade</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">thumbs_up_down</i>
                        <select id="sexo" name="sexo" >
                            <option value="" disabled selected>Selecione o Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>

                        </select>
                        <label for="sexo">Sexo</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">location_city</i>
                        <input type="text" name="cidade" id="cidade">
                        <label for="cidade">Cidade</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">date_range</i>
                        <input type="date" name="data" id="data">
                        <label for="data">Data</label>
                    </div>

                    <button type="submit" name="btn-cadastrar" class="btn black">Cadastrar</button>
                    <a class="btn black" href="http://localhost:8080/CrudPhp/pages/clientes.php">Clientes</a>
                </form>
            </div>


        </div>
    <?php }?>
    </main>

    <!-- footer -->
    <?php

    include_once '../includes/footer.php';
?>