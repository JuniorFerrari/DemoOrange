<?php
session_start();
/**
 * @var PDO $db
 **/
require 'scripts/connect.php';

$select_categories_query = 'select * from categories';
$select_categories = $db->prepare($select_categories_query);
$select_categories->execute();

$categories = $select_categories->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="app">
    <?php require_once "partials/header.php" ?>

    <main class="main">
        <section id="catalog" class="mt-4">
            <div class="container-xl">
                <h1 class="fs-2 text-black">Каталог</h1>
                <div class="row">
                    <div class="col-4 mt-2 bg-secondary bg-opacity-10">
                        <form action="" method="GET" class="p-3">
                            <div class="form-group mb-3">
                                <label for="search_products" class="form-label">Поиск</label>
                                <input placeholder="Поиск по названию" type="text" id="search" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="categories" class="form-label">Категории</label>
                                <select class="form-select" id="categories" name="category_ids[]" multiple aria-label="Multiple select example">
                                    <?php foreach ($categories as $category):?>
                                        <option value="<?=$category['id']?>"><?=$category['title']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="order" class="form-label">Сортировка</label>
                                <select class="form-select" id="order" name="order">
                                    <option selected value="ASC">Сначала не дорогие</option>
                                    <option value="DESC">Сначала дорогие</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100 custom-bg" type="submit">Показать</button>
                        </form>
                    </div>
                    <div class="col-8">
                        <div id="productsWrapper" class="row mb-4 row-cols-sm-1 row-cols-lg-2 row-cols-xl-3 g-3">

                        </div>
                        <div class="row">
                            <div class="col">
                                <nav class="mt-3 d-flex justify-content-center" aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link custom-text" href="#">Назад</a></li>
                                        <li class="page-item"><a class="page-link custom-text" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link custom-text" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link custom-text" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link custom-text" href="#">Вперёд</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "partials/footer.php" ?>
</div>
<script src="js/jquery-3.7.1.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
