<?php
namespace ABI\model;

use Exception;
use \PDO;

/**
 * Database
 */
class Database
{
    protected $db_name;
    protected $db_user;
    protected $db_pass;
    protected $db_host;
    public static $pdo;

    protected static $database;
    
    /**
     * __construct
     * Construction de la base de données
     * @param  mixed $db_name
     * @param  mixed $db_user
     * @param  mixed $db_pass
     * @param  mixed $db_host
     * @return void
     */
    public function __construct($db_name, $db_user='root', $db_pass='', $db_host='localhost')
    {
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
    }
    
    /**
     * getPDO
     *
     * @return PDO
     */
    public static function getPDO(): PDO
    {
        try
        {
            if(self::$pdo===null)
            {
                $pdo= new PDO('mysql:host=localhost;dbname=abi','root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$pdo=$pdo;
            }
            return self::$pdo;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }   
    }
    
        
    /**
     * getUsers
     * Obtentions de l'utilisateur
     * @return void
     */
    public function getUsers ()
    {
        try
        {
            $req=$this->getPDO()->query('SELECT * FROM utilisateur');
            $users=$req->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }    
    /**
     * getUser
     * Obtentions de l'utilisateur
     * @param  mixed $id
     * @return void
     */
    public function getUser(int $id)
    {
        try{
            $req=$this->getPDO()->prepare("SELECT * FROM utilisateur WHERE id_user:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
            
            return $req->fetchAll();
            
           
        }
        catch(Exception $e)
        
        {
            die($e->getMessage()); 
        }

    }    
    /**
     * updateUser
     * Mis à jour de l'utilisateur
     * @param  mixed $id
     * @param  mixed $first_name
     * @param  mixed $last_name
     * @param  mixed $email
     * @param  mixed $password
     * @param  mixed $role
     * @return void
     */
    public function updateUser(int $id, string $first_name, string $last_name, string $email, string $role)
    {
        try
        {
            $req= $this->getPDO()->prepare('UPDATE utilisateur SET first_name= :first_name, last_name= :last_name, email= :email, role= :role WHERE id_user=:id');
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':first_name', $first_name, PDO::PARAM_STR);
            $req->bindValue(':last_name', $last_name, PDO::PARAM_STR);
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':role', $role, PDO::PARAM_STR);
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }    
    /**
     * deleteUser
     * Suppression de l'utilisateur
     * @param  mixed $id
     * @return void
     */
    public function deleteUser(int $id)
    {
        try
        {
            $req= $this->getPDO()->prepare('DELETE FROM utilisateur WHERE id_user=:id');
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }    
    /**
     * addUser
     * Ajout d'un utilisateur
     * @param  mixed $first_name
     * @param  mixed $last_name
     * @param  mixed $email
     * @param  mixed $password
     * @param  mixed $role
     * @return void
     */
    public function addUser(string $first_name, string $last_name, string $email, string $password,string $role)
    {
        try
        {
            $req= $this->getPDO()->prepare("INSERT INTO utilisateur(first_name, last_name, email, password, role) VALUES (:first_name,:last_name,:email,:password,:role)");
            $req->execute([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'password'=>$password,
                'email'=>$email,
                'role'=>$role,
            
            ]);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }    
    /**
     * showUser
     * Affichage de l'utilisateur
     * @param  mixed $value
     * @return void
     */
    public function showUser(string $value)
    {
        try{
            $req= $this->getPDO()->prepare('SELECT * FROM utilisateur WHERE first_name=:first_name OR last_name=:last_name');
            $req->execute([
                'first_name'=>$value,
                'last_name'=>$value
            ]);
            return $req->fetchALL(PDO::FETCH_OBJ);
        
       }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }    
    /**
     * showClients
     * Affichage des clients
     * @param  mixed $value
     * @return void
     */
    public function showClients($value)
    {
        try{
            
            $req= $this::getPDO();
            $requete=$req->prepare("SELECT * FROM clients WHERE RAISONSOCIALE=:raison_sociale OR VILLECLIENT=:ville OR TELEPHONECLIENT=:telephone");
            $requete->execute([
                'raison_sociale'=>$value,
                'ville'=>$value,
                'telephone'=>$value
            ]);
            return $requete->fetchALL();
        
       }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>