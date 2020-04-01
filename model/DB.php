<?php
namespace model;

use PDO;

class DB 
{
    protected  $conf;
    protected  $conf_name;

    public function __construct($conf = 'config/config.php') 
    {
       $this->setConfFile($conf);
    }
    
    public function setConfFile($conf)
    {
        if (file_exists($conf)) {
            $this->conf = $conf;
            return TRUE;
        }
        echo "Не найден файл по такому адресу\n\n";
        return FALSE;
    }
    
    protected function readConf($name)
    {
        if (!empty($this->conf)) {
            $config = include $name;
            return $config[$name];
        }
        return FALSE;
    }
  
    private function _getConfig()
    {
       return $this->conf; 
    }

    public function connect()
    {
        $conf  = $this->readConf($this->getDb());
        try{
            $dsn = 'mysql:host='.$conf['host'].';dbname='.$conf['db'];
            return new PDO($dsn, $user, $pass);
        } catch (Exception $e) {
            echo $e->getMessage()."\n\n";
        }
    }
    
    public function  getDb()
    {
        return 'user_tasks';
    }
}
