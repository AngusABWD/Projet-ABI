<?php

namespace ABI\model;
use \PDO;
use \Exception;
require ('./model/Database.php');

/**
 * Client
 */
class Client extends Database
{

    
    /**
     * getClients
     * Obtention des clients
     * @return void
     */
    public function getClients()
    {
        try
        {
            $req=parent::getPDO()->query('SELECT * FROM clients');
            $users=$req->fetchAll();
            return $users;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }    
    /**
     * getClient
     * Obtention du client
     * @param  mixed $id_client
     * @return void
     */
    public static function getClient($id_client)
    {
        try
        {
            $req=parent::getPDO();
            $result=$req->prepare('SELECT IDSECT FROM secteur_activite WHERE activite=:id_client');
            $result->bindValue(':id_client', $id_client, PDO::PARAM_INT);
            $result->execute();
            
            return $result->fetch();
            

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }    
    /**
     * addClient
     * Ajout d'un client
     * @param  mixed $id_secteur
     * @param  mixed $raison_sociale
     * @param  mixed $adresse
     * @param  mixed $code_postale
     * @param  mixed $ville
     * @param  mixed $effectif
     * @param  mixed $telephone
     * @return void
     */
    public function addClient($id_secteur,$raison_sociale,$adresse,$code_postale,$ville,$effectif,$telephone)
    {
        try
        {
            $req= parent::getPDO()->prepare("INSERT INTO clients (IDSECT, RAISONSOCIALE, ADRESSECLIENT, CODEPOSTALCLIENT, VILLECLIENT, EFFECTIF, TELEPHONECLIENT) VALUES (:id_sect,:raison_sociale,:adresse,:code_postale,:ville, :effectif, :telephone)");
                    $req->bindValue(':id_sect',$id_secteur, PDO::PARAM_INT );
                    $req->bindValue(':raison_sociale',$raison_sociale, PDO::PARAM_STR);
                    $req->bindValue(':adresse',$adresse, PDO::PARAM_STR );
                    $req->bindValue(':code_postale',$code_postale, PDO::PARAM_INT );
                    $req->bindValue(':ville',$ville, PDO::PARAM_STR );
                    $req->bindValue(':effectif',$effectif, PDO::PARAM_INT );
                    $req->bindValue(':telephone',$telephone, PDO::PARAM_INT );
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
/**
     * updateClient
     * Ajout d'un client
     * @param  mixed $id_secteur
     * @param  mixed $raison_sociale
     * @param  mixed $adresse
     * @param  mixed $code_postale
     * @param  mixed $ville
     * @param  mixed $effectif
     * @param  mixed $telephone
     * @return void
     */

       //  Function UpdateClient  qui permet  la modification du Client  dans la BDD  Patricio 
    public function updateClient($id_client,$raison_sociale, $telephone,$adresse,$ville)
    {
        try
        {
            $req= parent::getPDO()->prepare("UPDATE clients SET  RAISONSOCIALE= :raison_sociale, TELEPHONECLIENT= :telephone, ADRESSECLIENT= :adresse, VILLECLIENT= :ville WHERE IDCLIENT= :id_client");
                    $req->bindValue(':id_client',$id_client, PDO::PARAM_INT );  
                    $req->bindValue(':raison_sociale',$raison_sociale, PDO::PARAM_STR);
                    $req->bindValue(':telephone',$telephone, PDO::PARAM_INT );
                    $req->bindValue(':adresse',$adresse, PDO::PARAM_STR );
                    $req->bindValue(':ville',$ville, PDO::PARAM_STR );
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
 /**
     * deleteClient
     * Suppression de l'utilisateur
     * @param  mixed $id
     * @return void
     */

     //  Function UpdateClient  qui permet  la suppression  du Client  dans la BDD  Patricio 
    public function deleteClient(int $id)
    {
        try
        {
            $req= $this->getPDO()->prepare('DELETE FROM clients WHERE IDCLIENT=:id');
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    } 
}

?>