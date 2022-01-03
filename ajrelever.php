<?php
$classe=$_GET['id_classe'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO relever VALUES (null,'$classe')";

$res1 = mysqli_query($conn,$sql);
header("location:adrelever.php");


?>