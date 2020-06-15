<html lang="en">
    
<?php 
  require_once('menu.php');
?>

    <body>
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 70px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/banner1.jpg" alt="" style="max-height: 400px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/perfume.jpg" alt="" style="max-height: 400px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/maquiagens.jpg" alt="" style="max-height: 400px;">
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
        </div> -->
        <section style="padding-top: 70px;">
            <div class="container-fluid" style="margin-bottom: 30px; background-image: linear-gradient(to right, rgb(67, 117, 230), rgb(194, 48, 230));">
              <div class="container">
                <div class="row" style="padding: 15px;">
                  <div class="col-md-3" style="padding: 5px;">
                    <strong style="margin-right: 20px;">Fique por dentro das novidades e promoções</strong>
                  </div>
                  <div class="col-md-5" style="padding: 5px;">
                    <input class="form-control form-control-lg" type="text" placeholder="E-mail" style="color: #212529; border-color: rgba(76, 24, 85, 1); background-color: #ff000000; margin-right: 20px;">
                  </div>
                  <div class="col-md-4" style="padding: 5px;">
                    <button type="submit" class="btn" style="padding: 11px; border-color: rgba(76, 24, 85, 1);">Cadastre-se</button>
                  </div>
                </div>
              </div>
            </div>  
            <!----------------------------------------Compras------------------------------------------------->
            <div class="margem_tudo">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="catalogo.php">Higiene Pessoal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sabonete</li>
                        </ol>
                    </nav>
                    <!--Imagen e nome dos produtos-->
                    <div class="row">
                        <div class="col">
                            <ul class="thumbnails">
                                <a onclick="show1()" class="thumbmail">
                                    <img src="assets/img/sabonete.jpg" alt="" width="96" height="65" class="img-thumbnail">
                                </a>
                                <a onclick="show2()" class="thumbmail">
                                    <img src="assets/img/sabonetecopia.jpg" alt="" width="96" height="65" class="img-thumbnail">
                                </a>
                            </ul>
                        </div>
                        <div class="col">
                            <img  src="assets/img/sabonete.jpg" alt="" style="max-height: 400px;" id="imagep1" >
                            
                        </div>         
                        <div class="col-md-6 col-sm-6">
                            <h1 class="tamanho_nome_produto">Sabonete de Limpeza Extraforte com Ácido Salicílico</h1>
                            &nbsp &nbsp
                            <!------------Caixa onde esta os preçpos e o bota de compra eo heart------------------->
                            <div class="caixa_preco">
                                <div class="row">
                                    <div class="col col-lg-2">
                                        <button onclick="location.href='#'" type="button" class="btn btn-danger btn-circle btn-lg" aria-label="Left Align">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="preco_detalhes">
                                            <p><b>R$ 12,08</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="parcela_detalhes" style="text-align: center;">
                                            <p><b>2 x R$ 6,04</b></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <button onclick="location.href='#'" type="button" class="btn btn-primary btn-lg btn-block" style="text-transform: uppercase;">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <!------------------As informaçoes do produto-------------------------->
                    <div class="margem_info">
                        <header class="titulo_info"></header>
                            <h5 class="titulo_detalhes">Detalhes</h5>
                        <div class="linha_info"></div>
                        <div style="padding: 15px 0;">
                            <p>O <strong>Sabonete de Limpeza Extraforte com Ácido Salicílico</strong>vem com dois sabonetes em barra com extratos naturais de rosa e algodão!</p>
                            <p>Ao entrar em contato com a pele úmida, cada sabonete em barra produz uma espuma cremosa que limpa sem ressecar 
                                a pele. Com a deliciosa fragrância da combinação de rosa e algodão, os sabonetes perfumam a pele na medida 
                                certa, envolvendo o corpo delicadamente com uma fragrância suave e deliciosa.
                            </p><strong>Contém:</strong> 2 sabonetes de 45g cada</p>
                        </div>
                        <div class="linha_info"></div>
                        <div class="row">
                            <div class="col">
                                <header class="titulo_info"></header>
                                     <h5 class="titulo_detalhes">Especificações</h5>
                            </div>
                            <div class="col">
                                <div class="plus_info">
                                    <button type="button" class="btn btn-danger btn-circle btn-lg" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row">
                                <div class="col">
                                    <div style="text-align: right;">
                                        <p><strong>Público</strong></p>
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>Feminino</li>
                                        <li>Masculino</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div style="text-align: right;">
                                        <p><strong>Informações importantes</strong></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>Somente para uso externo</li>
                                        <li>Manter o produto ao abrigo da luz e calor</li>
                                        <li>Descontinuar o uso em caso de sensibilização</li>
                                        <li>Manter fora do alcance de crianças</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="linha_info"></div>
                    </div>
                    <!------------------------Outros produtos---------------------------->
                    <h5 style="text-align: center; font-size: 30px;">Compre junto</h5>
                    <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top mx-auto" src="assets/img/sabonete.jpg" alt="Sabonete" style="max-height: 260px; max-width: 260px;">
                          <div class="card-body">
                            <h5 class="card-title">Sabonete de Limpeza Extraforte com Ácido Salicílico</h5>
                          </div>
                          <div class="card-footer">
                            <p class="card-text" style="font-size: 20px;"><b>$ 12,08</b></p>
                            <button onclick="location.href='#'" type="button" class="btn btn-primary">Ver Produto</button>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top mx-auto" src="assets/img/sabonete2.jpg" alt="sabonete2" style="max-height: 260px; max-width: 260px;"> 
                          <div class="card-body">
                            <h5 class="card-title">Sabonete Cremoso Encanto Intensa</h5>
                          </div>
                          <div class="card-footer">
                            <p class="card-text" style="font-size: 20px;"><b>R$ 9,99</b></p>
                            <button onclick="location.href='#'" type="button" class="btn btn-primary">Ver Produto</button>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top mx-auto" src="assets/img/creme.jpg" alt="Creme" style="max-height: 260px; max-width: 260px;">
                          <div class="card-body">
                            <h5 class="card-title">Creme Hidratante Nutritivo Corporal</h5>
                          </div>
                          <div class="card-footer">
                            <p class="card-text" style="font-size: 20px;"><b>R$ 35,99</b></p>
                            <button onclick="location.href='#'" type="button" class="btn btn-primary">Ver Produto</button>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <!--------------------------------------------------------------------------------------------->
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
        <!------------------------Funçao javascript para mudar a imagem quando aperta na imagem thumbnails------------------------------------>
          <script language="javascript">
              function show1(){
                  document.getElementById("imagep1").src="assets/img/sabonete.jpg";
              }
              function show2(){
                  document.getElementById("imagep1").src="assets/img/sabonetecopia.jpg";
              }
          </script>
        
        <!-- Faz a chamada do jquery -->
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        <!-- Faz a chamada do bundle -->
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>    

    </body>
</html>