<?php
class Savepost {
    public function all_posts(){
        $posts = array(array("title"=>"Что такое HTML?", "description"=>"HTML - это стандартный язык разметки документов во Всемирной паутине.",'active'=>'active'),
            array("title"=>"Что такое CSS?", "description"=>"CSS - это формальный язык описания внешнего вида документа, написанного с использованием языка разметки."),
            array("title"=>"Что такое JavaScript?", "description"=>"JavaScript - это прототипно-ориентированный сценарный язык программирования. Является диалектом языка ECMAScript."));

        return $posts;
    }
}
