<?php

include('database/serveur.php');

$dbname="orders";
$db=mysqli_select_db($conn,$dbname);
if(isset($_POST[""]))
 {
   if(!empty($_POST["searchzone"]))
   {	   
   
    $image=$_POST['nom'];
    $name=$_POST['prenom'];
    $inite_price=$_POST['adresse'];
    $quantite=$_POST['email'];
    $total=$_POST['telephone'];


   $requete="INSERT INTO `orders`(`image`, `name`,`unite_price`,`quantite`,`total`) VALUES ('$nom','$prenom','$email','$password','$telephone','$adresse');";
   $result=mysqli_query($conn,$requete);
   if(!$result)
	   {echo "lecture impossible";}
   else
   {
     
	
   }

  }
  else echo "enter key search";
 }
else 
    { echo "recherche impossible";}

?>
