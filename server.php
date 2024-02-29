<?php

$string = file_get_contents('data.json');
// var_dump($string);

$list=json_decode($string,true);

if(isset($_POST['discIndex'])){
    $discIndex = $_POST['discIndex'];

    $disc = $list[$discIndex];

    $list = $disc;
}

header('Content-Type:application/json');

echo json_encode($list);