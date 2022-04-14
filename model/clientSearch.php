<?php

use \ABI\MainController\ClientSearchController;

require'../controller/ClientSearchController.php';

if(!empty($_GET['search'])){

     $results=ClientSearchController::showClientAdmin(htmlentities($_GET['search']));
    
    
    if(!empty($results))
    {
        
        ?>
            <div class='row'>

    <div class="col px-4">

    <table class="table table-hover">
            <thead>
            <tr class="row">
             
                <th class="col-2">Raison Sociale</th>
                <th class="col-2">Télephone</th>
                <th class="col">Adresse</th>
                <th class="col-2">Ville</th>
               
                <th class="col-2 text-center">Détails</th>
            </tr>
            </thead>
            <tbody>
        <?php
             foreach($results as $result)
             {
     ?>
     <tr class="row">
         
         
         <td class="col-2"><?= $result[2]?></td>
         <td class="col-2"><?= $result[7]?></td>
         <td class="col"><?= $result[3]?></td>
         <td class="col-2"><?= $result[5]?></td>
         
         <td class="col-2 text-center"><a href="./index.php?action=buisness&amp;action=detailClient&amp;detail="<?= $result[0]?>><i class="fas fa-info-circle"></i></a></td>
         
     </tr>
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