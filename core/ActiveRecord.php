<?php
class ActiveRecord{
    private $select='SELECT *';
    private $from;
    private $where;
    private $lastEqualsWhere=' ';
    private $link;
    private $connect;
    protected $fields = [];
    protected $properties = [];
    public $table;
    public function __construct()
    {
        $this->link=new Connectdb;
        $conf=$this->link->config();
        $this->connect=new PDO('mysql:host='.$conf['host'].';dbname='.$conf['db'].'',$conf['user'],$conf['pass']);
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->fields)) {
            return $this->properties[$name];
        }
    }
    public function save()
    {
        try {
            $bindParamNames = [];
            $keys=[];
            foreach($this->properties as $field=>$value)
            {
                $keys[]=$field;
                $bindParamNames[] = "'". $value.'\'';
            }
            $fields = implode(', ',$keys);
            $bindParamNamesString = implode(', ', $bindParamNames);
            $pdo=$this->connect;
            $query="INSERT INTO " . $this->table . " (" . $fields. ") VALUES (" . $bindParamNamesString .  ")";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }catch (PDOException $e){
            echo 'Пользователь с таким логином или email уже зарегистрирован!';
            echo 'Для перехода на страницу регистрации нажмите '. '<a href="/">сюда</a>';
            die();

        }

    }

    public function update($id="id",$val=" ")
    {
        try {
            $bindParamNames = [];
            $keys=[];
            foreach($this->properties as $field=>$value)
            {
                $keys[]=$field;
                $bindParamNames[] = $field."='". $value.'\'';
            }
            $bindParamNamesString = implode(', ', $bindParamNames);
            $pdo=$this->connect;
            $query="UPDATE " . $this->table . " SET " . $bindParamNamesString .  ' WHERE '.$id.'='.$val;
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }catch (PDOException $e){
            echo 'Пользователь с таким логином или email уже зарегистрирован!';
        }
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