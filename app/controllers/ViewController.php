<?php 
	class ViewController
    {
        /*метод подключает внутренние файлы cms для отображения*/
        public function generateviewAction($view = " ", $id = " ", $template = " ")
        {
            include_once ROOT . "/app/views/$view" . '.php';

        }
    }