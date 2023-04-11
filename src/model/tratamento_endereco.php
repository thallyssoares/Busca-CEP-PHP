<?php 
    include_once "procura_endereco.php";

    function tratamento($uf, $cidade, $rua){
        procura($uf, $cidade, $rua);

        $r = $GLOBALS["response"];
        /*
        if(!empty($r[0]["complemento"])){
            $rua = $r[0]["logradouro"];
            $cidade = $r[0]["localidade"];
            $bairro = $r[0]["bairro"];
            $comp = $r[0]["complemento"];
            $uf = $r[0]["uf"];

            echo "<p>Seu endereço é: $rua, $comp,$bairro, $cidade - $uf.</p>";
        } else {
            $rua = $r[0]["logradouro"];
            $cidade = $r[0]["localidade"];
            $bairro = $r[0]["bairro"];
            $uf = $r[0]["uf"];

            echo "<p>Seu endereço é: $rua, $bairro, $cidade - $uf.</p>";
        }*/
         
        
    }


?>