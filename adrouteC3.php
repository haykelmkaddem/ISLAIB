<?php
$sp=$_GET['specialite'];
$niv=$_GET['niveau'];
$sem=$_GET['semestre'];
$mod=$_GET['module'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);


  header("location:adconsulter_note3.php?specialite=".$sp."&niveau=".$niv."&semestre=".$sem."&module=".$mod);




?>