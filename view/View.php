<?php
namespace view;

class View
{
    public static function render(ViewInterface $view) 
    {
        $view->render();
    }
}
