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
        if (isset($r["erro"])){
            echo "<p>Cep digitado incorreto</p>";
        } else{
            
            global $rua, $comp, $bairro, $cidade, $estado;

            $rua = $r["logradouro"];
            $comp = $r["complemento"];
            $bairro = $r["bairro"];
            $cidade = $r["localidade"];
            $estado = $r["uf"];

            
        
        }

    }

?>