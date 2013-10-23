<?php
    
    //Conectando ao banco de dados
    $db_conn = mysql_connect($ip_db, $usuario_db, $senha_db);
    if (!$db_conn) {
        die ('Nao foi possivel conectar: ' . mysql_error());
    }
    $db_select = mysql_select_db($banco_db, $db_conn);
    if (!$db_select) {
        die ('Nao foi possivel selecionar a base de dados: ' . mysql_error());
    }

?>