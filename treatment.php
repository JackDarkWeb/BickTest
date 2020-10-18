<?php

use App\Api;


require_once "CallApis.php";
require_once 'Api.php';

$queries = json_decode(file_get_contents('php://input'), true);

$url = "https://api.github.com/search/repositories?q=topic:ruby+topic:rail";
$response = [];
foreach ($queries as $query){
    $response[] = Api::getServicesApi($url);
}

var_dump($response);

