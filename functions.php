<?php 
    require_once('config/config.php');
    // require ('menu.php');
    session_start();

    if($_SESSION['nivel'] > 2){
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

    if($_GET){
        $id = $_GET['id'];
        $sql = "DELETE FROM produtos WHERE id = $id";
        $sql = $conn->query($sql);

        if($sql){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; url=gerenciamento_prod.php'>
                <script type=\"text/javascript\">
                    alert(\"Produto Excluido com Sucesso!\"); </script>
            ";
        }
    }

    if($_POST){
        $email = $_POST;
        // $sql = "INSERT INTO novidades SET email = '$email'";
        // $sql = $conn->query($sql); //
        print_r(json_encode($email));
        // if($sql){
        //     echo json_encode(array($_POST));
        // }
    }
?>