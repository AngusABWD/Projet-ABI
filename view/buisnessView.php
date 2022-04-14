<?php

use \ABI\controller\Auth;

$title='Gestion commerciale';

$role=Auth::checkRoleBuisness();
ob_start(); 
?>
<div class="row navbar navbar-expand-sm mx-0 px-0">
    <div class="col pt-2">
        <p class='p-1 alert-success'>Vous étes connecté en tant que <?=strtoupper($_SESSION['first_name']).' '.strtoupper($_SESSION['last_name']); ?></p>

    </div>
    <div class="col-2">
        <ul class="navbar-nav">
            <li class="navbar-item"><a href="./index.php?action=buisness" class="navbar-link"><i class="fas fa-home"></i></a></li>
            <li class="navbar-item pl-2"><a href="./index.php?action=buisness" class="navbar-link">Accueil</a></li>
        </ul>
    </div>
    <?php
     if($role==='Administrateur')
     {
    ?>
    <div class="col-3">
        <ul class="navbar-nav">
            <li class="navbar-item"><a href="./index.php?action=dashboard" class="navbar-link"><i class="fas fa-tachometer-alt"></i></a></i></li>
            <li class="navbar-item pl-2"><a href="./index.php?action=dashboard" class="navbar-link">Tableau de bord</a></li>
        </ul>
    </div>

    <?php
   }
    ?>
    <div class="col-2">
        <ul class="navbar-nav">
            <li class="navbar-item"><a href="./index.php?action=logOut" class="navbar-link"><i class="fas fa-sign-out-alt"></i></a></li>
            <li class="navbar-item pl-2"><a href="./index.php?action=logOut" class="navbar-link">Déconnexion</a></li>
        </ul>
    </div>

</div>
<hr class="p-0 m-0">

<div class="row">
    
        <?php require('buisnessLateral.php'); ?>
        <?php require('clientView.php'); ?>
  
    
</div>
<?php $content=ob_get_clean(); ?>

<?php require 'template_buisness.php'; ?>
   
