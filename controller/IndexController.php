<?php
namespace controller;

use model\User;

class IndexController
{
    public function actionIndex()
    {
        $db = new User();
        $db->connect(); 
        echo "\n\n".print_r($db->findUserAndTasks())."\n\n";
    }
}

