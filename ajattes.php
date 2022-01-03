<?php
$classe=$_GET['id_et'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO attes VALUES (null,'$classe')";

$res1 = mysqli_query($conn,$sql);
header("location:adattestation.php");


?>