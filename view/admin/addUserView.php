
<div class="row w-75 p-4 mx-auto formAdd">
       <div class="col">
        <h4 class="text-center">Veuillez renseigner les champs ci-dessous:</h4>  
            <form action="./index.php?action=dashboard" method="POST">
                <div class="form-group">
                  <label for="first-name">
                    Prénom
                  </label>
                  <input type="text" name="first_name" id='first_name' class="form-control" minlength="1" maxlength="25" placeholder="longueur maximale 25 charactères" required>  

                </div>
                <div class="form-group">
                  <label for="last_name">
                    Nom
                  </label>
                  <input type="text" name="last_name" id='last_name'class="form-control" minlength="1" maxlength="25" placeholder="longueur maximale 25 charactères" required>  

                </div>
                <div class="form-group">
                  <label for="email">
                Email
                  </label>
                  <input type="email" name="email" id='email'class="form-control" placeholder="adresse Email valide" required>  

                </div>
                <div class="form-group">
                  <label for="password">
                Mot de passe
                  </label>
                  <input type="password" name="password" id='password' class="form-control" minlength="8" maxlength="250" placeholder="8 charactères minimum" required>  

                </div>
                <div class="form-group">
                  <label for="role">
                Rôle
                  </label>
                  <select name="role" id='role' class="form-control" required> 
                        <option>Administrateur</option>
                        <option selected>Commercial</option>
                        <option>Assistant</option>
                        <option>Ressources Humaines</option>
                  </select> 

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>

                

            </form>
       </div>