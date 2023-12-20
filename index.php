<?php


session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Заводной апельсин</title>
</head>
<body>
<?php require 'partials/header.php' ?>
<main>
    <section id="carousel" class="">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/item1.jpg" class="d-block w-100 carousel__img" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Настольные игры</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/item2.jpg" class="d-block w-100 carousel__img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/item3.jpg" class="d-block w-100 carousel__img " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="bloquote" class="py-5">
        <div class="container-xxl">
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer text-secondary-emphasis">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
        </div>
    </section>
    <section id="advantages" class="py-5">
        <h3 class="mb-5 text-center">Наши преимущества</h3>
        <div class="container-xxl">
            <div class="row">
                <div class="col">
                    <div class="card border-0 align-items-center mx-auto" style="width: 18rem;">
                        <img src="img/like.svg" alt="" class="card-img-top mb-3" style="width: 8rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem ipsum dolor.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
                                odio.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 align-items-center mx-auto" style="width: 18rem;">
                        <img src="img/like.svg" alt="" class="card-img-top mb-3" style="width: 8rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem ipsum dolor.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
                                odio.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 align-items-center mx-auto" style="width: 18rem;">
                        <img src="img/like.svg" alt="" class="card-img-top mb-3" style="width: 8rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem ipsum dolor.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
                                odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="popular_products" class="mb-5">
        <div class="container-xxl">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner mx-auto">
                    <div class="carousel-item active ">
                        <div class="row row-cols-3">
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
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <div class="row row-cols-3">
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
                                <div class="card" style="width: 18rem;">
                                    <img src="img/item3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="feedback" class="py-5" >
        <div class="container-xxl">
            <h3 class="mb-5 text-center">Lorem ipsum dolor.</h3>
            <form class="bg-white p-3 rounded-2 w-75 mx-auto">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInput" class="form-label">Вопрос</label>
                    <textarea class="form-control" id="exampleInput"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</main>
<?php require 'partials/footer.php'?>

<script src="js/bootstrap.js"></script>
</body>
</html>
