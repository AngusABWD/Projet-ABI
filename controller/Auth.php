<?php
namespace ABI\MainController;
use \PDO;
use \ABI\model\Database;



class Auth

{
    public $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
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
            var_dump($user);
                $_SESSION['id']= $user[0];
                echo $user[0];
                $_SESSION['first_name']=$user[1];
                $_SESSION['last_name']=$user[2];
            return $user;
            
        }
        return null;

    }
    public static function checkRoleAdmin():string
    {
        $data= new Database('abi');
        $auth= new Auth($data->getPDO());
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

    public static function checkRoleBuisness():string
    {
        $data= new Database('abi');
        $auth= new Auth($data->getPDO());
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