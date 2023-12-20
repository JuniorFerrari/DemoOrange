<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Каталог</title>
</head>
<body>
<?php require 'partials/header.php' ?>
<main>
    <section id="products">
        <div class="container-xxl">
            <h3 class="mb-5">Каталог</h3>
            <div class="row">
                <div class="col-4">
                    <div class="p-3 bg-secondary bg-opacity-10">
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="search" class="form-label">Поиск</label>
                                <input type="text" id="search" name="search" class="form-control"
                                       placeholder="Поиск по названию">
                            </div>
                            <div class="form-group mb-3">
                                <label for="category" class="form-label">Катеории</label>
                                <select class="form-select" name="category" id="category" multiple>
                                    <option selected value="3">Ролевые</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="4">Three</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="order" class="form-label">Сортировка</label>
                                <select class="form-select" name="category" id="category">
                                    <option selected value="ASC">Сначала недорогие</option>
                                    <option value="DESC">Сначала дорогие</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Показать</button>
                        </form>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row row-cols-3 g-4">
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img src="img/item3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light">Ролевые</a>
                                    <div class="">
                                        <a href="catalog.php" class="card-title fs-5 text-decoration-none text-reset">Cyberpunk
                                            RED</a>
                                    </div>
                                    <h2 class="mb-3 card-title">9 900</h2>
                                    <a href="#" class="btn btn-primary">В корзину</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <nav class="mt-4" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </section>

</main>

<?php require 'partials/footer.php'?>

<script src="js/bootstrap.js"></script>
</body>
</html>
