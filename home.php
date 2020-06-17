<html lang="en">

<?php 
  require_once('menu.php');
  require_once('config/config.php');

  session_start();
  
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 70px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/batom.jpg" alt="" style="max-height: 400px;">
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
        </div>
    </section>
  
    <section>
  
        <div class="container-fluid" style="margin-bottom: 30px; background-image: linear-gradient(to right, rgb(67, 117, 230), rgb(194, 48, 230));">
          <div class="container">
            <div class="row" style="padding: 15px;">
              <div class="col-md-3" style="padding: 5px;">
                <strong style="margin-right: 20px;">Fique por dentro das novidades e promoções</strong>
              </div>
              <div class="col-md-5" style="padding: 5px;">
                <input class="form-control form-control-lg" type="text" placeholder="E-mail" style="color: #212529; border-color: rgba(76, 24, 85, 1); background-color: #ff000000; margin-right: 20px;" id="envia_Email">
              </div>
              <div class="col-md-4" style="padding: 5px;">
                <button type="submit" class="btn" style="padding: 11px; border-color: rgba(76, 24, 85, 1);" onclick="enviaEmail();">Cadastre-se</button>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container">
          <h5 style="text-align: center; font-size: 30px;">Veja alguns de nossos produtos</h5>
          <p style="font-family: Lato,sans-serif; font-size: 13px; margin-bottom: 10px;">Vamos cuidar e apoiar uns aos outros e o primeiro passo para enfrentarmos o momento atual é cuidar da higiene. São muitas opções de aromas e texturas para você escolher o seu sabonete favorito, higienizar as mãos e cuidar da sua saúde.</p>
          <div class="row" style="padding-bottom: 30px;">

            <?php 
              $stmt = $conn->prepare("SELECT * FROM produtos");
              $stmt->execute(); 
              $produto = $stmt->fetchAll();
              foreach($produto as $prod){ 
                $foto = $prod['img']!=null?$prod['img']:"semfoto.png";
                $tam = $prod['img']!=null?"260px":"189px";
                ?>

                <div class="col-md-4 bloco_central" style="padding: 20px; width: 18rem;">
                  <div class="transition desfoc">
                    <img class="card-img-top" src="./uploads/<?=$foto?>" alt="" style="max-height: <?=$tam?>">
                  <div class="card-body">
                    <h5 class="card-title"><?=$prod['nome']?></h5>
                    <p class="card-text" style="font-size: 20px;"><b>R$ <?=$prod['preco']?></b></p>
                    <a href="compras.php?id=<?=$prod['id']?>" class="btn btn-primary">Ver Produto</a>
                  </div>
                  <div style="text-align: -webkit-center;">
                    <div class="transition-border"></div>
                  </div>
                </div>              
            </div>
            <?php } ?>
            

          </div>
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

        function enviaEmail(){
          var email = $('#envia_Email').val();

          $.ajax({
            type: "POST",
            url: "./functions.php",
            dataType: "json",
            data: email,
            sucess: function (data){
                console.log(data);
                alert('Sucess');
            },
            error: function (data) {
                console.log(data);
                alert('Error');
            }
          });
        }
      </script>

    <!-- Faz a chamada do jquery -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Faz a chamada do bundle -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>


</body>
</html>