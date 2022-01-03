<?php
$sp=$_GET['specialite'];
$niv=$_GET['niveau'];


  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
if ($niv==3 or $niv==5) {
  header("location:consulter_note2.php?specialite=".$sp."&niveau=".$niv);
} 
else {
  header("location:consulter_note1.php?specialite=".$sp."&niveau=".$niv);
}

?>