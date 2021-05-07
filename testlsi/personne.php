<?php
require 'pdo.php';

session_start();

$_SESSION["panier"] = "list" ;









// cursor
$tab =    $bdd->query("select * from etudiant");





?>


<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" >

 </head>


 <body class="container my-5">
 <h5>pour ajouter un nouveau membre cliquer sur:<a href="index.php" class="btn btn-info mx-5" >ajouter</a></h5>


<table  class="mt-5" >
<th class="py-3 px-2"> id </th>
<th class="py-3 px-2"> nom </th>
<th class="py-3 px-2"> age </th>
<th class="py-3 px-2 " > modifier </th>
<th class="py-3 px-2"> supprimer </th>


<?php

 while ($donnees = $tab->fetch()){ // parcourir ligne par line
?>
<tr>  

<td class="py-3 px-2"><?php echo $donnees['id'] ; ?> </td> 
<td  class="py-3 px-2"> <?php echo $donnees['nom'] ; ?> </td>
<td  class="py-3 px-2"> <?php echo $donnees['age'] ; ?>  </td>
<td  class="py-3 px-2" > <a class=" btn btn-info" href="modifier.php?id=<?=  $donnees['id'] ?>"> modifier </a>  </td>
<td  class="py-3 px-2" > <a class=" btn btn-danger" href="delete.php?id=<?= $donnees['id'] ?>" > supprimer </a>  </td>
</tr>


<?php
}


?>
</table>



<script src="js/bootstrap.min.js" ></script>
</body>
</html>







