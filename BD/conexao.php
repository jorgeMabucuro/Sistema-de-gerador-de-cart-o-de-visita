<?php
    try {
        $bd = new pdo("mysql:dbname=cv_xpto;host=localhost", "root", "");
        // echo "conexão feita com sucesso <br>";
    } catch (PDOException $e) {
        echo "Erro de conexão" .$e->getMessage();
    }
?>