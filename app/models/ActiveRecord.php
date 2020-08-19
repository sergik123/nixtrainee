<?php
class ActiveRecord{
    private $select='SELECT *';
    private $from;
    private $where;
    private $lastEqualsWhere=' ';
    private $link;
    private $connect;
    public function __construct()
    {

    }
    public function init(){
        $this->link=new Connectdb;
        $this->connect=$this->link->config();
    }
    public function select($select){
        $this->select=' SELECT '.$select;
    }
    public function from($_from){
        $this->from=' FROM '.$_from;
    }
    public function where($field,$value,$equals='=',$type='AND'){
        if($this->lastEqualsWhere!=' '){
            $this->where.=' '.$this->lastEqualsWhere.' ';
        }
        $this->where.=$field.$equals.$value;
        $this->lastEqualsWhere=$type;
    }
    public function getSql(){
        if($this->where!=''){
            $this->where=' WHERE '.$this->where.' ';
        }
        $sql=$this->select.$this->from.$this->where;
        return $sql;
    }
    public function exec($query){
        $pdo=$this->connect;
        $result_array=array();
        $stmt = $pdo->query($query);
        while ($row = $stmt->fetch())
        {
            array_push($result_array,$row);
        }
        return $result_array;
    }
}