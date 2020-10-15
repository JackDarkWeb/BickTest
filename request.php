<?php
require_once 'CallApi.php';

$err = [];
if(!empty($_POST['field']) && !empty($_POST['operator']) && !empty($_POST['value'])){

}else{
    $err['error'] = 'All fields are required';
}

echo json_encode($err);