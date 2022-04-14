<?php $title='Acceuil'; ?>
<?php ob_start(); ?>

<div class="px-0 mx-0 d-none d-md-block banniere">
                        <img class="w-100" alt="banniere à créer" src="./public/IMG/" height="300px">
                </div>
                <div class="row mx-0">

               
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 col-12 text-center py-4 px-4">
                        <h2 class="titre-section text-center">Titre présentation à créer</h2>
                        <p class="paragraph-section text-center">
                        présentation à créer
                        </p>
                        <!--Faire le liens du bouton avec GROUP ABI-->
                        <button class="btn btn-primary">DÉCOUVRIR ABI</button>

                    </div>
                    <div class="col-md-2">

                    </div>  

                </div>
                
                <div class="row rejoindre px-0 mx-0">
                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="Image à trouver" src="./public/IMG/" width="100%">
                    </div>
                    <div class="col-12 col-md-6 text-center p-4">
                        <h3 class="titre-rejoindre">Titre présentation 2 à créer</h3>
                        <p class="paragraphe-rejoindre">
                           présentation 2 à créer
                        </p>
                    </div>

                </div>
                <div class="row rejoindre px-0 mx-0">
                    <div class="col-12 col-md-6 text-center p-4">
                        <h3 class="titre-rejoindre">Titre présentation 3 à créer</h3>
                        <p class="paragraphe-rejoindre">
                        présentation 3 à créer
                        
                    </div>
                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="Image à trouver" src="./public/IMG/" width="100%">
                    </div>
                    

                </div>
<?php $content=ob_get_clean(); ?>

<?php require 'template.php'; ?>
