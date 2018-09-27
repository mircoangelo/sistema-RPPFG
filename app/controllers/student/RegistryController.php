<?php

namespace AppPHP\Controllers\Student;

use AppPHP\Controllers\BaseController;

class RegistryController extends BaseController
{
    public function getIndex(){
        //para accder de las rutas: admin/posts or admin/posts/index
        global $pdo;
        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        $query->execute();

        //fetchAll funciona igual que fetch, solo que en este caso trae todos los registros
        $blogPost = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $this->render('student/registry.twig',['blogPost' => $blogPost]);
    }

    public function getRegistry(){
        // admin/posts/create
        return $this->render('student/registry.twig');
    }

}