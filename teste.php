<?php 

    $uf = "CE";
    $cidade = "Maracanau";
    $rua = "vicente ferreira goes";
    $url = 'viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$rua.'/json/';
        
    $ch = curl_init();

    curl_setopt_array($ch, [ 
        CURLOPT_URL => $url, 
        CURLOPT_RETURNTRANSFER => true
    ]);
    
    $con = curl_exec($ch);
    $return_endereco = json_decode($con, true);
    var_dump($return_endereco);
    curl_close($ch);

        /*
    $ch = curl_init();
    $url = 'viacep.com.br/ws/'.$cep.'/json/';
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ]);

    global $return;

    $con = curl_exec($ch);
    $return = json_decode($con, true);

    curl_close($ch);

*/


?>