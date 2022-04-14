<?php

use ABI\controller\DashboardSearch;

require '../controller/Controller.php';
require '../controller/DashboardSearch.php';
require './Database.php';


if(!empty($_GET['search'])){

  
    
    $results=DashboardSearch::modifyUserDashboard(htmlentities($_GET['search']));
    if(!empty($results))
    {
        
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
            
                foreach($results as $result)
                {
        ?>
        <tr>
            <td><?= $result->first_name?></td>
            <td><?= $result->last_name?></td>
            <td><?= $result->email?></td>
            <td><?= $result->role?></td>
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

      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
                <input type="text" value="<?=$result->first_name;?>" class="form-control">
          </div>
          <div class="form-group">
                <input type="text" value="<?=$result->last_name;?>" class="form-control">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!------------------------------------------------------------>
       <?php
                }

            
       ?>
        </tbody>
    </table>
   

</div>
</div>
        <?php
    }
    else
    {
        
       
        ?>
        <div class="alert alert-danger mt-4 p-4">
        aucun resultat n'a été trouvé!
        </div>
        <?php
    
    }

}


?>