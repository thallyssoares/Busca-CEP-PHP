<?php
    // $cep = ;
    $ch = curl_init();
    $url = 'viacep.com.br/ws/61905090/json/';
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ]);

    $con = curl_exec($ch);
    $return = json_decode($con, true);

    curl_close($ch);

?>