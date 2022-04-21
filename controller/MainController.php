<?php
namespace ABI\MainController;

/**
 * MainController
 */
class MainController
{
    
    
    /**
     * viewPage
     * Vue de la page
     * @param  mixed $url
     * @return void
     */
    public static function viewPage($url)
    {
        require $url;
    }
    
        
    /**
     * logOut
     * Ecran de déconnexion
     * @return void
     */
    public static function logOut()
    {
        session_start();
        session_destroy();
        header('Location:./index.php?action=connexion');
    }
  
}

?>