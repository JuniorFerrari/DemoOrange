<?php
session_start();
require 'scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<div id="app">
    <?php require_once "partials/header.php" ?>

    <main class="main">
        <section id="login" class="d-flex flex-column align-items-center custom-auth">
            <div id="errorsWrapper" class="w-50">
            </div>
            <form class="w-50" method="post">
                <h1 class="fs-3 mb-3">Вход</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Почта</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="name" name="password">
                </div>
                <button type="submit" class="btn btn-primary custom-bg">Войти</button>
            </form>
        </section>
    </main>

    <?php require_once "partials/footer.php" ?>
</div>
<script src="js/jquery-3.7.1.js"></script>
<script src="js/main.js"></script>

<script src="js/bootstrap.js"></script>
</body>
</html>
