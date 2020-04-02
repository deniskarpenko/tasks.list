<?php
namespace model;

use PDO;

class DB 
{
    protected  $conf;
    protected  $conf_name;
    protected  $pdo;

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
        if (!empty($this->conf)) {
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
            $this->pdo = new PDO($dsn, $conf['user'], $conf['pass']); 
            return $this->pdo;
        } catch (Exception $e) {
            echo $e->getMessage()."\n\n";
        }
    }
    
    public function getTable()
    {
        if (preg_match_all('~(?<match>[A-Z][^A-Z]*)~',get_class($this), $matches)) {
            $table = '';
            $size = count($matches['match']);
            for ($i = 0; $i < $size; $i++) {
                $table.= lcfirst($matches['match'][$i]);
                if ($i != $size -1) {
                    $table.= '_';
                }
            }
            return $table;
        }
        return false;
    }
 
    public function  getDb()
    {
        return 'user_tasks';
    }
}
