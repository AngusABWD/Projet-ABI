<?php

use ABI\MainController\AdminController;

$results=AdminController::viewClients();
    if(!empty($results))
                {
?>
<div class="row text-center p-4">
    <div class="col">
        <h3>Liste des clients</h3>

    </div>
    


</div>
<div class='row mt-4'>

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
                <td class="col-2"><?= $result[5] ?></td>
                
             
                <td class="col-2 text-center"><a href="./index.php?action=buisness&action2=clientList&action2=detailClient<?= $result[0] ?>"><img src="./public/IMG/Logo-plus.png" width="40px" height="40px"></a></td>

            

                
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