<?php
require_once ('../db/post_list.php');

echo '<div class="list-group">';

foreach ($posts as $post){
    echo ' <a href="#" class="list-group-item '.$post['active'].'">';
    echo ' <h4 class="list-group-item-heading">'.$post['title'].'</h4>';
    echo ' <p class="list-group-item-text">'.$post['description'].'</p>';
    echo '</a>';
}
echo '</div>';