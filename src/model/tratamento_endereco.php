<?php 
    include_once "procura_endereco.php";

    function tratamento($uf, $cidade, $rua){
        procura($uf, $cidade, $rua);

        $r = $GLOBALS["return_endereco"];
        echo "<p>$r</p>";
    }


?>