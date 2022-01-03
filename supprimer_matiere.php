<?php
$id=$_GET['id_mat'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

$sql ="DELETE FROM matiere
WHERE id_mat='$id' ";

$res1 = mysqli_query($conn,$sql);


header("location:modifier_matiere.php");


?>