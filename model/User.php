<?php 

use \ABI\model\Database;
class User
{
    private static $database;

    public static function getDatabase()
    {
        if (self::$database===null)
        {
        self::$database=new Database('abi');
        }
        return self::$database;
    }

    public function getUsers ()
    {

    }
    public function getUser($email, $password)
    {

    }
}

?>
