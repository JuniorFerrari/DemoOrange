<?php
session_start();
require 'scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FUNTIME | Cart Page</title>
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
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="card mb-3 position-relative">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="img/item1.jpg" class="img-fluid rounded-start" alt="Картинка товара" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">D&D</h5>
                                                    <p class="fs-3 fw-medium">3 999 Р</p>
                                                    <form action="#" class="position-relative d-inline-flex gap-1">
                                                        <button class="count-button btn btn-primary custom-bg minus">-</button>
                                                        <input class="form-control text-center" value="1" min="0" max="10" type="number" id="count-input">
                                                        <button class="count-button btn btn-primary custom-bg plus">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="close-button btn btn-outline-danger">&times;</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-3 position-relative">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="img/item2.jpg" class="img-fluid rounded-start" alt="Картинка товара" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">D&D</h5>
                                                    <p class="fs-3 fw-medium">3 999 Р</p>
                                                    <form action="#" class="position-relative d-inline-flex gap-1">
                                                        <button class="count-button btn btn-primary custom-bg minus">-</button>
                                                        <input class="form-control text-center" value="1" min="0" max="10" type="number" id="count-input">
                                                        <button class="count-button btn btn-primary custom-bg plus">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="close-button btn btn-outline-danger">&times;</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-3 position-relative">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="img/item3.jpg" class="img-fluid rounded-start" alt="Картинка товара" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">D&D</h5>
                                                    <p class="fs-3 fw-medium">3 999 Р</p>
                                                    <form action="#" class="position-relative d-inline-flex gap-1">
                                                        <button class="count-button btn btn-primary custom-bg minus">-</button>
                                                        <input class="form-control text-center" value="1" min="0" max="10" type="number" id="count-input">
                                                        <button class="count-button btn btn-primary custom-bg plus">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="close-button btn btn-outline-danger">&times;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-light rounded-3 p-3">
                                <div class="fs-3 text-dark">Итог: 3 999 Р</div>
                                <button class="btn btn-primary custom-bg fs-5 w-100 mt-2">Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once "partials/footer.php" ?>
        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
