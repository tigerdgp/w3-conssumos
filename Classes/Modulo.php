<?php
    
    function modulos(){
        if(isset($_GET['op'])){
            $op = $_GET['op'];
            $g = chr(92);
            $op = str_replace($g , "", $_GET['op']);
            $op = str_replace("/" , "", $op);
            $op = str_replace("%00" , "\0", $op);
            $op = str_replace("?" , "", $op);
            $op = htmlspecialchars($op);

            if (is_file("Modulos/".$op.".php")) {
      	        include "Modulos/".$op.".php";
            } 
            else {
		        echo "<br>M&oacute;dulo $op n&atilde;o foi encontrado!<br>";
            }
        }
    }

?>