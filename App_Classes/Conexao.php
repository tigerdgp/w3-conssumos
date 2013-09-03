<?php
    
    //Conectando ao banco de dados
    $link = mysql_connect($ip_db, $usuario_db, $senha_db);
    if (!$link) {
        die ('Nao foi possivel conectar: ' . mysql_error());
    }
    $db = mysql_select_db($banco_db, $link);
    if (!$db) {
        die ('Nao foi possivel selecionar a base de dados: ' . mysql_error());
    }

?>