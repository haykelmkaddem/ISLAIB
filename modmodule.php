<?php
$id=$_GET['id_mod'];
$sp=$_GET['specialite'];
$niv=$_GET['niveau'];
$sem=$_GET['semestre'];
$type=$_GET['type'];
$cof=$_GET['coefficient_mod'];
$name=$_GET['nom_mod'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "UPDATE module
SET coefficient_mod='$cof' , type_mod='$type' , nom_mod='$name' , id_sp='$sp' , id_niv='$niv' , id_sem='$sem'
WHERE id_mod='$id' ";

$res1 = mysqli_query($conn,$sql);


header("location:modifier_module.php");

//$nbligne = $bd->exec($sql);


?>