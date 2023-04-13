<?php 
    include_once "../controller/retorno_endereco.php";

    function validacao($uf, $cidade, $rua, $bairro){
        if((strlen($uf)<3) && (strlen($cidade)<3) && (strlen($rua)<3)){
            echo "<p>Endereço digitado não está correto</p>";
        } else{
            resultado($uf, $cidade, $rua, $bairro);
            
        }


    }

?>