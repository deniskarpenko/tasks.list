<?php
namespace model;

class DB 
{
    private  $pdo;
    
    public function connect($user,$pass,$db,$host='localhost')
    {
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=pdo", $user, $pass);
        } catch (Exception $e) {
               echo $e->getMessage()."\n\n";
        }
    }
    
    public function getUserAndTasks()
    {
        
    }

    public function disconnect()
    {
        $this->pdo = NULL;
    }
    
    
}

