<?php
$i=0;
$classe=$_GET['classe'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

  $query1 = "SELECT * FROM etudiant WHERE id_classe='$classe' ";
  $res = mysqli_query($conn,$query1);
while($row1 = mysqli_fetch_array($res))  
                {  
                    $i++;
$note=$_GET['notestage'.$i];
$etudiant=$_GET['etudiant'.$i];

   
 
//$sql = "INSERT INTO note VALUES (null,'$orale','$ds','$exam','$etudiant','$module','$classe')";

$sql ="UPDATE notestage
SET notestage='$note' where id_et='$etudiant'";

$res1 = mysqli_query($conn,$sql);
}
//$nbligne = $bd->exec($sql);

header("location:consulter_note.php");

?>