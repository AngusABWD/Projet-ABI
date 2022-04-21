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
     * viewUsers
     * Vue des utilisateurs
     * @return void
     */
    public static function viewUsers()
    {
        $results= new Database('abi');
        return $results->getUsers();
    
       
    }
        
    /**
     * checkUser
     * Vérification de l'utilisateur
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    public static function checkUser($email, $password)
    {
        $data= new Database('abi');
        $auth= new AuthController($data->getPDO());

        $result=$auth->login($email,$password);
        
        if(!empty($result))
        {
        
            if($result[5]==='Administrateur')
            {
                header('Location:./index.php?action=dashboard');
            }
            elseif($result[5]==='Commercial')
            {
                header('Location:./index.php?action=buisness');
            }
        }
        else
        {
            header('Location:./index.php?action=connexion&error=true');
        }
    }    
    /**
     * addUserDashboard
     * Ajout dans le tableau de bord de l'utilisateur
     * @param  mixed $first_name
     * @param  mixed $last_name
     * @param  mixed $email
     * @param  mixed $password
     * @param  mixed $role
     * @return void
     */
    public static function addUserDashboard($first_name, $last_name, $email, $password, $role)
    {
        $results= new Database('abi');
        $result=$results->addUser($first_name,$last_name,$email,$password,$role);
        header('Location:./index.php?action=dashboard&successAdd=true');
       
        return $result;
    }


        
    /**
     * modifyUserDashboard
     * Modification de l'utilisateur dans le tableau de bord
     * @param  mixed $value
     * @return void
     */
    public static function modifyUserDashboard($value)
    {
        $results= new Database('abi');
        return $results->showUser($value);
    }
    
   
}
?>