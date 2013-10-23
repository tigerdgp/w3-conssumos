<?php
    
    include '/Classes/Configuracao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $TituloSite ?></title>
        <link href="Temas/tema1/css/Reset.css" rel="stylesheet" type="text/css" />
        <link href="Temas/tema1/css/Global.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <?php
    
            include '/Controles/navTop.php';
        ?>
        <?php include "Controles/Menu.php"; ?>
        <div id="pagina">
            <?php
                
                include '/Estrutura/header.php';
                include '/Estrutura/section.php';
                include '/Estrutura/footer.php';

            ?>
        </div>   
        
    </body>
</html>
