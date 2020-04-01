<?php
namespace controller;

use model\DB;

class IndexController
{
    public function actionIndex()
    {
        echo "\n\n".__METHOD__."\n\n";
        $db = new DB();
        $db->connect();
        
    }
}

