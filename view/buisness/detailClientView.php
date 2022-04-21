<?php 

use ABI\MainController\AdminController;
require_once ("./view/buisness/clientView.php");
$indice = $_SESSION['ind'];
$result=AdminController::detailCLient();

foreach ($result as $res){
if($res[0]==$indice){
echo "Detail client:";
 echo "<br>";
 echo $res[2];
 echo "<br>";
 echo $res[7];
 echo "<br>";
 echo $res[3];
 echo "<br>";
 echo $res[5];
 
}

}





 
  

 ?>