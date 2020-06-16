<?php  
    require_once('config/config.php');
    
    session_start();

    //  var_dump($_SESSION['nivel']);
    //  die;

    if($_SESSION['nivel'] > 2){
        session_destroy();
        header('Location: Index.php');

    }

    if (!isset($_SESSION['id'])){
        session_destroy(); 
        header('Location: Index.php');
    } 

  // var_dump($_SESSION);
  // die;


?>