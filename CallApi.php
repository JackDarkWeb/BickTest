<?php


class CallApi
{
    private $apikey;



    /**
     * @param string $endpoint
     * @return array|null
     */
    private function callData(string $endpoint): ?array{

        $endpoint = "api.openweathermap.org/data/2.5/{$endpoint}&appid={$this->apikey}&units=metric&lang=fr";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER =>false,
            //CURLOPT_CAINFO => dirname(__DIR__).DIRECTORY_SEPARATOR."cert.cer",
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $data = json_decode(curl_exec($curl), true);
        $err = curl_error($curl);

        curl_close($curl);

        return ['data' => $data, 'err' => $err];
    }
}