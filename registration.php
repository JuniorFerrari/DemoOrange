<?php

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
    <title>Регистрация</title>
</head>
<body>
<div id="app">
    <?php require 'partials/header.php'?>
    <main class="p-5 ">
        <div class="container-xxl w-25">
            <form action="scripts/ajax_reg.php" method="post">
                <h3>Регистрация</h3>
                <div class="mb-3">
                    <label  class="form-label">Фамилия</label>
                    <input type="text" required class="form-control" id="surname" name="surname">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Имя</label>
                    <input type="text" required class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Отчество</label>
                    <input type="text" class="form-control" id="patronymic" name="patronymic">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" required class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Пароль</label>
                    <input type="text" required class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Подтверждение пароля</label>
                    <input type="text" required class="form-control" id="confirmpassword" name="confirmpassword">
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
    </main>
    <?php require 'partials/footer.php'?>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
