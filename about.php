<?php
session_start();
require 'scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>About</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require_once "partials/header.php" ?>
<main class="main">
   <section id="about" class="mt-5">
      <div class="container-xl">
         <h2 class="mb-4">О нас</h2>
         <div class="row">
            <div class="col">
               <img class="w-100" src="img/map.png" alt="Картинка карты">
            </div>
            <div class="col pt-3">
               <h4 class="mb-3">Контактные данные</h4>
               <p>Адрес: г. Новосибирск, Октябрьский пр-кт 180/4</p>
               <p>Телефон: <a href="tel:+73431218878">+7 (343) 121-88-78</a></p>
               <p>Почта: <a href="mailto:funtime@mail.ru">funtime@mail.ru</a></p>
            </div>
         </div>
      </div>
   </section>
   <section id="feedback" class="py-5 mt-5">
        <div class="container-xl">
            <h2 class="fs-2 text-black mb-4 mt-4 text-center text-white fw-bold">Нужна помощь?</h2>
            <form class="bg-white rounded p-5 text-dark fw-medium w-75 mx-auto">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <textarea class="form-control" placeholder="Ask your question here" id="floatingTextarea"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </section>
</main>
<?php require_once "partials/footer.php" ?>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
