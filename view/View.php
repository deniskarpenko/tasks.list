<?php
namespace view;

class View
{
   protected $css_links;
   public function viewHead($title='page')
   {
       echo "<!doctype html>\n<html>\n<head>\n<meta charset='utf-8'>\n<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>\n";
       echo "<title>$title</title>\n</head>";
   }
   
   public function  viewFoot()
   {
       
   }
   
   public function setCssLinks($links)
   {
       $this->css_links = $links;
   }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

