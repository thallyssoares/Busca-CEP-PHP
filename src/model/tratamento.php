<?php 
    include_once "conexao.php";
    /*
    chaves retornadas no json:
    - logradouro = rua,
    - complemento,
    - bairro,
    - localidade = cidade,
    - uf = estado, 
    - ddd.
    */
    function result($c){
        conexao($c);
        $r = $GLOBALS["return"];
        if (isset($r["erro"]) == 1){
            echo "<p>Cep digitado incorreto</p>";
        } else{
            if(!empty($r["complemento"])){
                $rua = $r["logradouro"];
                $comp = $r["complemento"];
                $bairro = $r["bairro"];
                $cidade = $r["localidade"];
                $estado = $r["uf"];

                echo "<p>Seu endereço: $rua, $comp, $bairro, $cidade - $estado. </p>";
            } else{
                $rua = $r["logradouro"];
                $bairro = $r["bairro"];
                $cidade = $r["localidade"];
                $estado = $r["uf"];

                echo "<p>Seu endereço: $rua, $bairro, $cidade - $estado. </p>";
            }
        
        }

    }

?>