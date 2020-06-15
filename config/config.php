<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=cosmeticos', 'root','');

    } catch (PDOException $e){
        echo "Falha ao conectar a base de dados!";
    }

?>