<?php 
    function procura($uf, $cidade, $rua){
        $uf = strtoupper($uf);
        $url = 'viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$rua.'/json/';
        
        $ch = curl_init();

        curl_setopt_array($ch, [ 
        CURLOPT_URL => $url, 
        CURLOPT_RETURNTRANSFER => true]);

        global $return_endereco;
        
        $con = curl_exec($ch);
        $return_endereco = json_decode($con, true);
        print_r($return_endereco);
        curl_close($ch);
    }
    
    

?>