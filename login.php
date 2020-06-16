<?php
    require 'config\config.php';
    session_start();


if (isset($_POST['login']) && empty($_POST['login']) == false){
    if(isset($_POST['senha']) && empty($_POST['senha']) == false){
        $login = addslashes($_POST['login']);
        $senha = md5(addslashes($_POST['senha']));

        //verifica se o email e senha contem no banco de dados
        $sql = $conn->query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");

        if($sql->rowCount() > 0){
            $dado = $sql->fetch(); // cria um array com os valores do usuario
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];
            $_SESSION['email'] = $dado['email'];
            $_SESSION['nivel'] = $dado['nivel'];
            $_SESSION['login'] = $dado['login'];
            $_SESSION['senha'] = $dado['senha'];
            
            header("Location: index.php"); 

        }else{
                // mensagem em javascriot com erro de login
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0; url=index.php'>
                <script type=\"text/javascript\">
                    alert(\"Erro: Usuário ou senha inválidos!\");
                </script>
            ";
                
        }

    }


}

if (isset($_POST['email_cad']) && empty($_POST['email_cad']) == false){
    if (isset($_POST['senha_cad']) && empty($_POST['senha_cad']) == false){
        if (isset($_POST['login_cad']) && empty($_POST['login_cad']) == false){
            //pega os valores digitados nos campos do formulario e insere nas variaveis
            $nome = addslashes($_POST['nome_cad']); // varivel nome
            $email = addslashes($_POST['email_cad']); // variavel email
            $login = addslashes($_POST['login_cad']); // varivel login
            $senha = md5(addslashes($_POST['senha_cad'])); // variavel senha com criptografia md5
            $nivel = 3;

            //Insere os registros no BD
            $sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', nivel = '$nivel', login = '$login', senha = '$senha' ";

            $sql = $conn->query($sql); // executa o insert
            header("Location: index.php"); //após a inserção, retorna a pagina
        }
    }
}





?>
<head>
  <meta charset="UTF-8" />
  <title>Login De Usuario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Login</label>
            <input id="nome_login" name="login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Senha</label>
            <input id="email_login" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu Nome Completo</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>

          <p> 
            <label for="login_cad">Seu Login</label>
            <input id="login_cad" name="login_cad" required="required" type="text" placeholder="Usuario"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>

           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
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