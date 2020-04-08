
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
            <h3 class="light">Novo Administrador</h3>
            <form action="<?php echo 'http://localhost:8080/CrudPhp/php_action/create_adm.php'; ?>" method="POST" enctype="multipart/form-data">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">insert_emoticon</i>
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">thumbs_up_down</i>
                    <input type="text" name="email" id="email">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">location_city</i>
                    <input type="text" name="senha" id="senha">
                    <label for="senha">Senha</label>
                </div>

                <div class="input-field col s12">
                    <div class="file-field input-field">
                        <div class="btn black">
                            <span><i class="material-icons">mms</i></span>
                            <input type="file" name="foto_perfil">

                        </div>
                        <div class="file-path-wrapper">

                            <input class="file-path validate" type="text" name="perfil" placeholder="Foto de perfil">

                        </div>
                    </div>
                </div>

                <div class="input-field col s12 ck">
                <p>
                    <label >
                        <input type="checkbox" name = "tipo_usuario" value="1" class="filled-in" id="admin" />
                        <span for="admin">Usuario Admin</span>
                    </label>
                </p>

                </div>

                
                <div class="input-field col s12">

                <button type="submit" name="btn-cadastrar" class="btn black ">Cadastrar</button>
                <a class="btn black" href="http://localhost:8080/CrudPhp/pages/adm.php">Admins</a>
                </div>

            </form>
        </div>


    </div>
    <?php }?>
</main>

<!-- footer -->
<?php

include_once '../includes/footer.php';
?>