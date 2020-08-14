<?php

echo '<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >';
echo '<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script >';

echo '<!-- Классы navbar и navbar-default (базовые классы меню) -->
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
      <a class="navbar-brand" href="/templates/login.php">Логин</a>
      <a class="navbar-brand" href="/templates/registration.php">Регистрация</a>
      <a class="navbar-brand" href="/templates/posts.php">Список постов</a>
      <a class="navbar-brand" href="/templates/profile.php">Профиль</a>
    </div>
    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
    <div class="collapse navbar-collapse" id="navbar-main">
      <!-- Содержимое основной части -->
    </div>
  </div>
</nav>';
