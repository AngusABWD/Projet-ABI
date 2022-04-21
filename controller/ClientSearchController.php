<?php


namespace ABI\MainController;
use ABI\model\Database;
use Exception;

require ('../model/Database.php');
/**
 * ClientSearchController
 * Controller pour la recherche de client
 */
class ClientSearchController
{    
    /**
     * showClientSearch
     * Recherche les clients en database pour les afficher
     * @param  mixed $value
     * @return void
     */
    public static function showClientSearch($value)
    {
        try
        {
            $results= new Database('abi');
        $result=$results->showClients($value);
       
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        return $result;
    }
    
    
}




?>