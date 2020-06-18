<html lang="en">

<?php 

  require_once('config/config.php');
  require_once('menu.php');


?>

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
                <?php
                 $stmt = $conn->prepare("SELECT * FROM produtos");
                 $i = 0;
                 $stmt->execute(); 
                 $produto = $stmt->fetchAll();
                 foreach($produto as $prod){                   
                   $active = $i==0?"active":"";
                   $foto = $prod['img']!=null?$prod['img']:"semfoto.png";
                   $tam = $prod['img']!=null?"260px":"189px";   
                   
                   
                
                ?>
              
                <div class="carousel-item <?php$active?>">
                <img class="card-img-top" src="./uploads/<?=$foto?>" alt="" style="max-height: <?=$tam?>">
                    <div class="carousel-caption">
                      <?=$prod['nome'].'<br>'.$prod['preco'];?>
                    </div>                  
                </div>

                <?php
                   
                   $i++;
                 }
                
                ?>




              

                <!-- <div class="carousel-item">
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
              </div> -->

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