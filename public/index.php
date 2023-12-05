<?php
//Obtien le dossier parent du repertoire courant
define('ROOT', dirname(__DIR__) . '/');

use App\Autoloader;

include "../vendor/autoload.php";
include ROOT . "/Autoloader.php";

//Permet d'inclure les dependances des classe utiliser via les namspaces 
Autoloader::register();

//Defini le repertoire des composants de vues twig /templates
$loader = new \Twig\Loader\FilesystemLoader(ROOT . "templates");

//Permet de créer l'environnement Twig via la classe Environemt qui detient les methodes de rendu twig render
$twig = new \Twig\Environment($loader);

echo $twig->render('base.html.twig', [
    'data' => ROOT
]);
