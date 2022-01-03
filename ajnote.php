<?php
$i=0;
$mat=$_GET['matiere'];
$classe=$_GET['classe'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

  $query1 = "SELECT * FROM etudiant WHERE (id_classe='$classe') ";
  $res = mysqli_query($conn,$query1);
while($row1 = mysqli_fetch_array($res))  
                {  
                    $i++;
$orale=$_GET['orale'.$i];
$ds=$_GET['ds'.$i];
$exam=$_GET['exam'.$i];
$etudiant=$_GET['etudiant'.$i];


$rr = "SELECT * FROM note WHERE (id_et='$etudiant' and id_mat='$mat') ";
$rrr=mysqli_query($conn,$rr);
if (mysqli_fetch_array($rrr)) {
  header("location:testnote.php");
}else{

$sql = "INSERT INTO note VALUES (null,'$orale','$ds','$exam','$etudiant','$mat')";

$res1 = mysqli_query($conn,$sql);
header("location:testnote1.php");
}

}
//$nbligne = $bd->exec($sql);


?>