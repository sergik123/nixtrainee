<nav class="navbar navbar-default">
    <!-- Контейнер (определяет ширину Navbar) -->
    <div class="container-fluid">
        <!-- Заголовок -->
        <div class="navbar-header">
            <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Бренд или название сайта (отображается в левой части меню) -->

        </div>
        <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
        <div class="collapse navbar-collapse" id="navbar-main">
            <a class="navbar-brand" href="/page/login">Логин</a>
            <a class="navbar-brand" href="/page/registration">Регистрация</a>
            <a class="navbar-brand" href="/page/posts">Список постов</a>
            <?php if(isset($_COOKIE['login'])):?>
            <a class="navbar-brand" href="/page/profile">Профиль</a>
            <?php endif; ?>

            <ul style="float: right; font-size: 14px; margin-top: 10px; " id="ul_login">
                <li><a href="/page/login" style="color: #9d9d9d; margin-right: 10px;"><span class="glyphicon"></span><?php if(isset($_COOKIE['login'])){echo $_COOKIE['login'];}else{echo 'Вхід';}?></a>
                 <?php
                 if (isset($_COOKIE['login'])){
                     echo '<a class="menuactive" href="/page/clearcookie">Вихід</a>';
                 }else{
                     echo '';
                 }
                 ?>
            </li>
            </ul>
        </div>
    </div>
</nav>