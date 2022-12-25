  <header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">Flower Fairy</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="">Главная</a> </li>
                    
                    <li><a href="#">Энциклопедия</a> </li>

                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']): ?>
                                    <li><a href="#">Админ панель</a> </li>
                                <?php endif; ?>
                                <li><a href="logout.php" class="btn">Выход</a> </li>
                            </ul>
                        <?php else: ?>
                            <a href="log.php" class="btn">
                                <i class="fa fa-user"></i>
                                Войти
                            </a>
                            <ul>
                                <li><a href="reg.php" class="btn">Регистрация</a> </li>
                            </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>