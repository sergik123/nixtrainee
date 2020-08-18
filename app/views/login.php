<?php
require_once('header.php');
echo '<link rel = "stylesheet" href = "/css/main.css" >';
echo '<div class="form-wrap">
  <div class="profile"><img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png">
    <h1>Авторизация</h1>
  </div>
  <form method="post" action="auth.php">
    <div>
      <label for="email">E-mail</label>
      <input type="email" name="email" required>
    </div>
    <div>
      <label for="password">Пароль</label>
      <input type="password" name="password" required>
    </div> 
    <button type="submit">Войти</button> 
  </form> 
</div>';
require_once('footer.php');