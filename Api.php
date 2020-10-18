<?php
namespace App;

class Api{
    use CallApis;

    static function getServicesApi($url){
       $data = self::fetch($url);

       if($data->err){
           return $data->err;
       }elseif($data->status){
           if($data->status == 404)
               return "Page not found";
           elseif( $data->status == 401)
               return "Unauthenticated user";
           elseif($data->status == 403)
               return "Access denied";
           elseif($data->status == 200)
               return $data->response;
       }
    }
}