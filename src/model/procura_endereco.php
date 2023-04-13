<?php 
    function procura($uf, $cidade, $rua){
        $ch = curl_init();
        $r = str_replace(" ", "+", $rua);

        $url = 'https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$r.'/json/';

        curl_setopt_array($ch, [
            CURLOPT_URL => $url, 
            CURLOPT_RETURNTRANSFER => true
        ]);
        
        $con = curl_exec($ch);
        global $response;

        $response = json_decode($con, true);
        
        curl_close($ch);
    
    }
    
    

?>