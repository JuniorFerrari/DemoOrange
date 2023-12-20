<?php
session_start();
require 'connect.php';

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'] ?? NULL;

$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];

$errors = [];

if ($password !== $confirmPassword) {
    $errors[] = 'Пароли не совпадают';
}

$password = md5($password);

$select_query = "SELECT id FROM `users` WHERE email = :email";
$insert_query = "INSERT INTO `users` (name,surname,patronymic,email,password) VALUES (:name,:surname,:patronymic,:email,:password)";

$select_query = $db->prepare($select_query);
$insert_query = $db->prepare($insert_query);

$select_id = $select_query->execute(compact("email"));
if($select_id){
    $errors[]= 'Такой пользователь уже зарегистрирован';
}else{

}


if (!empty($errors)){
    $_SESSION['auth_errors'] = $errors;
    header('location:' . $_SERVER['HTTP_REFERER']);
    die();
}

$insert_query->execute(compact("surname","name","patronymic","email","password"));

$rawUserData = $db->query('select LAST_INSERT_ID()');
$user = $rawUserData->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['isAuth'] = true;
$_SESSION['user'] = $user;

header("Location: ../account.php");


