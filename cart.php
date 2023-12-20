<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Корзина</title>
</head>
<body class="d-flex flex-column min-vh-100">
<div id="app">
    <?php require 'partials/header.php'?>
    <main>
        <section id="cart" class="mt-5">
            <div class="container-xxl">
                <h2 class="mb-3">Корзина</h2>
                <div class="row">
                    <div class="col-8">
                        <div class="row row-cols-1">
                            <div class="col">
                                <div class="card mb-3 position-relative">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/item1.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Cyberpunk RED</h5>
                                                <p class="card-text">3900</p>
                                                <form action="" class="position-relative d-inline-flex gap-1">
                                                    <button  class="minus count-button btn btn-primary">-</button>
                                                    <input type="number" value="1" min="1" max="10" class="form-control text-center" id="count-input">
                                                    <button class="plus count-button btn btn-primary">+</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="close__button btn btn-outline-danger">X</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 position-relative">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/item1.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Cyberpunk RED</h5>
                                                <p class="card-text">3900</p>
                                                <form action="" class="position-relative d-inline-flex gap-1">
                                                    <button  class="minus count-button btn btn-primary">-</button>
                                                    <input type="number" value="1" min="1" max="10" class="form-control text-center" id="count-input">
                                                    <button class="plus count-button btn btn-primary">+</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="close__button btn btn-outline-danger">X</button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 position-relative">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/item1.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Cyberpunk RED</h5>
                                                <p class="card-text">3900</p>
                                                <form action="" class="position-relative d-inline-flex gap-1">
                                                    <button  class="minus count-button btn btn-primary">-</button>
                                                    <input type="number" value="1" min="1" max="10" class="form-control text-center" id="count-input">
                                                    <button class="plus count-button btn btn-primary">+</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="close__button btn btn-outline-danger">X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-light rounded-3">
                            <div class="fs-3 ">Итог: 3900</div>
                            <button class="btn btn-outline-primary w-100">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/bootstrap.js"></script>

    <?php require 'partials/footer.php'?>
</div>
</body>
</html>
