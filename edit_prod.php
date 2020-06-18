<?php

require_once('config/config.php');
//require ('menu.php');
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

    if(isset($_POST['cadastrar'])){           
        if (isset($_POST['nome']) && empty($_POST['nome']) == false){
          $nome = addslashes($_POST['nome']);
          $preco = addslashes($_POST['preco']);
          $tipo = addslashes($_POST['tipo']);

          //CASO SEJA REALIZADO O UPDATE DA IMAGEM DO PRODUTO, REFAZ A VERIFICAÇÃO
          if (!isset($_FILES['image']['name'])){  
                $uploadOK = 1;       
                $target = "uploads/".basename($_FILES['image']['name']);
                $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image"]["tmp_name"]);
            
                if($check !== false) {
                  $uploadOk = 1;
                  }else {
                  $uploadOk = 0;                
                  }

                if ($_FILES["image"]["size"] > 500000) {
                  $uploadOk = 0;          
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                  $uploadOk = 0;          
                }

                if ($uploadOk == 0){  
                  echo "
                  <META HTTP-EQUIV=REFRESH CONTENT='0; url=gerenciamento_prod.php'>
                  <script type=\"text/javascript\">
                  alert(\"Faça upload da imagem do produto!\"); </script>
                  ";

                
                 
                }else{
                    $img = $_FILES['image']['name'];          
                    $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', img = '$img', tipo = '$tipo'";      
                    $sql = $conn->query($sql); 

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
                      echo "
                        <META HTTP-EQUIV=REFRESH CONTENT='0; url=gerenciamento_prod.php'>
                        <script type=\"text/javascript\">
                        alert(\"Upload do produto Concluido!\"); </script>
                        ";
                    } else {
                      echo "
                        <META HTTP-EQUIV=REFRESH CONTENT='0; url=gerenciamento_prod.php'>
                        <script type=\"text/javascript\">
                        alert(\"Não foi possivel realizar o cadastro do produto!\"); </script>
                        ";
                    }
              }
        
      }else{
          //Insere os registros no BD
          $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', tipo = '$tipo'";      
          $sql = $conn->query($sql); // executa o insert
               echo "
              <META HTTP-EQUIV=REFRESH CONTENT='0; url=gerenciamento_prod.php'>
              <script type=\"text/javascript\">
              alert(\"Upload do produto Concluido!\"); </script>
              ";
          
        } 
      }
  }


    if (isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
     }

        //apresenta apenas os dados do "id" que foi selecionado para Editar
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $sql = $conn->query($sql);
    
    if ($sql->rowCount() > 0){// verifica que o registro existe (se a contagem de linhas for maior que zero)
        $dado = $sql->fetch(); // cria um array com os dado
    }else{
        header("Location: gerenciamento_prod.php"); // retorna para a pagina editar_user
    }

    // var_dump($dado);
    // die;



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
    <!-- configurações padrão do navegaor -->
    <meta name="viewport" content="whidth=device-width,initial-scale=1, shink-to-fit=no">
    <!--Faz a chamada do bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>

     <!------------------------INICIO DA TABELA DE CADASTRO----------------->
    <div class="container">
     <div id="cadastro" style="padding-top: 78px; position: center">
        <form method="POST" action="edit_prod.php" enctype="multipart/form-data" > 
          <h1>Cadastro de Produtos</h1> 
           
          <p> 
            <label for="nome">Nome do Produto</label>
            <input id="nome" name="nome" required="required" type="text" value="<?php echo $dado['nome']?>">
          </p>
           
          <p> 
            <label for="preco">Preco</label><br>
            <input id="preco" name="preco" required="required" type="text" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'})" value="<?php echo $dado['preco']?>">
          </p>

          <p> 
            <label for="image">Imagem do Produto</label>
            <input id="image" name="image" type="file"> 
          </p>
           
          <p> 
            <label for="tipo">Tipo</label><br>
            <select id="tipo" name="tipo" required="required" style=" background-color:none">
                <option value="maquiagem"> Maquiagem</option>
                <option value="Higiene Pessoal"> Higiene Pessoal</option>
                <option value="Perfumaria"> Perfumaria</option>
                <option value="Infantil"> Infantil</option>
            </select>
          </p>

           
          <p> 
            <input type="submit" value="Cadastrar" name="cadastrar"/> 
          </p>
                    <!-- <button type="button" class="btn btn-primary">Enviar</button> -->
                </form>                  
        </div>
    </div>

    <!------------------------FIM DA TABELA DE CADASTRO----------------->
    

    <!-- Faz a chamada do jquery -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Faz a chamada do bundle -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


</body>
</html>