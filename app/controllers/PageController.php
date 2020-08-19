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
    public function postsAction(){
        $test=new ActiveRecord();
        $test->init();
        $test->select(' * ');
        $test->from($this->table);
        $res=$test->getSql();
        $result=$test->exec($res);


        $this->generateviewAction('posts',$result);
    }
}
