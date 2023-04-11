<?php 
    include_once "../model/tratamento_cep.php";

    function retorno(){
        $cep = $_GET["cep"];
        result($cep);
        if(isset($GLOBALS["rua"]) && isset($GLOBALS["bairro"]) && isset($GLOBALS["comp"]) && isset($GLOBALS["cidade"]) && isset($GLOBALS["estado"])){
            if(!empty($GLOBALS["comp"])){
                $rua = $GLOBALS["rua"];
                $bairro = $GLOBALS["bairro"];
                $comp = $GLOBALS["comp"];
                $cidade = $GLOBALS["cidade"];
                $estado = $GLOBALS["estado"];
    
                echo "<p>Seu endereço é: $rua, $comp, $bairro, $cidade - $estado.</p>";
            } else{
                $rua = $GLOBALS["rua"];
                $bairro = $GLOBALS["bairro"];
                $cidade = $GLOBALS["cidade"];
                $estado = $GLOBALS["estado"];
    
                echo "<p>Seu endereço é: $rua, $bairro, $cidade - $estado.</p>";
            }

        }

        
    }



?>