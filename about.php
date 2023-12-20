<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>О нас</title>
</head>
<body>
<?php require 'partials/header.php'?>

<main>
    <section id="about" class="my-5">
        <div class="container-xxl">
            <h2 class="mb-4">О нас</h2>
            <div class="row">
                <div class="col">
                    <img src="img/map.png" alt="" class="w-100">
                </div>
                <div class="col pt-3">
                    <h4 class="mb-4">Контактные данные</h4>
                    <p>Адрес: здесь мы</p>
                    <p>Телефон: <a href="tel:79666">79666</a></p>
                    <p>Почта: <a href="mailto:example@example.ru">example@example.ru</a></p>

                </div>
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
