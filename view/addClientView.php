<?php   
use ABI\MainController\Buisness;
?>
<div class="row w-75 p-4 mx-auto formAdd">
       <div class="col">
        <h3 class="text-center mb-4 p-4">Ajouter un client</h3>  
            <form action="../index.php?action=buisness" method="POST">
                <div class="form-group">
                    <label for="secteur">
                        Secteur d'activité
                    </label>
                    <select name="secteur" id='secteur'class="form-control">
                    <?php

                        Buisness::viewSecteurs();
                    ?>

                    </select> 

                    </div>
                <div class="form-group">
                  <label for="raison_sociale">
                    Raison Sociale
                  </label>
                  <input type="text" name="raison_sociale" id='raison_sociale' class="form-control">  

                </div>
               
                <div class="form-group">
                  <label for="adresse">
                Adresse
                  </label>
                  <input type="text" name="adresse" id='adresse'class="form-control">  

                </div>
                <div class="form-group">
                  <label for="code_postale">
                Code Postale
                  </label>
                  <input type="text" name="code_postale" id='code_postale'class="form-control">  

                </div>
                <div class="form-group">
                  <label for="ville">
                Ville
                  </label>
                  <input type='text' name="ville" id='ville' class="form-control"> 
                     
                </div>
                <div class="form-group">
                  <label for="effectif">
                Effectif
                  </label>
                  <input type='text' name="effectif" id='effectif' class="form-control"> 
                     
                </div>
                <div class="form-group">
                  <label for="telephone">
                Téléphone
                  </label>
                  <input type='text' name="telephone" id='telephone' class="form-control"> 
                     
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>

                

            </form>
       </div>