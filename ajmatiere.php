<?php
$mod=$_GET['module'];
$cof=$_GET['coefficient_mat'];
$name=$_GET['nom_mat'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO matiere VALUES (null,'$cof','$name','$mod')";

$res1 = mysqli_query($conn,$sql);
header("location:modifier_matiere.php");


?>