<?php
/**
 * This class receive information from user, include model 
 * and generate need view page
 *
 * @author sergey
 */
class PageController extends ViewController{
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
        $post=new Savepost();
        $result=$post->all_posts();
        $this->generateviewAction('posts',$result);
    }
}
