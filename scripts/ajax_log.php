<?php

session_start();

/**
 * @var PDO $db
**/
require 'connect.php';

json_decode(file_get_contents('php://input'));

$email = $_POST['email'];
$password = $_POST['password'];

$select_user_query = "SELECT * FROM `users` WHERE `email` = :email";

$select_user = $db->prepare($select_user_query);
$select_user->execute(compact('email'));

$user = $select_user->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $errors[] = 'Пользователь не найден!';
}

if (!empty($user) && $user['password'] !== md5($password)) {
    $errors[] = 'Неправильный пароль!';
}

if (!empty($errors)) {
    echo json_encode(compact('errors'));
    die();
}

if (empty($errors)){
    echo json_encode(compact('user'));
    die();
}
