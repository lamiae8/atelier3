<?php
require 'pdo.php';

session_start();

$_SESSION["panier"] = "list" ;



$nom  = "";
$id = 0;

$age = 0;


        

// id nom age
if(isset($_GET["nom"]) && isset($_GET["age"]) && isset($_GET["id"])){
$id = $_GET["id"] ;
$nom = $_GET["nom"] ;
$age = $_GET["age"] ;
$req = $bdd->prepare('INSERT INTO etudiant(nom, age ) VALUES(:nom, :age )');

$req->execute(array( 'nom' => $nom,
'age' => $age

));
}







?>
<html>
<head>


<link rel="stylesheet" href="css/bootstrap.min.css" >
</head>




<body class="container">



 
<form method="get"  action="personne.php" class="px-3 py-3">
  <div class="form-group">
    <label for="id">id</label>
    <input type="text" name="id" class="form-control" id="id" >
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>  
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" id="age">
  </div>  

  

<input type="submit"  value="save me!!!" class="btn btn-success  my-3"/>
<a href="personne.php" class=" btn btn-info mx-3">afficher</a>
 
</form>

<script src="js/bootstrap.min.js" ></script>

</body>
</html>