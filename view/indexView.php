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
                
<!-- encart de geolocalisation -->                
                    <div class="embed-responsive embed-responsive-4by3 col-12 col-md-6 mx-0 px-0">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21097.87302138971!2d-1.546207738964226!3d48.62450163982578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ea92183c4dc1d%3A0x3516b3d42512c1e1!2sAbbaye%20du%20Mont-Saint-Michel!5e0!3m2!1sfr!2sfr!4v1650459863705!5m2!1sfr!2sfr" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
<?php $content=ob_get_clean(); ?>

<?php require 'template.php'; ?>
