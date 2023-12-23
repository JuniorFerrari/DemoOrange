<?php
/**
 * @var PDO $db
 **/
require 'connect.php';

json_decode(file_get_contents('php://input'));

$name = $_POST['name'];
$category_ids = $_POST['category_ids'] ?? [];
$categories = implode(', ', $category_ids);
$order = $_POST['order'];


$name = '%' . $name . '%';
if ($categories) {
    $categories = "and products.category_id in ($categories)";
}


$select_products_query = "select products.title, products.img, products.price, products.id,categories.title as 'category', products.category_id from products inner join categories on products.category_id = categories.id where products.title like '$name' $categories order by products.price $order";
$select_product = $db->prepare($select_products_query);
$select_product->execute();

$products = $select_product->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($products);
die();
