<?php 
           
           
         if (isset($_SESSION['adm'])){
            $ids = $_SESSION['adm'];
        } else if(isset($_SESSION['nor'])){
            $ids = $_SESSION['nor'];
        }else{
    
        }      
        
               
        $sql = "SELECT * FROM  usuario WHERE id = '$ids'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);

?>