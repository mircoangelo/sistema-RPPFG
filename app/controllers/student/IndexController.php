<?php

namespace AppPHP\Controllers\Student;

use AppPHP\Controllers\BaseController;

class IndexController extends BaseController
{
    public function getIndex(){
        // muestra la pagina de logeo de estudiante
        return $this->render('student/index.twig'); 
    }


}
