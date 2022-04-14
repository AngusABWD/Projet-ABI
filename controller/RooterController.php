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
            MainController::viewPage('./view/indexView.php');
        }
        elseif($_GET['action']=='ABIgroup')
        {
            MainController::viewPage('./view/groupView.php');
        }
        elseif($_GET['action']=='actuality')
        {
            MainController::viewPage('./view/actualityView.php');
        }
        elseif($_GET['action']=='offer')
        {
            MainController::viewPage('./view/offerView.php');
        }
        elseif($_GET['action']=='contact')
        {
            MainController::viewPage('./view/contactView.php');
        }
        elseif($_GET['action']=='connexion')
        
        { 
            MainController::viewPage('./view/connexionView.php');
           
        }
        elseif($_GET['action']=='dashboard')
        {
                                                      
               if(isset($_POST['emailLog'])&& isset($_POST['passwordLog']))
               {
                     DashboardController::checkUser(htmlentities($_POST['emailLog']),htmlentities($_POST['passwordLog']));
               }
               elseif(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&
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
              
               else
               {
               MainController::viewPage('./view/dashboardView.php');
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
            }
            else
            {
                MainController::viewPage('./view/buisnessView.php');
            }
         }
          
        else
        {
        
           MainController::viewPage('./view/indexView.php');
        }

    } else {
        MainController::viewPage('./view/indexView.php');
    }
