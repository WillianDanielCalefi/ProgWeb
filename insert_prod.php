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
       //varivavel para verificar se é possivel seguir com o upload
        $uploadOK = 1;       
        // salvando diretorio para salvar as imagens
        $target = "uploads/".basename($_FILES['image']['name']);
        //para checar o tipo da imagem
        $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
        // salvando o tamanho da imagem
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        
          if($check !== false) {
            $uploadOk = 1;
            }else {
            $uploadOk = 0;
            
          }
        
        // checar o tamanho da imagem
        if ($_FILES["image"]["size"] > 500000) {
          $uploadOk = 0;
        }
        // checando se é uma imagem 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
          $uploadOk = 0;          
        }

        if ($uploadOk == 0){          
          echo "
          <META HTTP-EQUIV=REFRESH CONTENT='0; url=insert_prod.php'>
          <script type=\"text/javascript\">
           alert(\"Faça upload da imagem do produto!\"); </script>
          ";
        }else{    
              if (isset($_POST['nome']) && empty($_POST['nome']) == false){
                $nome = addslashes($_POST['nome']); // varivel nome
                $preco = addslashes($_POST['preco']);
                $img = $_FILES['image']['name'];
                $tipo = addslashes($_POST['tipo']);

                 

                
                //Insere os registros no BD
                $sql = "INSERT INTO produtos SET nome = '$nome', preco = '$preco', img = '$img', tipo = '$tipo'";      
                $sql = $conn->query($sql); // executa o insert

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
          
              // header("Location: gerenciamento.php"); //após a inserção, retorna a pagina
                }  
          }

  }



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
        <form method="POST" action="insert_prod.php" enctype="multipart/form-data" > 
          <h1>Cadastro de Produtos</h1> 
           
          <p> 
            <label for="nome">Nome do Produto</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="nome">
          </p>
           
          <p> 
            <label for="preco">Preco</label><br>
            <input id="preco" name="preco" required="required" type="text" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'})">
          </p>

          <p> 
            <label for="image">Imagem do Produto</label>
            <input id="image" name="image" required="required" type="file"> 
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