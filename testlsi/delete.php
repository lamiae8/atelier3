<?php
$id= $_GET['id'];
require 'pdo.php';


$req= $bdd->prepare('DELETE FROM etudiant WHERE id=:id');
$req->execute(array(':id'=>$id));


if($req->execute(array(':id'=>$id)) ){
    header('location: personne.php');
}
