<?php

    session_start();
    session_destroy();

     echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; url=index.php'>
        <script type=\"text/javascript\">
            alert(\"Logout Realizado com Sucesso!\");
        </script>";


?>