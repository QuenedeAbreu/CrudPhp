<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <title>Sistema de Cadastro de Clientes</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link type="text/css" rel="stylesheet" href="../style.css"/>

      <link id="favicon" rel="icon" href="https://pngimage.net/wp-content/uploads/2018/06/hydra-logo-png.png" type="image/png" sizes="16x16">



    </head>

    <body>

    <?php 
   //start de sessão
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  if(!isset($_SESSION['adm']) && !isset($_SESSION['nor'])){
    echo '<script>window.location.href = "http://localhost:8080/CrudPhp/login/login.php";</script>';

}


    include_once '../php_action/db_connect.php';
    include_once '../includes/pesquisa_usuario.php';





  ?>


<div class="navbar-fixed">
  
<nav class="black">
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large "><i class="material-icons menu-respon">menu</i></a>
  <div class="nav-wrapper">
  <div class="col">
    <a href="#!" class="brand-logo"><img src="http://localhost:8080/CrudPhp/img/hydra-logo.png"></a>
  </div>




    <div class="inco-top-menu">
    <ul class="right hide-on-med-and-down">

      <li><i class="material-icons">person</i> </li>
      <li><a href="<?php echo "http://localhost:8080/CrudPhp/pages/visualizar_usuario.php?id={$ids}"?>" class="nav-top-hover"><?php echo $dados['nome']; ?></a></li>
      
      <li><i class="material-icons">exit_to_app</i> </li>
      <li><a href="http://localhost:8080/CrudPhp/login/sair.php" class="nav-top-hover">Sair</a></li>
    
    </ul>
    </div>

  </div>


</nav>

</div>
<!--
<ul id="slide-out" class="sidenav">
<a href="#!" class="brand-logo"><img src="./img/hydra-logo.png" class="img-menu"></a>
      <li><a href="./index.php">Home</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="adcionar.php">Adcionar Clientes</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Perfil<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!"><i class="material-icons">person</i>Visualizar Perfil</a></li>
                <li><a href="#!"><i class="material-icons">edit</i>Editar Perfil</a></li>
                <li><a href="#!"><i class="material-icons">exit_to_app</i>Sair</a></li>
                
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
    -->

    <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="http://localhost:8080/CrudPhp/img/bg-menu.jpg">
      </div>
      
      <a href="#user"> <?php 
        if($dados['foto'] == null){ ?>
            <img src="../perfil_adms/hydra-logo.png" class="foto-perfil"/>
        <?php }else{ ?>
            <img src="../perfil_adms/<?php echo $dados['foto'];?>" class="foto-perfil"/>
        <?php 
        }
      ?></a>

      <a href="#name"><span class="white-text name"><?php echo $dados['nome']; ?></span></a>
      <a href="#email"><span class="white-text email"><?php echo $dados['email']; ?></span></a>
    </div></li>

    <li><a href="#!" class=""><i class="material-icons">navigation</i>Navegação</a></li>
      <li><div class="divider"></div></li>

      <li><a href="http://localhost:8080/CrudPhp/index.php"><i class="material-icons">home</i>Home</a></li>
      <li><a href="http://localhost:8080/CrudPhp/pages/clientes.php"><i class="material-icons">people</i>Clientes</a></li>
      <li><a href="http://localhost:8080/CrudPhp/pages/admins.php"><i class="material-icons">people</i>Admins</a></li>
      <li><a href="http://localhost:8080/CrudPhp/pages/adcionar_adm.php"><i class="material-icons">person_add</i>Adcionar Admins</a></li>
      <li><a href="http://localhost:8080/CrudPhp/pages/adcionar.php"><i class="material-icons">person_add</i>Adcionar Clientes</a></li>
    <li><div class="divider"></div></li>
    
    <!-- drop_down 2 -->
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Perfil<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo "http://localhost:8080/CrudPhp/pages/visualizar_usuario.php?id={$ids}"?>"><i class="material-icons">person</i>Visualizar Perfil</a></li>
                <li><a href="#!"><i class="material-icons">edit</i>Editar Perfil</a></li>
                <li><a href="http://localhost:8080/CrudPhp/login/sair.php"><i class="material-icons">exit_to_app</i>Sair</a></li>
                
              </ul>
            </div>
          </li>
        </ul>
      </li>





  </ul>


