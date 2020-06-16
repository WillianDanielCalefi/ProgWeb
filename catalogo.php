<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo dos Cosméticos</title>
    <link rel="icon" type="image/jpg" href="assets/img/icone.png"/>
    <!-- configurações padrão do navegaor -->
    <meta name="viewport" content="whidth=device-width,initial-scale=1, shink-to-fit=no">
    <!--Faz a chamada do bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <style>
      .gradiente{
        border-bottom: 3px solid;
        border-image-source: linear-gradient(45deg, rgb(67, 117, 230), rgb(194, 48, 230));
        border-image-slice: 1;
      

      .carousel-caption{
        -webkit-text-stroke-width: 0.8px;
        -webkit-text-stroke-color: #fff;
        font-size: 1.5em; color: #000;
      }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light gradiente" style="background-color: #212020; position: fixed; z-index: 16; width: 100%;">
        <div class="container">
            <a style="width: 80px; height: 60px;" href="home.php"><img style="width: 70%; margin-left: 7px;" src="assets/img/icone.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="flex: inherit;">
              <ul class="navbar-nav">
                <li class="nav-item active">
                <a style="color: white;" class="nav-link" href="home.php">Home<span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Catálogo
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#maquiagem">Maquiagem</a>
                      <a class="dropdown-item" href="#higiene">Higiene Pessoal</a>
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
      <section id="maquiagem" style="padding-top: 70px;">
      <img src="assets/img/rosto2.jpg" alt="" style="width: 100%; height: 100%;">
      <div class="col-xs-3 col-sm-5 col-md-5" style="margin-top: -320px">
        <div class="" style="text-align: -webkit-right;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/catalogopng/lapis.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Lapis Para Delinear os Olhos Color Trend 1,1g <br> R$9,99</strong>
                    </div>                  
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/catalogopng/caneta.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Caneta Chanfrada Delineadora Líquida Preta 1ml<br> R$27,99 </strong>
                    </div>     
                </div>
                
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/catalogopng/paleta.png" alt="" style="height: 300px;">
                  <div class="carousel-caption">
                    <strong>Paleta Minhas Cores 9g<br> R$59,90 </strong>
                  </div> 
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/catalogopng/base_liquida.png" alt="" style="height: 300px;">
                  <div class="carousel-caption">
                    <strong>Base Líquida Matte Efeito Segunda Pele 30 ml<br> R$44,99</strong>
                  </div>       
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/catalogopng/po_compacto.png" alt="" style="height: 300px;">
                  <div class="carousel-caption">
                    <strong>Pó Compacto Transformador FPS15 Renew<br> R$79,90 </strong>
                  </div>       
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/catalogopng/preparador_fixador.png" alt="" style="height: 300px;">
                  <div class="carousel-caption">
                    <strong>Magix Spray Mark. Preparador e Fixador de Maquiagem - 90 ml<br> R$19,99 </strong>
                  </div> 
                </div>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
          </div>
        </div>    
      </div>

    </section>
    <hr>
    <hr>
    <hr>
    <section id="higiene">
      <img src="assets/img/cats.jpg" alt="" style="width: 100%; height: 100%;">
      <div class="row">
        <div class="col-md-8 col-sm-8">

        </div>

        <div class="col-xs-3 col-sm-4 col-md-4" style="margin-top: -370px">
          <div class="" style="text-align: -webkit-right;">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="width: 100%;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="compras.php">
                      <img class="d-block w-100" src="assets/img/catalogopng/sabonetepng.png" alt="" style="height: 300px;">
                      <div class="carousel-caption">
                        <strong>Sabonete de Limpeza Extraforte com Ácido Salicílico<br> R$12,08</strong>
                      </div>  
                    </a>                
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/catalogopng/sabonete2png.png" alt="" style="height: 300px;">
                      <div class="carousel-caption">
                        <strong>Sabonete Cremoso Encanto Intensa<br> R$,99 </strong>
                      </div>     
                  </div>
                  
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/catalogopng/sabonetecremoso.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Sabonete Cremoso Encanto Intensa 3 x 80 g<br> R$ 9,99 </strong>
                    </div> 
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/catalogopng/cremehidratante.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Creme Hidratante Nutritivo Corporal Far Away 200ml<br> R$33,99</strong>
                    </div>       
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/catalogopng/oleocorporal.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Óleo Corporal Hidratante Maracujá e Menta Avon Care - 200ml<br> R$29,90 </strong>
                    </div>       
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/catalogopng/mascararemovedora.png" alt="" style="height: 300px;">
                    <div class="carousel-caption">
                      <strong>Máscara Facial Removedora de Cravos Clearskin 60g<br> R$9,99 </strong>
                    </div> 
                  </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
            </div>
          </div>    
        </div>
      </div>  

    </section>



    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>Copyright &copy;Pelos mais πK</small>
      </div>
    </footer>

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
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<!-- Faz a chamada do bundle -->
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>     


</body>
</html>