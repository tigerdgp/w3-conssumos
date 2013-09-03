<?php
    
    include '/App_Classes/Configuracao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $TituloSite ?></title>
        <link href="App_Temas/tema1/css/Reset.css" rel="stylesheet" type="text/css" />
        <link href="App_Temas/tema1/css/Global.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <?php
    
            include '/App_Controles/navTop.php';
        ?>
        <?php include "App_Controles/Menu.php"; ?>
        <div id="pagina">
            <?php
                
                include '/App_Controles/header.php';
                include '/App_Controles/section.php';
                include '/App_Controles/footer.php';

            ?>
        </div>   
        
    </body>
</html>
