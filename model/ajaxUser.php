<?php

use ABI\MainController\UserSearchController;

require '../controller/MainController.php';
require '../controller/UserSearchController.php';
require './Database.php';


if (!empty($_GET['search'])) {



  $results = UserSearchController::modifyUserSearch(htmlentities($_GET['search']));
  if (!empty($results)) {

?>
    <div class='row'>

      <div class="col px-4">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Rôle</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($results as $result) {
            ?>
              <tr>
                <td><?= $result->first_name ?></td>
                <td><?= $result->last_name ?></td>
                <td><?= $result->email ?></td>
                <td><?= $result->role ?></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal">Modifier</a></td>
              </tr>
              <!--------------------------------------------the modal-----!-->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modifier un utilisateur</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modif Kevin -->
                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="row">
                        <label for="first_name" class="col-2 col-form-label">Prénom</label>
                        <div class="col-9">
                          <input type="text" value="<?= $result->first_name; ?>" class="form-control">
                        </div>
                        <label for="last_name" class="col-2 col-form-label">Nom</label>
                        <div class="col-9">
                          <input type="text" value="<?= $result->last_name; ?>" class="form-control">
                        </div>
                        <label for="email" class="col-2 col-form-label">Email</label>
                        <div class="col-9">
                          <input type="text" value="<?= $result->email; ?>" class="form-control">
                        </div>
                        <label for="role" class="col-2 col-form-label">Role</label>
                        <div class="col-9">
                          <input type="text" value="<?= $result->role; ?>" class="form-control">
                        </div>
                      </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button id="btnValidModif" type="submit" class="btn btn-success" data-dismiss="modal">Modifier</button>
                      <button id="btnValidDelete" type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                    </div>

                  </div>
                </div>
              </div>
              <!-- Fin Modif Kevin -->
              <!------------------------------------------------------------>
            <?php
            }


            ?>
          </tbody>
        </table>


      </div>
    </div>
  <?php
  } else {


  ?>
    <div class="alert alert-danger mt-4 p-4">
      aucun resultat n'a été trouvé!
    </div>
<?php

  }
}


?>