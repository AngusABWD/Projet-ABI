<?php
namespace ABI\model;

use Exception;
use \PDO;
use User;

class Database
{
    protected $db_name;
    protected $db_user;
    protected $db_pass;
    protected $db_host;
    public static $pdo;

    protected static $database;

    public function __construct($db_name, $db_user='root', $db_pass='', $db_host='localhost')
    {
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
    }

    public static function getPDO(): PDO
    {
        try
        {
            if(self::$pdo===null)
            {
                $pdo= new PDO('mysql:host=localhost:3307;dbname=abi','root', '');
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
    public function updateUser(int $id, string $role)
    {
        try
        {
            $req= $this->getPDO()->prepare('UPDATE utilisateur SET role= :role WHERE id_user=:id');
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':role', $role, PDO::PARAM_STR);
            $req->execute();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
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