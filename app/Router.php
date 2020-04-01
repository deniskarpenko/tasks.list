<?php
namespace app;

class Router
{
    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        if ($url === '') {
            
        } else {
            
        }
        
        echo "$url\n\n";
    }
    
    private function _determineController($url)
    {
        
    }
}
