<?php

namespace Tekrom\Ecommerce\Accessibility;
class Curl
{

    function getData($url, $type = "GET", $data = [], $header = [])
    {

        $curl = curl_init();


        $header[] = 'Content-Type: application/json';

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $type,
            CURLOPT_POSTFIELDS =>json_encode($data),
            CURLOPT_HTTPHEADER => $header,
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);

        curl_close($curl);

        $json = json_decode($response,true);

        return $json;

    }

}