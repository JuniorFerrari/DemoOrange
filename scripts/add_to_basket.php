<?php
require 'connect.php';
session_start();
json_decode(file_get_contents('php://input'));
$productId = $_POST['productId'];
$userId = $_SESSION['user']['id'];


$select_cart_query = "select id,amount from carts where user_id = $userId and product_id = $productId";
$insert_product_query = "insert into carts(user_id,product_id,amount) values($userId, $productId, 1)";

$select_cart = $db->query($select_cart_query)->fetch(PDO::FETCH_ASSOC);
$id = $select_cart['id'];
$amount = $select_cart['amount'];
$newAmount = $amount + 1;

$update_cart_query = "update carts set amount = $newAmount where id = $id";

if (!$select_cart){
    $insert_product = $db->query($insert_product_query);
}else{
    $db->query($update_cart_query);
}





echo json_encode('success');
