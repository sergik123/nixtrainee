<?php
class Savepost {
    public $link;
    public $connect;
    public function __construct(){
        $this->link=new Connectdb;
        $this->connect=$this->link->config();

    }
    public function all_posts(){
        $pdo=$this->connect;
        $result_array=array();
        $stmt = $pdo->query('SELECT * FROM posts');
        while ($row = $stmt->fetch())
        {
            array_push($result_array,$row);
        }
        return $result_array;
    }
}
