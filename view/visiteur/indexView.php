<?php $title='Accueil'; ?>
<?php ob_start(); ?>

<div class="px-0 mx-0 d-none d-md-block banniere">
                <img class="w-100" alt="banniere à créer" src="./public/IMG/bannière.png" height="300px">
                </div>
                <div class="row mx-0">

               
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 col-12 text-center py-4 px-4">
                        <h2 class="titre-section text-center">BIENVENUE A<br> ACTIVE BRETAGNE INFORMATIQUE</h2>
                        <p class="paragraph-section text-center">
                        Créée en 2022, Active Bretagne Informatique est une société de prestations en services d’ingénierie informatique, privilégiant une relation de confiance, de complémentarité et de durabilité avec ses clients.
                        </p>
                    </div>
                    <div class="col-md-2">

                    </div>  

                </div>
                
                <div class="row rejoindre px-0 mx-0">
                    <div class="col-12 col-md-6 mx-0 px-0">
                    <img class="" alt="Image à trouver" src="./public/IMG/Entreprise_responsableDef.png" width="100%">
                    </div>
                    <div class="phrase col-12 col-md-6 text-center p-2">
                        <p class="paragraphe-rejoindre">
                        Nos métiers c’est étudier vos attentes, vous conseiller, créer & développer vos solutions, vous assister, ce sont autant de compétences que Active Bretagne met à votre disposition pour vous fournir les meilleurs produits et services dans le domaine des technologies de l’information et de la communication. Notre société est spécialisée dans les projets au forfait mais aussi à de la prestation en régie, elle intervient essentiellement en région Bretagne et sa clientèle principale est la pme/pmi spécialisée en agro-alimentaire. 
                        </p>
                    </div>

                </div>
                <div class="row rejoindre px-0 mx-0">
                    <div class="phrase col-12 col-md-6 text-center p-2">
                        <p class="paragraphe-rejoindre fs-6">
                        Nous proposons des produits qui soient d’avant-garde et adaptés aux besoins de nos clients. Notre culture d’entreprise se caractérise par un partage de nos valeurs au quotidien au sein des équipes et avec nos clients. Nos professionnels constituent une valeur forte de notre entreprise. Ils possèdent une double compétence, technique et métier et sont force de propositions en adoptant une démarche proactive.
                    </div>
                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="Image à trouver" src="./public/IMG/dev.jpg" width="100%">
                    </div>
                </div>
                
<!-- encart de geolocalisation -->   
                    <div class= "row p-0 m-0">
                    <div class="embed-responsive embed-responsive-4by3 col-12 col-md-6 mx-0 px-0">
                        <iframe class="w-100 embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21097.87302138971!2d-1.546207738964226!3d48.62450163982578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ea92183c4dc1d%3A0x3516b3d42512c1e1!2sAbbaye%20du%20Mont-Saint-Michel!5e0!3m2!1sfr!2sfr!4v1650459863705!5m2!1sfr!2sfr"  referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="Image à trouver" src="./public/IMG/map.png">
                        
                    </div>
                    </div>

          
<?php $content=ob_get_clean(); ?>

<?php require 'template.php'; ?>


<!--width="300" height="300"  style="border:0" allowfullscreen="" loading="lazy" -->