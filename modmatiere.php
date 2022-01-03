<?php
$id=$_GET['id_mat'];
$cof=$_GET['coefficient_mat'];
$name=$_GET['nom_mat'];
$module=$_GET['module'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "UPDATE matiere
SET coefficient_mat='$cof', nom_mat='$name' , id_mod='$module'
WHERE id_mat='$id' ";

$res1 = mysqli_query($conn,$sql);


header("location:modifier_matiere.php");

//$nbligne = $bd->exec($sql);


?>