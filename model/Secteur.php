<?php


namespace ABI\model;

use Exception;
use \PDO;

/**
 * Secteur
 */
class Secteur extends Database
{
    
    /**
     * getSecteurs
     *
     * @return void
     */
    public static function getSecteurs()
    {
        try
        {
            $req=parent::getPDO();
            $secteurs=$req->query('SELECT * FROM secteur_activite');
            return $secteurs->fetchAll(PDO::FETCH_OBJ);
               
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }    
    /**
     * getSecteur
     *
     * @param  mixed $secteur
     * @return int
     */
    public static function getSecteur(string $secteur):int
    {
        try
        {
            $req=parent::getPDO();
            $result=$req->prepare('SELECT IDSECT FROM secteur_activite WHERE activite=:activite');
            $result->execute([
                ':activite'=>$secteur
            ]);
             $sect=$result->fetch(PDO::FETCH_OBJ);
             var_dump(intval($sect->IDSECT));
             return intval($sect->IDSECT);
            

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}

?>