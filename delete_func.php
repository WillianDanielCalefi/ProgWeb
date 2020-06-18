<?php  
    require_once('config/config.php');
    session_start();
    
    if($_SESSION['nivel'] > 1){
        session_destroy();        
         echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; url=index.php'>
                <script type=\"text/javascript\">
                    alert(\"Voce não tem permissão para estar aqui!\"); </script>
            ";
        
    }

    if (!isset($_SESSION['id'])){
        session_destroy(); 
         echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; url=index.php'>
                <script type=\"text/javascript\">
                    alert(\"Voce não tem permissão para estar aqui!\"); </script>
            ";
    }
    

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']); //recebe o valor da variavel

    
        $sql = "DELETE FROM usuarios WHERE id = '$id' ";    
        $sql = $conn->query($sql);

        //se executar a query, redireciona para user.php
        header("Location: ger_func.php");
    } else{
        //em caso de falha no delete, retorna para o user.php
        header("Location: ger_func.php");
         }    

?>
    

 