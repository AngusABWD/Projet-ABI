<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="../public/IMG/abi_logo.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/styles/style.css">
 
    <title><?=$title; ?></title>
</head>
<body>
    <div class="container-fluid px-0">
        <header class="container px-0 mt-3">
            <div class="row logo mx-0 d-flex align-items-center">
                <div class="col p-4">
                <a href="/index.php"><img alt="logo a ajouter" src="./public/IMG/ABI.png" class="img-fluid"></a>
                    
                </div>
                <div class="col p-4">
                <a href="/index.php"><img alt="la bretagne" src="./public/IMG/drapeau.png" class="drapeau"></a>
                    
                </div>
                <div class="col mt-4 pt-4 text-left d-md-block d-none">
                    <h4 class="slogan"><img alt="slogan" src="./public/IMG/slogan.png" class="img-fluid"></h4>
                </div>
                <!-- menu burger-->
                <div class="col-2 d-md-none d-block dropdown dropleft">
                    <img alt='menu-burger' src="./public/IMG/menu-burger.png" class="img-fluid icone" width="100%" data-toggle="dropdown">
                        <div class="dropdown-menu">
                            <!--liens a ajouter -->
                            <a class="dropdown-item" href="/index.php">Acceuil</a>
                            <a class="dropdown-item" href="#">Groupe ABI</a>
                            <a class="dropdown-item" href="#">Actualité</a>
                            <a class="dropdown-item" href="#">Nos offres</a>
                            <a class="dropdown-item" href="#">Contact</a>
                        </div> 

                </div>
                <div class="col-2 d-md-none d-block">
                   <img alt="Icone profil à ajouter" src="./public/IMG/" class="img-fluid icone" width="100%"> 
                </div>

               
                
            </div>
            <hr class="my-0 py-0">
            <nav class="menu navbar navbar-expand d-none d-md-block">
                <ul class="navbar-nav d-flex justify-content-around">
                    <!--Mettre la classe Active en place sur le Menu-->
                <li class="nav-item <?php global $headerActive; if ($headerActive =='home'):?> active <?php endif?>">
                        <a class="nav-link" href="home">Accueil</a>
                    </li>
                    <li class="nav-item <?php global $headerActive; if ($headerActive =='ABIgroup'):?>  active <?php endif?>">
                        <a class="nav-link" href="ABIgroup">La Société</a>
                    </li>
                    <li class="nav-item <?php global $headerActive; if ($headerActive =='actuality'):?>  active <?php endif?>">
                        <a class="nav-link" href="actuality">Actualités</a>
                    </li>
                    <li class="nav-item <?php global $headerActive; if ($headerActive =='offer'):?>  active <?php endif?>">
                        <a class="nav-link" href="offer">Nos Services</a>
                    </li>
                    <li class="nav-item <?php global $headerActive; if ($headerActive =='contact'):?>  active <?php endif?>">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item espace-membre d-flex<?php if ($_SERVER['SCRIPT_NAME']==='connexion'):?> active <?php endif?>">
                        <i class="fas fa-user-alt p-2 mt-1 connexion"></i><a class="nav-link" href="connexion">Connexion</a>
                    </li>

                </ul>
               
                 
            </nav>
           
            
        </header>