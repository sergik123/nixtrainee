<?php
/**
 * This class receive information from user, include model 
 * and generate need view page
 *
 * @author sergey
 */
class PageController extends ViewController{
    private $table='posts';
    public function loginAction($params=" "){
	    $this->generateviewAction('login');
    }
    public function registrationAction($params=" "){
        $this->generateviewAction('registration');
    }
    public function profileAction($params=" "){
        $this->generateviewAction('profile');
    }
    public function clearcookieAction(){
        setcookie("login", null, -1, '/');
        header("Location: ".'/');
    }
    public function postsAction(){
        $test=new ActiveRecord();
        $test->init();
        $test->select(' * ');
        $test->from($this->table);
        $res=$test->getSql();
        $result=$test->exec($res);
        $this->generateviewAction('posts',$result);
    }
    public function regAction(){
        $test=new ActiveRecord();
        $test->init();
        $test->table='reg_user';
        $test->name_user=strip_tags($_POST['name']);
        $test->email=strip_tags($_POST['email']);
        $test->password=strip_tags($_POST['password']);
        $test->country=strip_tags($_POST['country']);
        $test->avatar='';
        $test->save();
        setcookie("login",ucfirst($_POST['name']),0,'/');
        $this->generateviewAction('success');
    }

    public function authAction(){
        $email=strip_tags($_POST['email']);
        $password=strip_tags($_POST['password']);
        $test=new ActiveRecord();
        $test->init();
        $test->select(' * ');
        $test->from('reg_user');
        $test->where('email','\''.$email.'\'');
        $test->where('password','\''.$password.'\'');
        $res=$test->getSql();
        $result=$test->exec($res);

        if($result==null){
            $msg='Такого пользователя не существует';
            $this->generateviewAction('login',$msg);
        }else{
            setcookie("login",ucfirst(strip_tags($result[0]['name_user'])),0,'/');
            $this->generateviewAction('success');

        }

    }
}
