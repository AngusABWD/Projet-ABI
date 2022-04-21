<?php


namespace ABI\MainController;
use ABI\model\Client;
use ABI\model\Secteur;
use Exception;
require ('./model/Client.php');
require ('./model/Secteur.php');
class AdminController
{    
    /**
     * viewClients
     * Vue du client
     * @return void
     */
    public static function viewClients()
    {
        $results= new Client('abi');
        return $results->getClients();
       
    }   
    
    public static function detailCLient(){
        $results = new client('abi');
        $result=$results->getClients();
        return $result;
        
    
    }
    public static function modifierClient($raison_sociale, $telephone, $adresse, $ville){
        $results = new Client('abi');
        

    }


    /**
     * addClientAdmin
     * Ajoute un administrateur client
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
        $results= new Client('abi');
        $sect=new Secteur('abi');
        $id_secteur=(int) $sect->getSecteur($secteur);
        $result=$results->addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif, $telephone);
        header('Location:./index.php?action=buisness&successAdd=true');
    
        return $result;
    }    
    /**
     * viewSecteurs
     * Vue des secteurs
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
}

?>