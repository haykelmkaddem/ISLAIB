<?php
$sp=$_GET['specialite'];
$niv=$_GET['niveau'];
$sem=$_GET['semestre'];
$classe=$_GET['classe'];



  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

if ($sem==1) {
  header("location:modifier_note5.php?specialite=".$sp."&niveau=".$niv."&semestre=".$sem."&classe=".$classe);
} else {
  header("location:stageM.php?specialite=".$sp."&niveau=".$niv."&semestre=".$sem."&classe=".$classe);
}





?>