<?php
namespace controller;

use model\User;
use \view\IndexView;
use view\View;

class IndexController
{
    public function actionIndex()
    {
        $db = new User();
        $db->connect(); 
        $user_and_tasks = $db->findUserAndTasks();
        $view = new IndexView();
        View::render($view);
        //  echo "\n\n".print_r($db->findUserAndTasks())."\n\n";
    }
}

