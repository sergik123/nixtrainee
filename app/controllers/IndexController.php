<?php 
/**
 * Main controller. Generate view page.
 *
 * @author sergey
 */
	class IndexController extends ViewController{
		/*метод вызывает ViewController и подключает файл index.php*/
		public function mainAction(){
			$this->generateviewAction('index');
		}
	}
