<?php
session_start();
require 'scripts/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FUNTIME | Product Page</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <?php require_once "partials/header.php" ?>
      <main class="main">
         <section id="product" class="pt-5 mb-5">
            <div class="container-xl">
               <div class="row">
                  <div class="col-4">
                     <img src="img/item1.jpg" alt="Изображение товара" class="w-100">
                  </div>
                  <div class="col-8 p-3">
                     <div class="product-info">
                        <a href="catalog.php?category=3" class="card-text mb-1 text-decoration-none text-reset fw-medium fs-4">Ролевые</a>
                        <h3 class="mb-3 fw-bold">D&D</h3>
                        <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe neque voluptatum aut mollitia magni, corrupti fuga perspiciatis ullam, alias iure quos et, facilis natus veniam cum nemo. Doloribus consequuntur sed quasi aut dolorum aliquid eos molestiae. Vel necessitatibus inventore atque.</p>
                        <h2 class="mb-3">3 999 Р</h2>
                        <a href="#" class="btn btn-primary custom-bg fs-5">В корзину</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="similarProducts">
            <div class="container-xl">
               <h2 class="fs-2 text-black mb-4">Похожие товары</h2>
               <div class="row row-cols-4">
                  <div class="col">
                     <div class="card">
                        <img src="img/item2.jpg" class="card-img-top" alt="Картинка первого популярного предложения">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <img src="img/item1.jpg" class="card-img-top" alt="Картинка первого популярного предложения">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <img src="img/item1.jpg" class="card-img-top" alt="Картинка первого популярного предложения">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card">
                        <img src="img/item1.jpg" class="card-img-top" alt="Картинка первого популярного предложения">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php require_once "partials/footer.php" ?>
      <script src="js/bootstrap.bundle.js"></script>
   </body>
</html>
