<?php
session_start();

use ABI\controller\Buisness;
use ABI\controller\Controller;
use ABI\controller\Dashboard;
require ('./controller/Controller.php');
require ('./controller/Buisness.php');
require ('./controller/Dashboard.php');

if (isset($_GET['action'])) {


        if ($_GET['action']=='home')
        {
            Controller::viewPage('./view/indexView.php');
        }
        elseif($_GET['action']=='ABIgroup')
        {
            Controller::viewPage('./view/groupView.php');
        }
        elseif($_GET['action']=='actuality')
        {
            Controller::viewPage('./view/actualityView.php');
        }
        elseif($_GET['action']=='offer')
        {
            Controller::viewPage('./view/offerView.php');
        }
        elseif($_GET['action']=='contact')
        {
            Controller::viewPage('./view/contactView.php');
        }
        elseif($_GET['action']=='connexion')
        
        { 
            Controller::viewPage('./view/connexionView.php');
           
        }
        elseif($_GET['action']=='dashboard')
        {
                                                      
               if(isset($_POST['emailLog'])&& isset($_POST['passwordLog']))
               {
                     Dashboard::checkUser(htmlentities($_POST['emailLog']),htmlentities($_POST['passwordLog']));
               }
               elseif(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&
                     !empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['role']))
               {
                  $pass= htmlentities($_POST['password']);
                  $pass= password_hash($pass, PASSWORD_DEFAULT);
                  Dashboard::addUserDashboard(htmlentities($_POST['first_name']),
                                             htmlentities($_POST['last_name']),
                                             htmlentities($_POST['email']),
                                             $pass,
                                             htmlentities($_POST['role']));
               }
              
               else
               {
               Controller::viewPage('./view/dashboardView.php');
               }

        }
         elseif ($_GET['action']=='logOut')
         {
            Controller::logOut();
         }
         elseif($_GET['action']=='buisness')
         {
            if((!empty($_POST['secteur'])&&!empty($_POST['raison_sociale'])&&!empty($_POST['adresse'])
               &&!empty($_POST['code_postale'])&&!empty($_POST['ville'])
               &&!empty($_POST['effectif'])&&!empty($_POST['telephone'])))
            {
               Buisness::addClientBuisness(  htmlentities($_POST['secteur']),
                                             htmlentities($_POST['raison_sociale']),
                                             htmlentities($_POST['adresse']),
                                             htmlentities($_POST['code_postale']),
                                             htmlentities($_POST['ville']),
                                             htmlentities($_POST['effectif']),
                                             htmlentities($_POST['telephone']));
            }
            else
            {
                Controller::viewPage('./view/buisnessView.php');
            }
         }
          
        else
        {
        
           Controller::viewPage('./view/indexView.php');
        }

    } else {
        Controller::viewPage('./view/indexView.php');
    }
