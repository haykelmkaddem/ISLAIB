<?php
session_start();
if(!isset($_SESSION['email_en'])){header("location: enseignant.php");exit;}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body>













<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" style="background-color: #082465;">
  <a class="navbar-brand" href="welcom_en.php"><img src="images/ISLAIB.png" alt=""><span>
              ISLAIB
            </span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Gestion Des Notes
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="ajouter_note.php">Ajouter Des Notes</a>
          <a class="dropdown-item" href="modifier_note.php">Modifier Des Notes</a>
          <a class="dropdown-item" href="consulter_note.php">Afficher Des Notes</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
          <span style="color: white;">
          <?php echo htmlspecialchars($_SESSION["email_en"]); ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="logout.php">Déconnexion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

        $module=$_GET['module'];
        $classe=$_GET['classe'];
        $query1 = "SELECT * FROM etudiant WHERE (id_module='$module' AND id_classe='$classe') ";
          $query2 = "SELECT * FROM classe WHERE id_classe='$classe'";
          $query3 = "SELECT * FROM module WHERE id_mod='$module' ";
                $res = mysqli_query($conn,$query1);

                $res2 = mysqli_query($conn,$query2);
                $row2 = mysqli_fetch_array($res2);

                $res3 = mysqli_query($conn,$query3);
                $row3 = mysqli_fetch_array($res3)  ;

                $req8="SELECT * FROM note WHERE (id_module='$module' AND id_classe=$classe)";
                $res4 = mysqli_query($conn,$req8);
?>

<center>
<table width="65%" style="text-align: center;">
  <tr>
    <th></th>
    <th style="border: 1px solid black;" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;Groupe: <?php echo $row2[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matiére: <?php echo $row3[1]; ?></th>
  </tr>
  <tr>
    <th style="border: 1px solid black; width: 150px;">CIN</th>
    <th width="25%" style="border: 1px solid black;">Nom et Prenom</th>
    <th style="border: 1px solid black;">Orale</th>
    <th style="border: 1px solid black;">Ds</th>
    <th style="border: 1px solid black;">Examen</th>
  </tr>



  <?php


                while($row1 = mysqli_fetch_array($res4))  
                {  
                  $rq="SELECT * from etudiant where (cin=$row1[4] AND id_classe='$classe')";

                  $res10 = mysqli_query($conn,$rq);
                $row9 = mysqli_fetch_array($res10);
              
                  ?>
    <tr>

    <td style="border: 1px solid black; width: 150px;"><?php echo $row9[0];  ?></td>
    <td width="25%" style="border: 1px solid black;"><?php echo $row9[1]." "; echo $row9[2];  ?></td> 
    <td style="border: 1px solid black;"><?php echo $row1[1] ?></td>
    <td style="border: 1px solid black;"><?php echo $row1[2] ?></td>
    <td style="border: 1px solid black;"><?php echo $row1[3] ?></td>
  </tr>
<?php

}
?>

</table>
</center>
</body>
</html>