<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Личный кабинет</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
<body>
<div id="app">
<?php require_once "partials/header.php" ?>
<main class="main">
    <section id="account">
        <div class="container-xl">
            <h3 class="mb-4">Личные данные</h3>
            <div class="mb-5">
                <div>Фамилия: <?= $user['surname'] ?></div>
                <div>Имя: <?= $user['name'] ?></div>
                <div>Отчество: <?= $user['patronymic'] ?></div>
                <div>Почта: <?= $user['email'] ?></div>
            </div>
        </div>
    </section>

    <section id="last-orders">
        <div class="container-xl">
            <h3 class="mb-3">История заказов</h3>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Товары</th>
      <th scope="col">Статус</th>
      <th scope="col">Сумма</th>
      <th scope="col">Дата</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="product.php">D&D</a>, <a href="product.php">Взрывные котята</a></td>
      <td>Отправлено</td>
      <td>4 999</td>
      <td>29.11.2023 19:32</td>
    </tr>
  </tbody>
</table>
        </div>
    </section>
</main>
<?php require_once "partials/footer.php" ?>
</div>
<script src="js/main.js"></script>
</body>
</html>
