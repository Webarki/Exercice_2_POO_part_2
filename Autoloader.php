<?php
//Indique le repertoire racine de mon projet
namespace App;

//Indique la class
class Autoloader
{
    static function register()
    {
        //require "../vendor/autoload.php";
        spl_autoload_register(array(
            __CLASS__, 'autoload'
        ));
    }

    static function autoload($className)
    {
        //Recupére les class courantes des namspaces
        var_dump(__CLASS__);
        var_dump(__NAMESPACE__);
        var_dump($className);
    }
}
