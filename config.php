<?php
$dbHost = 'localhost';
$dbName = 'blog_posts';
$dbUser = 'root';
$dbPass = '';
try{
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
    /*configuracion para pa exceptios
    PDO no siempre viene configurada para lanzar exepciones
    para eso es muy recomendable iniciar secion con setAtribute()
    pasando de parametro el modo de error que usaremos 
    */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error){
    echo $error->getMessage();
}