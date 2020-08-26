<?php require_once ('header.php'); ?>
<h2 style="text-align:center">User Profile Card</h2>;
<div class="card">
    <?php if(isset($id)) $avatar=$id[0]['avatar'];?>
  <img src="/app/img/<?php echo $avatar;?>" alt="John" style="width: 260px; height: 220px;">
  <h1><?php if(isset($id)) echo $id[0]['name_user'];?></h1>
  <p class="title"><?php if(isset($id)) echo $id[0]['country'];?></p>
  <p>email:<?php if(isset($id)) echo $id[0]['email'];?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button data-toggle="collapse" data-target="#demo">Редактировать</button></p>
</div>

<div id="demo" class="collapse" style="width: 700px;">
    <form method="post" action="/page/regupdate" enctype="multipart/form-data">
        <div>
            <label for="name">Имя</label>
            <input type="text" name="name" required value="<?=$id[0]['name_user'];?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" required value="<?=$id[0]['email'];?>">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" required value="<?=$id[0]['password'];?>">
        </div>
        <div>
            <label for="country">Страна</label>
            <select name="country">
                <option>Выберите страну проживания</option>
                <option value="Украина" <?php if($id[0]['country']=='Украина') echo 'selected'; ?> >Украина</option>
                <option value="Россия" <?php if($id[0]['country']=='Россия') echo 'selected'; ?>>Россия</option>
                <option value="Беларусь" <?php if($id[0]['country']=='Беларусь') echo 'selected'; ?>>Беларусь</option>
            </select>
            <div class="select-arrow"></div>
        </div>
        <div>
            <p>загрузить аватар</p><input type="file" name="avatarka" value="<?php echo $avatar?>">
        </div>
        <button type="submit">Сохранить</button>
    </form>
</div>
<?php require_once ('footer.php'); ?>

