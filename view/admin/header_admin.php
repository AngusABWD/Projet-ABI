<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="./public/styles/dashboard.css">
<title><?= $title ?></title>
</head>
<body>

<div class='container-fluid'>
 
    <header class='container'>
       <div class='row mt-4'>
            <div class='col p-4'>
                <a href="index.php?action=dashboard" data-toggle="tooltip" title="Accueil"><img src="./public/IMG/home.png" alt="Image Home à créer" width="50px" height="50px"></a>
            </div>
            <div class='col p-4'>
                <ul class="nav flex-column text-center">
                   <li><a class="" href="./index.php?action=buisness"><img src="./public/IMG/commerce.png" alt="Image menu gestion commerciale a créer" class="gestion"></a></li>
                   <li><a href="./index.php?action=buisness" class="nav-link">Gestion commerciale</a></li> 
                </ul>
                
            </div>
            <div class='col p-4'>         
                <ul class="nav flex-column text-center">
                    <li><a class="" href="#"><img src="./public/IMG/rh.png" alt="Image menu gestion RH a créer" class="gestion"></a></li>
                    <li><a href='#' class="nav-link">Gestion RH</a></li> 
                    </ul>
                </div>
                <div class="col p-4">
                <ul class="nav flex-column text-center">
                    <li><a class="" href="#"><img src="./public/IMG/folder.png" alt="Image menu gestion des projets a créer"class="gestion"></a></li>
                    <li><a href="#" class="nav-link">Gestion des projets</a></li> 
                </ul>
            </div>
       </div> 
</header>

