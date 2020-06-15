<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosméticos</title>
    <link rel="icon" type="image/jpg" href="../assets/img/icone.png"/>
    
    <!-- configurações padrão do navegaor -->
    <meta name="viewport" content="whidth=device-width,initial-scale=1, shink-to-fit=no">
    <!--Faz a chamada do bootstrap -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
      .gradiente{
        border-bottom: 3px solid;
        border-image-source: linear-gradient(45deg, rgb(67, 117, 230), rgb(194, 48, 230));
        border-image-slice: 1;
      }

      .transition-border{
        width: 100px;
        border-bottom: 3px solid;
        border-image-source: linear-gradient(45deg, rgb(67, 117, 230), rgb(194, 48, 230));
        border-image-slice: 1;
        transition: width 0.5s;
      }
      div.transition:hover .transition-border{
        transition: width 0.5s;
        width: 100%;
      }

      .desfoc{
        box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
      }

      .bloco_central{
        margin-left: auto;
        margin-right: auto;
      }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light gradiente" style="background-color: #212020; position: fixed; z-index: 16; width: 100%;">
      <div class="container">
          <a style="width: 80px; height: 60px;" href="home.php"><img style="width: 70%; margin-left: 7px;" src="../assets/img/icone.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="flex: inherit;">
            <ul class="navbar-nav">
              <li class="nav-item active">
              <a style="color: white;" class="nav-link" href="#home">Home<span class="sr-only">(Página atual)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catálogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="catalogo.php#maquiagem">Maquiagem</a>
                    <a class="dropdown-item" href="catalogo.php#higiene">Higiene Pessoal</a>
                    <a class="dropdown-item" href="catalogo.php">Perfumaria</a>
                    <a class="dropdown-item" href="catalogo.php">Infantil</a>
                </div>
                </li>
              <li class="nav-item">
              <a style="color: white;" class="nav-link" href="sobrenos.php">Sobre Nós</a>
              </li>
              <li class="nav-item">
              <a style="color: white;" class="nav-link" href="trab_conosco.php">Trabalhe Conosco</a>
              </li>
              
            </ul>
          </div>
      </div>
    </nav>


</head>
<body>
  
    <section style="padding-top: 80px;">

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Foto</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>
    </div>


        <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="margin-top: 20px;">
          <div class="container text-center">
            <small>Copyright &copy;Pelos mais πK</small>
          </div>
        </footer>
    </section>

      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          } 
        }
      </script>

    <!-- Faz a chamada do jquery -->
    <script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
    <!-- Faz a chamada do bundle -->
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>