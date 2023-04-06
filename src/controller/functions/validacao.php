<?php 
    function validador(){
        $cep = $_POST["cep"];
        
        if(strlen($cep) < 8){
            echo "<p>O CEP digitado não caracteriza um CEP válido</p>";
        } else{
            header("location:src/view/resultado.php");
        }
    }



?>