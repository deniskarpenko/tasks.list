<?php
namespace controller;

use model\User;
use view\View;

class IndexController
{
    public function actionIndex()
    {
        $db = new User();
        $db->connect(); 
        $user_and_tasks = $db->findUserAndTasks();
        $view = new View();
        
        //  echo "\n\n".print_r($db->findUserAndTasks())."\n\n";
    }
}

