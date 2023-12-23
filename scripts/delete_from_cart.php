<?php
/**
 * @var PDO $db
 **/
require 'connect.php';
session_start();
$data = json_decode(file_get_contents('php://input'),true);

$productId = $data['productId'];
$userId = $_SESSION['user']['id'];

$delete_cart_query = "delete from carts where user_id = $userId and product_id = $productId";

$db->query($delete_cart_query);

echo json_encode('success');
die();
