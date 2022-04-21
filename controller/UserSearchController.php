<?php
namespace ABI\MainController;
use \ABI\model\Database;
require('../controller/AuthController.php');


/**
 * UserSearchController
 */
class UserSearchController
{    
       
    /**
     * modifyUserSearch
     *
     * @param  mixed $value
     * @return void
     */
    public static function modifyUserSearch($value)
    {
        $results= new Database('abi');
        return $results->showUser($value);
    }
    
   
}
?>