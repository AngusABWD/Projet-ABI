<?php
session_start();

use ABI\MainController\AdminController;
use ABI\MainController\MainController;
use ABI\MainController\DashboardController;
require('./controller/MainController.php');
require('./controller/AdminController.php');
require('./controller/DashboardController.php');

if (isset($_GET['action'])) {

        if ($_GET['action']=='home')
        {
            $headerActive = 'home';
            MainController::viewPage('./view/visiteur/indexView.php');
        }
        elseif($_GET['action']=='ABIgroup')
        {
            $headerActive = 'ABIgroup';
            MainController::viewPage('./view/visiteur/groupView.php');
        }
        elseif($_GET['action']=='actuality')
        {
            $headerActive = 'actuality';
            MainController::viewPage('./view/visiteur/actualityView.php');
        }
        elseif($_GET['action']=='offer')
        {
            $headerActive = 'offer';
            MainController::viewPage('./view/visiteur/offerView.php');
        }
        elseif($_GET['action']=='contact')
        {
            $headerActive = 'contact';
            MainController::viewPage('./view/visiteur/contactView.php');
        }
        elseif($_GET['action']=='contactDev')
        {
            $footerActive = 'contactDev';
            MainController::viewPage('./view/visiteur/indexView.php');
        }
        elseif($_GET['action']=='mentions')
        {
            $footerActive = 'mentions';
            MainController::viewPage('./view/visiteur/indexView.php');
        }
        elseif($_GET['action']=='connexion')
        
        { 
            MainController::viewPage('./view/visiteur/connexionView.php');         
        }
        elseif($_GET['action']=='dashboard')
        {
                                                      
               if(isset($_POST['emailLog'])&& isset($_POST['passwordLog']))
               {
                  DashboardController::checkUser(htmlentities($_POST['emailLog']),htmlentities($_POST['passwordLog']));
               }
               elseif(
                   !empty($_POST['first_name'])&&!empty($_POST['last_name'])&&
                     !empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['role']))
               {
                  $pass= htmlentities($_POST['password']);
                  $pass= password_hash($pass, PASSWORD_DEFAULT);
                  DashboardController::addUserDashboard(htmlentities($_POST['first_name']),
                                             htmlentities($_POST['last_name']),
                                             htmlentities($_POST['email']),
                                             $pass,
                                             htmlentities($_POST['role']));
               }
               if(isset($_POST['emailLog']) && isset($_POST['passwordLog']))
               {
                  DashboardController::checkUser(htmlentities($_POST['emailLog']),htmlentities($_POST['passwordLog']));
               }
                // Controller Modification et Suppresion des utilisateurs Kevin
               elseif (isset($_POST['modifyUser']) && !empty($_POST['id_user']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) &&
                !empty($_POST['email']) && !empty($_POST['role'])
            ) {
                DashboardController::updateUserDashboard(
                    htmlentities($_POST['id_user']),
                    htmlentities($_POST['first_name']),
                    htmlentities($_POST['last_name']),
                    htmlentities($_POST['email']),
                    htmlentities($_POST['role'])
                );
            } elseif (isset($_POST['deleteUser']) && !empty($_POST['id_user'])) {
                DashboardController::deleteUserDashboard(
                    htmlentities($_POST['id_user'])
                );
            }
            else
               {
               MainController::viewPage('./view/admin/dashboardView.php');
               }

        }
         elseif ($_GET['action']=='logOut')
         {
            MainController::logOut();
         }
         elseif($_GET['action']=='buisness')
         {
            if((!empty($_POST['secteur'])&&!empty($_POST['raison_sociale'])&&!empty($_POST['adresse'])
               &&!empty($_POST['code_postale'])&&!empty($_POST['ville'])
               &&!empty($_POST['effectif'])&&!empty($_POST['telephone'])))
            {
               AdminController::addClientAdmin(  htmlentities($_POST['secteur']),
                                             htmlentities($_POST['raison_sociale']),
                                             htmlentities($_POST['adresse']),
                                             htmlentities($_POST['code_postale']),
                                             htmlentities($_POST['ville']),
                                             htmlentities($_POST['effectif']),
                                             htmlentities($_POST['telephone']));

            // Controller Modification et Suppresion des utilisateurs Patricio                 
            } elseif (isset($_POST['modifyClient']) && !empty($_POST['id_client'])&&!empty($_POST['raison_sociale'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['telephone'])) {
                AdminController::updateClientAdmin(  htmlentities($_POST['id_client']),
                    htmlentities($_POST['raison_sociale']),
                    htmlentities($_POST['telephone']),
                    htmlentities($_POST['adresse']),
                    htmlentities($_POST['ville']),);
            }elseif (isset($_POST['deleteClient']) && !empty($_POST['id_client'])) {
                AdminController::deleteClientAdmin( htmlentities($_POST['id_client']));
            }
            else
            {
                MainController::viewPage('./view/buisness/buisnessView.php');
            }
         }
          
        else
        {
            $headerActive = 'home';
            MainController::viewPage('./view/visiteur/indexView.php');
        }

    } else {
        $headerActive = 'home';
        MainController::viewPage('./view/visiteur/indexView.php');
    }
