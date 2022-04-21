<?php 

use \ABI\model\Database;
/**
 * User
 */
class User
{
    private static $database;
    
    /**
     * getDatabase
     * Obtention de la base de données
     * @return void
     */
    public static function getDatabase()
    {
        if (self::$database===null)
        {
        self::$database=new Database('abi');
        }
        return self::$database;
    }
    
    /**
     * getUsers
     * Obtention des utilisateurs
     * @return void
     */
    public function getUsers ()
    {

    }    
    /**
     * getUser
     * Obtention des utilisateurs
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    public function getUser($email, $password)
    {

    }
}

?>
