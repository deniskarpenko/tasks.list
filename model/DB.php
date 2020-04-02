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
        $this->conf = $conf;
    }
    
    protected function readConf($name)
    {
        echo "\n\n".__METHOD__."\n\n";
        if (!empty($this->conf)) {
            echo "\n\n".$this->conf."\n\n";
            $config = include_once $this->conf;
            if (isset($config[$name])) {
                return $config[$name];
            }
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
            echo "USER - ".$conf['user']."\n\n";
           // return new PDO($dsn, $conf['user'], $conf['pass']);
        } catch (Exception $e) {
            echo $e->getMessage()."\n\n";
        }
    }
    
    public function getTable()
    {
        if (preg_match_all('~([A-Z][^A-Z]*)~', get_class(), $matches)) {
            
        }
        return false;
    }
 
    public function  getDb()
    {
        return 'user_tasks';
    }
}
