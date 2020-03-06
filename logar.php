<?php 
    //conexao
    include_once 'php_action/db_connect.php';



     //start de sessão
     if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    
    
 

  

   if(isset($_POST['login']) && isset($_POST['senha'])){
    $login = mysqli_escape_string($connect,$_POST['login']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    
    $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
    $pesquisa = mysqli_query($connect,$sql);

    $cont = mysqli_num_rows($pesquisa);
   
    if($cont == 1){
            while ($percorer = mysqli_fetch_array($pesquisa)) {
                $adm = $percorer['tipo'];
                $id = $percorer['id'];
                
                    if($adm == 1){
                        $_SESSION['adm'] = $id;
                        
                    }else{
                        $_SESSION['nor'] = $id;
                    }

                    echo '<script type="text/javascript">window.location.href = "index.php";</script>';
            }
    }else{
        echo 'O email ou senha digitados estão errados!';
    }


    
           


   }



?>