<?php
use \ABI\MainController\MainController;

?>
<div class="col client-view my-4 ml-2 mr-4">
<?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success mt-4">
                           Client ajouté avec succés!

                    </div>
                <?php
                    }
                ?>
    <?php
if(isset($_GET['action2']))
    {

                    if($_GET['action2']==='clientList')
                    {
                        MainController::viewPage('./view/clientList.php');
                    }
                            
                    elseif($_GET['action2']==='searchClient')
                    {
                        MainController::viewPage('./view/searchClientView.php');
                                
                    }
                    elseif($_GET['action2']==='addClient')
                    {
                        MainController::viewPage('./view/addClientView.php');
                                
                    }
                    elseif($_GET['action2']==='detailClient')
                    {
                        MainController::viewPage('./view/detailClientView.php');
                                
                    }
                   
                                            
    }
    ?>

</div>