<div class="row w-75 p-4 mx-auto formAdd">
       <div class="col">
        <h3 class="text-center mb-4 p-4">Ajouter un client</h3>  
            <form action="../index.php?action=buisness" method="POST">
                <div class="form-group">
                    <label for="secteur">
                        Secteur d'activité
                    </label>
                      <select  name="secteur" id="secteur" class="form-select" aria-label="Selection du secteur" required>
                          <option value="" selected disabled>Secteurs</option>
                          <option value="Agro Alimentaire">Agro Alimentaire</option>
                          <option value="industriel">Industriel</option>
                          <option value="Commercial">Commercial</option>
                          <option value="Informatique">Informatique</option>
                      </select> 
                    </div>
                <div class="form-group">
                  <label for="raison_sociale">
                    Raison Sociale
                  </label>
                  <input type="text" name="raison_sociale" id='raison_sociale' class="form-control" minlength="1" maxlength="50" placeholder="longueur maximale 50 charactères" required>  

                </div>
                <div class="form-group">
                  <label for="adresse">
                Adresse
                  </label>
                  <input type="text" name="adresse" id='adresse'class="form-control" minlength="1" maxlength="32" placeholder="longueur maximale 32 charactères" required>  

                </div>
                <div class="form-group">
                  <label for="code_postale">
                Code Postale
                  </label>
                  <input type="text" name="code_postale" id='code_postale'class="form-control" minlength="1" maxlength="5" placeholder="longueur maximale 5 charactères" required>  

                </div>
                <div class="form-group">
                  <label for="ville">
                Ville
                  </label>
                  <input type='text' name="ville" id='ville' class="form-control" minlength="1" maxlength="25" placeholder="longueur maximale 25 charactères" required> 
                     
                </div>
                <div class="form-group">
                  <label for="effectif">
                Effectif
                  </label>
                  <input type='number' name="effectif" id='effectif' class="form-control" min="1" placeholder="Nombre avec un minimum de 1" required> 
                     
                </div>
                <div class="form-group">
                  <label for="telephone">
                Téléphone
                  </label>
                  <input type='number' name="telephone" id='telephone' class="form-control" min='1' max='9999999999' placeholder="10 chiffres maximum" required> 
                     
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>

                

            </form>
       </div>