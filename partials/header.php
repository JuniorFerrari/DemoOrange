<header>
    <?php require_once 'scripts/connect.php'?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-xxl">
            <a class="" href="index.php"><img class="logo__img" src="img/logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">О нас</a>
                    </li>
                </ul>
                <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
                <div class="">
                    <a href="cart.php" class="btn btn-warning">Корзина</a>
                    <a href="account.php" class="btn btn-success">Личный кабинет</a>
                    <a href="scripts/logout.php" class="btn btn-warning">Выход</a>
                </div>
                <?php else: ?>
                <div class="">
                    <a href="registration.php" class="btn btn-warning">Регистрация</a>
                    <a href="login.php" class="btn btn-warning">Вход</a>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
