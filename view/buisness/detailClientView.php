
 <?php 

use ABI\MainController\AdminController;
require_once ("./view/buisness/clientView.php");
$indice = $_SESSION['ind'];
$result=AdminController::detailCLient();

foreach ($result as $res){
if($res[0]==$indice)
{
?>

<div class='row mt-4'>

<div class="col px-4">

        <table class="table table-hover">
        <thead>
        <tr class="row">
         
            <th class="col-2">Raison Sociale</th>
            <th class="col-2">Télephone</th>
            <th class="col-2">Adresse</th>
            <th class="col-2">Ville</th>
            <th class="col-2"></th>
            <th class="col-2"></th>
           
           
        </tr>
        </thead>
        <tbody>
        <tr class="row">
         
         <th class="col-2"><?= $res[2]?></th>
         <th class="col-2"><?= $res[7]?></th>
         <th class="col-2"><?= $res[3]?></th>
         <th class="col-2"><?= $res[5]?></th>
         

        <th class="col-2"><button class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal"><a href="#" data-toggle="modal" data-target="#myModal"></a>Modifier</button></th>
        <th class="col-2"><button id="btn" class="btn btn-danger" style="position:relative; right: 35px;">Elimine</button></th>
      
    
        <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modifier un client</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modif Kevin -->
                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="row">
                        <label for="first_name" class="col-2 col-form-label">Raison Sociale</label>
                        <div class="col-9">
                          <input type="text" value="<?= $res[2]?>" class="form-control">
                        </div>
                        <label for="last_name" class="col-2 col-form-label">Télephone</label>
                        <div class="col-9">
                          <input type="text" value="<?= $res[7]?>" class="form-control">
                        </div>
                        <label for="email" class="col-2 col-form-label">Adresse</label>
                        <div class="col-9">
                          <input type="text" value="<?= $res[3]?>" class="form-control">
                        </div>
                        <label for="role" class="col-2 col-form-label">Ville</label>
                        <div class="col-9">
                          <input type="text" value="<?= $res[5]?>" class="form-control">
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
        
        
        
     </tr>
     
    
        </tbody>
    </table>
</div>
</div>
<?php 
}

?>
<?php 
}

?>








 
  

 