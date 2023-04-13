<?php 
    include_once "procura_endereco.php";

    function tratamento($uf, $cidade, $rua, $bairro){
        procura($uf, $cidade, $rua);

        $r = $GLOBALS["response"];
        if(count($r)>1){
            foreach($r as $indice=>$valor){
                if($bairro == strtolower($valor["bairro"]) && $rua === strtolower($valor["logradouro"])){
                    echo "<p>Seu endereço: ".$valor["logradouro"].", ".$valor["bairro"].", ".$valor["cep"]. "</p>"."<br>";
                }
                
            }
        } else{
        
            if(!empty($r[0]["complemento"])){
                $rua = $r[0]["logradouro"];
                $cidade = $r[0]["localidade"];
                $bairro = $r[0]["bairro"];
                $comp = $r[0]["complemento"];
                $uf = $r[0]["uf"];
                $cep = $r[0]["cep"];

                echo "<p>Seu endereço é: $rua, $comp,$bairro, $cep, $cidade - $uf.</p>";
            } else {
                $rua = $r[0]["logradouro"];
                $cidade = $r[0]["localidade"];
                $bairro = $r[0]["bairro"];
                $uf = $r[0]["uf"];
                $cep = $r[0]["cep"];

                echo "<p>Seu endereço é: $rua, $bairro, $cep, $cidade - $uf.</p>";
            }

        }   
    }


?>