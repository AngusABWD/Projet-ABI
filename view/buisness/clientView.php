<?php
use \ABI\MainController\MainController;

?>
<div class="col client-view my-4 ml-2 mr-4">
    <?php  if (!isset($_GET['action2'])):?>
        <div class="text-center m-5 pt-5">
            <h1>Bienvenue dans la</h1>
            <h1>Gestion commerciale</h1>
        </div>
    <?php endif?>

    <?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success">
                        Client ajouté avec succès!

                    </div>
                <?php
                    }
                
                    if(isset($_GET['successSupp']))
                    {
                ?>
                        <div class="alert alert-success">
                        Client effacé avec succès!
                        </div>
                <?php
                    }
                    if(isset($_GET['successUpdate']))
                    {
                ?>
                    <div class="alert alert-success">
                        Client modifié avec succès!

                    </div>
                <?php
                    }
                    ?>
    <?php
function strrevpos($instr, $needle)
{
    $rev_pos = strpos (strrev($instr), strrev($needle));
    if ($rev_pos===false) return false;
    else return strlen($instr) - $rev_pos - strlen($needle);
};



    function after_last ($indice, $inthat)
    {
        if (!is_bool(strrevpos($inthat, $indice)))
        return substr($inthat, strrevpos($inthat, $indice)+strlen($indice));
    };
if(isset($_GET['action2']))
    {

                    if($_GET['action2']==='clientList')
                    {
                        MainController::viewPage('./view/buisness/clientList.php');
                    }
                            
                    elseif($_GET['action2']==='searchClient')
                    {
                        MainController::viewPage('./view/buisness/searchClientView.php');
                                
                    }
                    elseif($_GET['action2']==='addClient')
                    {
                        MainController::viewPage('./view/buisness/addClientView.php');
                                
                    }
                    elseif(strpos($_GET['action2'],"detailClient")!==false)
                    {
                       $indice = after_last('t',$_GET['action2']);
                    
                       $_SESSION['ind']= $indice;
                        MainController::viewPage('./view/buisness/detailClientView.php');
                                
                    } 
                   
                    
                    
                   
                                            
    }
    ?>

</div>