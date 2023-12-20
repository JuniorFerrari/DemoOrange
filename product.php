<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php require 'partials/header.php'?>
<main>
    <section id="product" class="p-5 mb-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-4">
                    <img src="img/item1.jpg" alt="" class=" w-100">
                </div>
                <div class="col-8 p-3">
                    <div class="product__info">
                        <a href="catalog.php?category=3" class="card-text text-decoration-none fw-light fs-4">Ролевые</a>
                        <h3 class="mb-3 fw-bold">Cyberpunk RED</h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda aut consectetur consequatur cupiditate, debitis dicta eaque eos, impedit in ipsam magnam non, placeat quaerat quam repellat sed tempore unde? Earum expedita hic laborum, modi mollitia nemo optio recusandae ut.</p>
                        <div class="">
                            <h2 class="mb-5">9900 &#x20bd;</h2>
                            <a href="#" class="btn btn-primary fs-5">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="similar-products" class="mb-5">
        <div class="container-xxl">
            <h3 class="mb-4">Похожие товары</h3>
            <div class="row row-cols-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/item3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/item3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card " style="width: 18rem;">
                        <img src="img/item3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card " style="width: 18rem;">
                        <img src="img/item3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'partials/footer.php'?>

<script src="js/bootstrap.js"></script>
</body>
</html>
