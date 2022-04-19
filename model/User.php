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
     *
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
     *
     * @return void
     */
    public function getUsers ()
    {

    }    
    /**
     * getUser
     *
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    public function getUser($email, $password)
    {

    }
}

?>
