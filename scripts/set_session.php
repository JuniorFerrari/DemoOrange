<?php

$json = json_decode(file_get_contents("php://input"),1);

session_start();

$key = $json['key'];
$data = $json['data'];

$_SESSION[$key] = $data;
