
<?php 

    //Conexao
    include_once '../php_action/db_connect.php';
  

   
    ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Login Hydra</title>


       <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   

      <link type="text/css" rel="stylesheet" href="../style.css"/>
      
      <link id="favicon" rel="icon" href="https://pngimage.net/wp-content/uploads/2018/06/hydra-logo-png.png" type="image/png" sizes="16x16">
      <script src="https://kit.fontawesome.com/bd5c7f1c47.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
     <script type="text/javascript" src="../js/JavaEscript.js"></script>
     <script>
      	 M.AutoInit();
     </script>
     

   </head>
   <body>
       

          

   <div class="form-login">
       <img src="../img/hydra-logo.png"/>
        <form action="logar.php" method="POST">
            <h1>Login</h1>
             <div class="col s12 ">
                <div class="input-field col ">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="login" id="login">
                    <label for="login">Email</label>
                </div>
            </div>

            <div class="col s12 ">
                <div class="input-field col ">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="senha" id="senha">
                    <label for="senha">Senha</label>
                </div>
            </div>
            <button type="submit" name="btn-login" class="btn black btn-login">Login</button>
         </form>
      </div>







   </body>
   </html>





