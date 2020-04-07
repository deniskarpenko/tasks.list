<?php
namespace view;

class IndexView implements ViewInterface
{
    public function render()
    {
        include_once  'template\head.html';
        include_once  'template\foot.html';
    }
}

