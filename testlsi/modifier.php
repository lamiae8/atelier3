<?php
require 'pdo.php';


$id=$_GET['id'];
$req= $bdd->prepare('SELECT * FROM etudiant WHERE id=:id');
$req ->execute([':id'=> $id]);
$donnees=$req->fetch();



// nom age 
if(isset($_GET["nom"])&& isset($_GET["age"])){
$nom = $_GET["nom"] ;
$age = $_GET["age"] ;
$req =$bdd ->prepare('UPDATE etudiant SET nom=:nom,age=:age   WHERE id=:id ' );
$req-> execute(['nom'=>$nom ,'id'=>$id, 'age'=>$age]);
if($req-> execute(['nom'=>$nom ,'id'=>$id, 'age'=>$age])){
    header('location: personne.php');
}
}










?>
<html>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>




<body class="container px-3 py-3">

<form method="get"  >
  <div class="form-group">
    <label for="id">id</label>
    <input type="text"  value = "<?= $donnees['id'] ;?>" name="id" class="form-control" id="id" >
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" value = "<?= $donnees['nom'] ;?>" name="nom"  class="form-control" id="nom">
  </div>  
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" value = "<?= $donnees['age'] ;?>" name="age" class="form-control" id="age">
  </div>  

  

<input type="submit"  value="save me!!!" class="btn btn-success my-3"/>
 
</form>

<script src="js/bootstrap.min.js" ></script>
</body>

</html>
