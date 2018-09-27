<?php

namespace AppPHP\Controllers;

class IndexController extends BaseController 
{
    public function getIndex()
    {
        return $this->render('index.twig');
    }
}