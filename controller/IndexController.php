<?php
namespace controller;

use model\DB;

class IndexController
{
    public function actionIndex()
    {
        $db = new DB();
        $db->connect();    
    }
}

