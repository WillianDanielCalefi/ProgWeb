<?php

require_once('config/config.php');
require ('menu.php');
//session_start();

    
    if($_SESSION['nivel'] == 3){
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


    if (isset($_POST['email_cad']) && empty($_POST['email_cad']) == false){
        if (isset($_POST['senha_cad']) && empty($_POST['senha_cad']) == false){
            if (isset($_POST['login_cad']) && empty($_POST['login_cad']) == false){
                //pega os valores digitados nos campos do formulario e insere nas variaveis
                $nome = addslashes($_POST['nome_cad']); // varivel nome
                $email = addslashes($_POST['email_cad']); // variavel email
                $login = addslashes($_POST['login_cad']); // varivel login
                $senha = md5(addslashes($_POST['senha_cad'])); // variavel senha com criptografia md5
                $nivel = addslashes($_POST['nivel']);              
    
                //Insere os registros no BD
                $sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', nivel = '$nivel', login = '$login', senha = '$senha' ";
                $sql = $conn->query($sql); // executa o insert
    
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT='0; url=ger_func.php'>
                    <script type=\"text/javascript\">
                        alert(\"Cadastro Realizado com Sucesso!\"); </script>
                ";
    
            }
        }
    }

?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
</head>
<body>
  <div class="container" style="padding-top: 78px">
    <a class="links" id="paracadastro"></a>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          <h1>Cadastro de Funcionarios</h1> 
           
          <p> 
            <label for="nome_cad">Nome Completo</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">E-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>

          <p> 
            <label for="login_cad">Login</label>
            <input id="login_cad" name="login_cad" required="required" type="text" placeholder="Usuario"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
          
          <?php 

          if ($_SESSION['nivel'] == 1){         
          
          ?>
          <p> 
            <label for="nivel">Cargo</label><br>
            <select id="nivel" name="nivel" required="required" style=" background-color:none">
                <option value="1"> Administrador</option>
                <option value="2"> Gerente</option>
                <option value="3"> Cliente</option>
            </select>
          </p>

          <?php
          }else{
            ?>
            <p> 
            <label for="nivel">Cargo</label><br>
            <select id="nivel" name="nivel" required="required" style=" background-color:none">
                <option value="2"> Gerente</option>
                <option value="3"> Cliente</option>
            </select>
          </p>

          <?php
          }
          ?>


           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>


    <!-- Faz a chamada do jquery -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Faz a chamada do bundle -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>     


</body>
</html>