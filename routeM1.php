<?php
$sp=$_GET['specialite'];
$niv=$_GET['niveau'];
$sem=$_GET['semestre'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);


  header("location:modifier_note5.php?specialite=".$sp."&niveau=".$niv."&semestre=".$sem);




?>