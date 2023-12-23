<?php
/**
 * @var PDO $db
 **/
require 'connect.php';
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$productId = $data['productId'];
$userId = $_SESSION['user']['id'];


$select_cart_query = "select user_id,product_id,amount from carts where user_id = $userId and product_id = $productId";
$insert_cart_query = "insert into carts(user_id,product_id,amount) values($userId, $productId, 1)";

$select_cart = $db->query($select_cart_query)->fetch(PDO::FETCH_ASSOC);

if (!$select_cart){
    $db->query($insert_cart_query);
}else {


    $user_id = $select_cart['user_id'];
    $product_id = $select_cart['product_id'];
    $amount = $select_cart['amount'];
    $newAmount = $amount + 1;

    $update_cart_query = "update carts set amount = $newAmount where user_id = $user_id and product_id = $product_id";
    $db->query($update_cart_query);
}


echo json_encode('success');
die();
