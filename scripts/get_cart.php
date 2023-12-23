<?php
session_start();
/**
 * @var PDO $db
 **/
require 'connect.php';

$userId = $_SESSION['user']['id'];

$select_cart_query = "select p.id, p.title,p.img,p.price,c.amount
                        from products p inner join carts c on p.id = c.product_id
                        where c.user_id = $userId";
$product = $db->query($select_cart_query)->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($product);
die();
