<?php

include('database/serveur.php');
$db=mysqli_select_db($conn,$dbname);
$dbname="magasin";


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];

$requete="INSERT INTO `client`(`nom`, `prenom`, `adress_mail`,`password`,`tel`,`adress`) VALUES ('$nom','$prenom','$email','$password','$telephone','$adresse');";



$result=mysqli_query($conn,$requete);

if($result)
{ 
   header('Location: sign_in.php');
  
 }
else
 {
   header('Location: sign_up.php');
  
   }     
?>
