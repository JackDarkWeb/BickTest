<?php

namespace App;

trait CallApis
{
    protected static $curl_handle, $response, $err, $status;

    /**
     * @param string $url
     * @param string $method
     * @return object
     */
    protected  static function fetch(string $url, string $method = 'GET'): object
    {

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => true,
            //CURLOPT_CAINFO => dirname(__DIR__).DIRECTORY_SEPARATOR."cert.cer",
            CURLOPT_ENCODING => "UTF-8",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => [
                "Content-Type" => "application/json",
                "Accept" => "application/vnd.github.mercy-preview+json",
                "X-Requested-With" => "XMLHttpRequest",
                "X-CSRF-TOKEN" => null
            ],
            CURLOPT_HEADER => true,
        ]);

        self::$response = json_decode(curl_exec($curl));
        self::$err      = curl_error($curl);
        self::$status   = curl_getinfo($curl, CURLINFO_HTTP_CODE);


        curl_close($curl);

        return (object)['response' => self::$response, 'err' => self::$err, 'status' => self::$status];
    }
}