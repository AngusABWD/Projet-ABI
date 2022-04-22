<?php


use ABI\MainController\MainController;
use \ABI\MainController\AuthController;
use ABI\model\Database;



$title='Tableau de bord';


AuthController::checkRoleAdmin();
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];

ob_start(); 
?>
<link rel="stylesheet" href="./public/styles/dashboard.css">
<hr class="py-0 my-0">
<div class='row p-2 bonjour mx-0'>
        <div class='col'>
        <div class="p-3 alert cadre">Vous êtes connecté en tant que <?= strtoupper($first_name).' '.strtoupper($last_name); ?></div>

        </div>
        <div class="col text-right">
        <a class="nav-link" href="./index.php?action=logOut" data-toggle="tooltip" title="Se déconnecter">Déconnexion<span class="p-3"><img class="logout" src="public/IMG/deconnection.png" alt="logo"></span></a>

        </div>

</div>

<hr class="py-0 my-0">
<?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success">
                        Utilisateur ajouté avec succès!

                    </div>
                <?php
                    }
                
                    if(isset($_GET['successSupp']))
                    {
                ?>
                        <div class="alert alert-success">
                        Utilisateur effacé avec succès!

                        </div>
                <?php
                    }
                    if(isset($_GET['successUpdate']))
                    {
                ?>
                    <div class="alert alert-success">
                        Utilisateur modifié avec succès!

                    </div>
                <?php
                    }
                    ?>

<div class="row modif text-center mb-4">
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="./index.php?action=dashboard&amp;action3=dashboardList" class="nav-link"><img src="./public/IMG/liste.png" alt="Image utilisateurs à créer" class="icone"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="./index.php?action=dashboard&amp;action3=dashboardList">Afficher les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="./index.php?action=dashboard&amp;action3=modifyUser" class="nav-link"><img src="./public/IMG/modifier.png" alt="Image modifier utilisateurs à créer" class="icone"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="./index.php?action=dashboard&amp;action3=modifyUser">Modifier les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="./index.php?action=dashboard&amp;action3=addUser" class="nav-link"><img src="./public/IMG/ajouter.png" alt="Image ajouter utilisateurs à créer" class="icone"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="./index.php?action=dashboard&amp;action3=addUser">Ajouter un utilisateur</a>
                </li>   
            </ul>
               
        </div>

        <div class="col">
        <ul class="nav nav flex-column">
            <li class="nav-item">
                <a href="./index.php?action=dashboard&amp;action3=deleteUser"  class="nav-link"><img src="./public/IMG/supprimer.png" alt="Image supprimer utilisateurs à créer" class="icone"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?action=dashboard&amp;action3=deleteUser">Supprimer un utilisateur</a>
            </li>
        </ul>

    </div>
</div>


<?php
if (isset($_GET['action3'])) {

    if ($_GET['action3'] === 'dashboardList') {
        MainController::viewpage('./view/admin/listView.php');

    } elseif ($_GET['action3'] === 'addUser') {
        MainController::viewpage('./view/admin/addUserView.php');

    } elseif ($_GET['action3'] === 'modifyUser') {
        MainController::viewpage('./view/admin/modifyUserView.php');

    } elseif ($_GET['action3'] === 'updateUser') {
        if (isset($_POST["id_user"])) {
            $id = $_GET['id_user'];
            $result = new Database('abi');
            $result = $data->updateUser($_POST["id_user"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["role"]);
            MainController::viewPage($root . './view/admin/listView.php');
        } else {
            MainController::viewPage($root . './view/admin/updateUserView.php');
        }
    } elseif ($_GET['action3'] === 'deleteUser') {
        if (isset($_GET['id_user'])) {
            $id = $_GET['id_user'];
            $results = new Database('abi');
            $results->deleteUser($id);
        }
        MainController::viewpage('./view/admin/deleteUserView.php');
    }
}
?>
   </div>         

    <?php $content=ob_get_clean(); ?>

<?php require 'template_admin.php'; ?>
   

