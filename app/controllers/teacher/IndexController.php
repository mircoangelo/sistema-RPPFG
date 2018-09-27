<?php

namespace AppPHP\Controllers\Teacher;

use AppPHP\Controllers\BaseController;

class IndexController extends BaseController
{
    public function getIndex(){
        // muestra la pagina de logeo de estudiante
        return $this->render('teacher/index.twig'); 
    }


}