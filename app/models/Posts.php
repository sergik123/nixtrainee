<?php
require_once 'core/ActiveRecord.php';
class Posts extends ActiveRecord{
    public function __construct()
    {
        parent::__construct();
    }
}