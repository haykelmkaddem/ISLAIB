<?php
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

$sql = "INSERT INTO module VALUES (null,'$cof','$type','$name','$sp','$niv','$sem')";

$res1 = mysqli_query($conn,$sql);
header("location:modifier_module.php");

//$nbligne = $bd->exec($sql);


?>