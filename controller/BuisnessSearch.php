<?php


namespace ABI\controller;
use ABI\model\Clients;
use ABI\model\Secteur;
use ABI\model\Database;
use Exception;

require ('../model/ClientsSearch.php');
class BuisnessSearch
{
    public static function viewClients()
    {
        $results= new Clients('abi');
        return $results->getClients();
       
    }
    public static function addClientBuisness($secteur, $raison_sociale, $adresse, $code_postale, $ville, $effectif, $telephone)
    {
        $results= new Clients('abi');
        $sect=new Secteur('abi');
        $id_secteur=(int) $sect->getSecteur($secteur);
        $result=$results->addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif, $telephone);
        header('Location:./index.php?action=buisness&successAdd=true');
    
        return $result;
    }
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
    public static function showClientBuisness($value)
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