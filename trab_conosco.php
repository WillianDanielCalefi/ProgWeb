<html lang="en">

<?php 
  require_once('menu.php');
?>

<body>

    <link rel="stylesheet" type="text/css" href="assets/css/style_trabConosco.css">
    <!-- CSS DO INPUT FILE -->
     <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Select some files';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>
    <!-- CSS DO INPUT FILE -->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <div style="background-image: linear-gradient(to right, rgba(67, 117, 230, 0.59), rgba(194, 48, 230, 0.7));">
                <h4 class="fadeIn first" style="padding: 15px;">TRABALHE CONOSCO!</h4>
            </div>


            <!-- Login Form -->
            <form action="home.php" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <input style="margin-top: 40px;" type="text" id="login" class="fadeIn second" name="login" placeholder="Nome Completo" require>
                        <input type="text" id="password" class="fadeIn third" name="password" placeholder="CPF" require>
                        <input type="text" id="password" class="fadeIn fourth" name="password" placeholder="Data de Nascimento" require>
                    </div>
                    <div class="upload-btn-wrapper col-md-4" style="margin-top: 40px;">
                        <img class="fadeIn second" style="width: 32%; padding: 25px;" src="assets/img/curriculo.png" alt="">
                        <div>
                            <!-- <button class="btn">Upload a file</button> -->
                            <input style="width: 128px; margin-top: 10px;" class="fadeIn third custom-file-input" type="file" class="custom-file-input">
                        </div>
                    </div>
                </div>
                
                <input type="submit" class="fadeIn fourth" value="Enviar" style="margin-top: 40px; background-image: linear-gradient(to right, rgba(67, 117, 230, 0.59), rgba(194, 48, 230, 0.7));">
            </form>
        
        </div>
    </div>

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