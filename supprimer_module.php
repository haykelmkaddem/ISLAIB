<?php
$id=$_GET['id_mod'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql ="DELETE FROM module
WHERE id_mod='$id' ";

$res1 = mysqli_query($conn,$sql);


header("location:modifier_module.php");


?>