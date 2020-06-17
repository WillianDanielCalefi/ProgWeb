<?php  
    require_once('config/config.php');
    require ('menu.php');

       



    if($_SESSION['nivel'] > 2){
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
    
    

 
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento</title>
    <!-- configurações padrão do navegaor -->
    <meta name="viewport" content="whidth=device-width,initial-scale=1, shink-to-fit=no">
    <!--Faz a chamada do bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- faz a chamada do css do w3school -->
    <link rel="stylesheet" href="assets/css/w3.css">
</head>

<body style="background-color: rgba(181, 7, 131, 0.35)">

<!-----------------------------INICIO DO SIDE BAR -->

<div class="container" style="padding-top: 78px">
    <nav class="w3-sidenav w3-white w3-border-bottom" style="display: none;">
            <a href="javascript:void(0)"
                onclick="w3_close()"
                class="w3-closenav w3-large"> Fechar &times; </a>
            <a href="#produtos">Produtos</a>
            <a href="#funcionarios">Funcionarios</a>
            <a href="#Clientes">Clientes</a>
            <a href="#Curriculos">Curriculos</a>
    </nav>

<!----------------------------FIM DO SIDEBAR ---------------->

<!-----------------------------INICIO DO HEADER  ------------>

    <header class="w3-container w3-teal">
        <pan class="w3-opennav w3-large" onclick="w3_open()">&#9776;</span>

        <h1>GERENCIAMENTO DE PRODUTOS</h1>
    </header>
<!-----------------------------fim DO HEADER  --------------->

<!----------------------------TABELA DE PRODUTOS ------------>

        <div style="background-color: white">
                <a href="insert_prod.php"> Novo Produto</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <th>Produto</th>
                            <th>Nome</th>
                            <th>Preço</th> 
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <img src="" alt="">
                    <tbody>
                    <?php
                    
                     $sql = "select * from produtos order by Id ASC";
                     $sql = $conn->query($sql);

                     if($sql->rowCount() > 0){
                         foreach($sql->fetchall() as $produto){
                             
                            $foto = $produto['img']!=null?"<img style='width: 60px;' src='./uploads/".$produto['img']."' alt=''>":"<img style='width: 60px;' src='./uploads/semfoto.png' alt=''>";

                             echo '<tr = style="text-align: center">';
                             echo '<td>'.$foto.'</td>';
                             echo '<td>'.$produto['nome'].'</td>';
                             echo '<td>'.$produto['preco'].'</td>';
                             echo '<td>
                                     <a data-toggle="modal" data-target="#delete-modal' . $produto['id'] . ' ">
                                        <button type="button" class="btn btn-danger"> Excluir </button>
                                     </a>
                                     <a href="edit_prod.php?id='.$produto['id'].' ">
                                        <button type="button" class="btn btn-primary"> Alterar </button>
                                     </a>
                                     </td>';
                            echo '</tr>';  
                         }
                     }

                    ?>

                    <?php
                        if ($_SESSION['nivel'] > 1){

                    ?>

                    <!------------------- INICIO DO MODAL DE NEGAÇÃO-------------------->
                    <div class="modal fade" id="delete-modal<?=$produto['id']?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!--modal body-->
                                    <div class="modal-body">    
                                        <h4>Você não tem permissão para excluir o produto <?php echo "$produto[nome]"; ?></h4>
                                    </div>

                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>                        
                                    </div>
                                </div>
                            </div>
                    <!-----------------------FIM DO MODAL DE NEGAÇÃO------------->

                    <?php
                    
                        }else{
                    ?>


                     <!------------------- INICIO DO MODAL DE CONFIRMAÇÃO -------------------->
                     <div class="modal fade" id="delete-modal<?=$produto['id']?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!--modal body-->
                                    <div class="modal-body">    
                                        <h4>Deseja excluir o produto <?php echo "$produto[nome]"; ?>?</h4>
                                    </div>

                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <a href="delete_prod.php?id=<?=$produto['id']?>">
                                        <button type="button" class="btn btn-danger">Sim</button></a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>                        
                                    </div>
                                </div>
                            </div>
                    <!--------------------  FIM DO MODAL DE CONFIRMAÇÃO------------->
                <?php
                        }
                ?>
    
                    </tbody>
                </table>

            
        </div>
</div>


<script>

    function w3_open() {
        document.getElementsByClassName("w3-sidenav")[0].style.width = "25%";
        document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    }
    function w3_close() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    }
    
    </script>

    <!-- Faz a chamada do jquery -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Faz a chamada do bundle -->
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>     


</body>
</html>