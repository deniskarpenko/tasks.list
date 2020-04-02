<?php
namespace app;

class Router
{
    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        $controller = $this->_determineController($url); 
        $method = $controller['method'];
        $class = new $controller['class'];
        $class->$method();
    }
    /*метод определяющий контроллер и метод по урлу*/
    private function _determineController($url)
    {
        $controller = explode('/', $url);    
        if (isset($controller[1])) {
                $class = '\controller\\'.ucfirst($controller[1]).'Controller';
                $method = 'actionIndex';
                if ($class == '\controller\\Controller')
                    $class = '\controller\\IndexController';
                $size = count($controller);
                if ($size > 3) {
                    $method = 'action';
                    for ($i = 2; $i < $size; $i++) {
                        $method.= ucfirst($controller[$i]);
                    }
                }
                return [
                    'class' => $class,
                    'method' => $method,
                ];
        }
        return FALSE;
    }
}
