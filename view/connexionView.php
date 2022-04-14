<?php $title='Se connecter'; ?>

<?php ob_start() ?>

<div class='section-form pb-5'>
    
    <hr class="my-0 py-0">
           <div class="container formulaire mt-5 w-75 py-5">
               <form action="./index.php?action=dashboard" method="POST">
               <?php
                    if(isset($_GET['error']))
                    {
                ?>
                    <div class="alert alert-danger">
                            Email ou mot de passe incorrect!

                    </div>
                <?php
                    }
                ?>
                   <div class="form-group">
                        <label for="emailLog">Identifiant ou Email: </label>
                        <input  class="form-control" value='' type="text" name="emailLog" id='emailLog'>
                    </div>
                    <div class="form-group">
                        <label for="passwordLog">Mot de passe: </label>
                        <input class="form-control" value='' type="password" name="passwordLog" id='passwordLog'>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input mt-2" type="checkbox"> Se souvenir de moi
                        </label>
                    <div class="mt-4 text-center bouttons">
                        <button type="submit" class="btn btn-success">Connexion</button>
                    </div>
               </form>

           </div> 
</div>

<?php $content=ob_get_clean(); ?>

<?php require 'template.php'; ?>