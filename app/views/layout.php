<?php
echo '<div class="list-group">';

if (!empty($id)) {
    foreach ($id as $post){
        echo ' <a href="#" class="list-group-item '.$post['active'].'">';
        echo ' <h4 class="list-group-item-heading">'.$post['title'].'</h4>';
        echo ' <p class="list-group-item-text">'.$post['descr'].'</p>';
        echo '</a>';
    }
}
echo '</div>';