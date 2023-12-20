<?php
session_start();

require 'connect.php';

json_decode(file_get_contents("php://input"));

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];

$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$errors = [];

if ($password !== $confirmpassword){
    $errors[] = 'Пароли не совпадают';
}

$password = md5($password);
$select_query = "SELECT id FROM `users` WHERE email = :email";
$insert_query = "INSERT INTO `users` (name,surname,patronymic,email,password) VALUES (:name,:surname,:patronymic,:email,:password)";

$select_query = $db->prepare($select_query);
$insert_query = $db->prepare($insert_query);

$select_query->execute(compact("email"));

if($select_query->fetch(PDO::FETCH_ASSOC)){
    $errors[]= 'Такой пользователь уже зарегистрирован';
}

if (!empty($errors)){
    echo json_encode(compact('errors'));
    die();
}
$insert_query->execute(compact("surname","name","patronymic","email","password"));

$rawUserData = $db->query('select * from users where id = LAST_INSERT_ID()');
$user = $rawUserData->fetch(PDO::FETCH_ASSOC);

echo json_encode(compact('user'));
die();
