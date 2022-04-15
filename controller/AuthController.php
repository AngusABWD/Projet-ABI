<?php
namespace ABI\MainController;
use \PDO;
use \ABI\model\Database;



/**
 * AuthController
 */
class AuthController

{    
    /**
     * pdo
     *
     * @var mixed
     */
    public $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }    
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        if(session_status()===PHP_SESSION_NONE)
        {
            session_start();
        }
        $id=$_SESSION['id'] ?? null;
        
        if($id===null)
        {
            return null;
        }
        $query= $this->pdo->prepare('SELECT * FROM utilisateur WHERE id_user= ?');
        $query->execute([$id]);
        $user=$query->fetch();
         return $user ?: null;// revoi l'utilisateur si c false il revoi null
       
    }    
    /**
     * login
     *
     * @param  mixed $user_name
     * @param  mixed $password
     * @return void
     */
    public function login(string $user_name, string $password)
    {
        $query= $this->pdo->prepare('SELECT * FROM utilisateur WHERE email=:username');
        $query->execute(['username'=>$user_name]);
        $user=$query->fetch();
        
        if($user===false)
        {
            return null;
        }
        if(password_verify($password, $user[4]))
        {
            if(session_status()=== PHP_SESSION_NONE)
            {
                session_start();
            }
                $_SESSION['id']= $user[0];
                $_SESSION['first_name']=$user[1];
                $_SESSION['last_name']=$user[2];

            return $user;
    
        }
        return null;

    }    
    /**
     * checkRoleAdmin
     *
     * @return string
     */
    public static function checkRoleAdmin():string
    {
        $data= new Database('abi');
        $auth= new AuthController($data->getPDO());
        $user=$auth->user();

        if($user!==null&& $user[5]==='Administrateur')
        {
            if(session_status()===PHP_SESSION_NONE)
            {
                
                session_start();
            }
            return $user[5];
         
        }
        else
        {
        header('Location:./index.php?action=connexion&forbidden=1');
        exit();
        }
    }
    
    /**
     * checkRoleCom
     *
     * @return string
     */
    public static function checkRoleCom():string
    {
        $data= new Database('abi');
        $auth= new AuthController($data->getPDO());
        $user=$auth->user();

        if ($user!==null&& ($user['role']==='Commercial'|| $user['role']==='Administrateur'))
                                            
        {
            if(session_status()===PHP_SESSION_NONE)
            {
                session_start();
            }
            return $user['role'];
        }
        else
        {
        header('Location:./index.php?action=connexion&forbidden=1');
        exit();
        }
    }
   
}


?>