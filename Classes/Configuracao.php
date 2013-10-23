<?php
    
    //Definindo os principais dados do site
    $TituloSite = "Conssumos"; //Nome do site
    $logo = "Temas/Tema1/img/logo.png"; //Endereco do logo do site

    //Setando variaveis para conexao ao banco de dados
    $ip_db = "localhost"; //IP do servidor do banco de dados
    $usuario_db = "root"; //Usuario de acesso ao banco de dados
    $senha_db = "200123"; //Senha de acesso ao banco de dados
    $banco_db = "conssumos"; //Nome do banco de dados
    $prefixo_db = "cs_"; //Prefixo das tabelas

    //Incluindo a string de conexao ao banco de dados
    include "Conexao.php";

    //Definindo o time zone
    //$data = date(y);
    $ano = date("Y");

    //Incluindo os módulos
    include "Modulo.php";

    //Incluindo o menu
    include "Menu.php";

?>