<?php


namespace ABI\MainController;
use ABI\model\Clients;
use ABI\model\Secteur;
use ABI\model\Database;
use Exception;

require ('../model/ClientsSearch.php');
/**
 * ClientSearchController
 */
class ClientSearchController
{    
    /**
     * viewClients
     *
     * @return void
     */
    public static function viewClients()
    {
        $results= new Clients('abi');
        return $results->getClients();
       
    }    
    /**
     * addClientAdmin
     *
     * @param  mixed $secteur
     * @param  mixed $raison_sociale
     * @param  mixed $adresse
     * @param  mixed $code_postale
     * @param  mixed $ville
     * @param  mixed $effectif
     * @param  mixed $telephone
     * @return void
     */
    public static function addClientAdmin($secteur, $raison_sociale, $adresse, $code_postale, $ville, $effectif, $telephone)
    {
        $results= new Clients('abi');
        $sect=new Secteur('abi');
        $id_secteur=(int) $sect->getSecteur($secteur);
        $result=$results->addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif, $telephone);
        header('Location:./index.php?action=buisness&successAdd=true');
    
        return $result;
    }    
    /**
     * viewSecteurs
     *
     * @return void
     */
    public static function viewSecteurs()
    {
        try{
            $results= new Secteur('abi');

            $secteurs=$results->getSecteurs();
            foreach($secteurs as $secteur)
            {
               echo '<option>'.$secteur->ACTIVITE.'</option>';

            }
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        
    }    
    /**
     * showClientAdmin
     *
     * @param  mixed $value
     * @return void
     */
    public static function showClientAdmin($value)
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