<?php
namespace ABI\controller;

class Controller
{
    

    public static function viewPage($url)
    {
        require $url;
    }
    
    
    public static function logOut()
    {
        session_start();
        session_destroy();
        header('Location:./index.php?action=connexion');
    }
  
}

?>