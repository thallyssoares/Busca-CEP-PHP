<?php
    function conexao($c){
        $cep = $c;
        $ch = curl_init();
        $url = 'viacep.com.br/ws/'.$cep.'/json/';
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        ]);

        $con = curl_exec($ch);
        $return = json_decode($con, true);

        curl_close($ch);

        return $return;
    }
    

?>