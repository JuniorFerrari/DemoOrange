<?php
session_start();
require 'scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cart</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="app">
        <?php require_once "partials/header.php" ?>
        <main class="main">
            <section id="cart" class="mt-5">
                <div class="container-xl">
                    <h2 class="mb-3">Корзина</h2>
                    <div class="row">
                        <div class="col-8">
                            <div id="cartProductsWrapper" class="row row-cols-1">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-light rounded-3 p-3">
                                <div id="total" class="fs-3 text-dark"></div>
                                <button class="btn btn-primary custom-bg fs-5 w-100 mt-2">Заказать</button>
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
