
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
        <tr>
            <th>Raison Sociale</th>
            <th>Télephone</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
         
         <th><?= $res[2]?></th>
         <th><?= $res[7]?></th>
         <th><?= $res[3]?></th>
         <th><?= $res[5]?></th>
         

        <th><button class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal<?= $res[0] ?>"><a href="#" data-toggle="modal" data-target="#myModal<?= $res[0] ?>"></a>Modifier</button></th>
      
    
        <div class="modal fade" id="myModal<?= $res[0] ?>">
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
                      <form id="modifyClient<?= $res[0] ?>Form" action="./index.php?action=buisness" method="POST">
                      <div class="row">
                        <label for="raison_sociale" class="col-2 col-form-label">Raison Sociale</label>
                        <div class="col-9">
                          <input form="modifyClient<?= $res[0] ?>Form" type="text" name="raison_sociale" id='raison_sociale' value="<?= $res[2]?>" class="form-control">
                        </div>
                        <label for="telephone" class="col-2 col-form-label">Télephone</label>
                        <div class="col-9">
                          <input  form="modifyClient<?= $res[0] ?>Form" type="text" maxlength="10" name="telephone" id='telephone' value="<?= $res[7]?>" class="form-control">
                        </div>
                        <label for="adresse" class="col-2 col-form-label">Adresse</label>
                        <div class="col-9">
                          <input  form="modifyClient<?= $res[0] ?>Form" type="text" name="adresse" id='adresse' value="<?= $res[3]?>" class="form-control">
                        </div>
                        <label for="ville" class="col-2 col-form-label">Ville</label>
                        <div class="col-9">
                          <input  form="modifyClient<?= $res[0] ?>Form" type="text" name="ville" id='ville' value="<?= $res[5]?>" class="form-control">
                        </div>
                        <input  form="modifyClient<?= $res[0] ?>Form" type="hidden" name="id_client" id='id_client' value="<?= $res[0] ?>" class="form-control">
                      </div>
                    </form>
                    </div>

                    <!-- Liaison  des functions  ModifyClient()  et DeleteClient()   à l'intérieur de la Modal  Patricio  -->
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button id="btnValidModif" name="modifyClient" type="submit" class="btn btn-success"  form="modifyClient<?= $res[0] ?>Form" >Modifier</button>
                      <button id="btnValidDelete" name="deleteClient" type="submit" class="btn btn-danger" form="modifyClient<?= $res[0] ?>Form" >Supprimer</button>
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