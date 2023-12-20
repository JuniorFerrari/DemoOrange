<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
<body>
<div id="app">
    <?php require 'partials/header.php'?>
    <main class="">
        <section class="mt-5">
            <div class="container-xxl">
                <h3 class="mb-4">Личные данные</h3>
                <div class="mb-5">
                    <div class="">Фамилия: Lorem</div>
                    <div class="">Имя: Lorem</div>
                    <div class="">Отчество: Lorem</div>
                </div>
            </div>
        </section>
        <section id="last-order">
            <div class="container-xxl">
                <div class="mb-3">
                    История Заказов
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Товары</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Статус</td>
                        <td><a href="" class="text-decoration-none">Товары</a></td>
                        <td>Сумма</td>
                        <td>@Дата</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <?php require 'partials/footer.php'?>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
