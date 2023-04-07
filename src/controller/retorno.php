<?php 
    include_once "../model/tratamento.php";

    function retorno(){
        $cep = $_GET["cep"];
        result($cep);
        $rua = $GLOBALS["rua"];
        $bairro = $GLOBALS["bairro"];

        
    }



?>