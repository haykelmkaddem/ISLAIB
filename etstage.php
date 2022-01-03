<?php
session_start();
if(!isset($_SESSION['cin'])){header("location: etudiant.php");exit;}
$cin=$_SESSION['cin'];
$servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
$req="SELECT * FROM etudiant WHERE cin='$cin'";
$et=mysqli_query($conn,$req);
$row = mysqli_fetch_array($et);

$req1="SELECT * FROM classe WHERE (id_niv=3 or id_niv=5)";
$cl=mysqli_query($conn,$req1);
$rowcl = mysqli_fetch_array($cl);
$idclasse=$rowcl['0'];
$idsp=$rowcl[2];
$idniv=$rowcl[3];
$req2="SELECT * FROM etudiant WHERE (cin='$cin' and id_classe='$idclasse')";
$et=mysqli_query($conn,$req2);
$et1=mysqli_query($conn,$req2);

$spp="SELECT * FROM specialite WHERE id_sp=$idsp";
$spp1=mysqli_query($conn,$spp);
$spp2=mysqli_fetch_array($spp1);

$nii="SELECT * FROM niveau WHERE id_niv=$idniv";
$nii1=mysqli_query($conn,$nii);
$nii2=mysqli_fetch_array($nii1);



date_default_timezone_set('Europe/Paris');
  $date = date('d-m-y');
  


?>





<html>
    <head>
        <title></title>
        <style>
            .header{
                width: 100%;
                height: 210px;
            }
            .top-left{
                top: 0px;
                left: 0px;
                float: left;;
                text-align: center;
                width: 40%;
            }
            .top-right{
                top: 0px;
                right: 0px;
                float:left;
                text-align: center;
                width: 40%;
            }
            .top-middle{
                top: 0px;
                text-align: center;
                width: 20%;
                float: left;
            }
            .coa{
                width: 50px;
                margin-top:50px ;
            }
            .hr{
                border-bottom: 1px solid black;
                width: 100%;
                display:block;
                overflow:auto;
                height: 100%;
            }
            .date{
                float: left;
                left: 0;
                width: 30%;
                margin-right: 80%;
            }
            .date-fix{
                float: left;
                width: 70%;
                height: 10px;
                background-color: #ccc ;
            }
            .container{
                width: 90%;
                margin: 5%;
            }
            .titre{
            text-align: center;
            }
            .bottom-left{
          
          left: 0px;
          float:left;
          text-align: center;
          width: 50%;
      }
      .bottom-adjus{
          top: 0px;
          left: 0px;
          float: left;;
          text-align: center;
          width: 50%;

      }
      .footer{
          height: 170px;
      }
        </style>
    </head>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
              
        </script>


    <body>

<?php 
$cin=$_SESSION['cin'];

$cin=$_SESSION['cin'];
$servername="localhost";
  $username="root";
  $password="";
  $dbname="intranet";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
$req="SELECT * FROM etudiant WHERE cin='$cin'";
$et=mysqli_query($conn,$req);
$row = mysqli_fetch_array($et);

$rele = "SELECT * FROM atstage where id_et='$cin'";
$rele1 =mysqli_query($conn,$rele);
if ($rele2= mysqli_fetch_array($rele1)) {


 ?>










<div class="container" dir="rtl">
        <div class="header">
            <div class="hr">
            <div class="top-left">
                <p>Republique Tunisienne<br>***<br>Ministère de l'Enseignement Supérieur et de la Recherche Scientifique<br>***<br> Université de Jendouba<br>Institut supérieur des langues appliquées et d’informatique de Béja</p>
            </div>
            <div class="top-middle">
                <img src="images/iii.png" class="coa" alt="">
            </div>
            <div class="top-right">
                <p>الجمهورية التونسية<br>***<br>وزارة التعليم العالي و البحث العلمي <br>***<br> جامعة جندوبة<br>المعهد العالي للغات التطبيقية والإعلامية بباجة<br> <b>مصلحة التربصات</b> </p>
            </div>
            </div>
            

            
        </div>

        <div class="date">
                <h3>باجة في: 08/01/2020</h3>
            </div>
        <div class="titre" >
            <h1>شهادة تعيين طالب متربص</h1>
        </div>
        <div class="content" style="text-align: right; margin-top: 20px;">
            <p>يشهد مدير المعهد العالي للغات التطبيقية و الاعلامية بباجة,<br><br>الطالب(ة) <?php echo $row[2] ?> <?php echo $row[1] ?> صاحب(ة) بطاقة التعريف الوطنيى عدد <?php echo $cin ?> <br>
                <br>والمرسم(ة) بالسنة <?php echo $nii2[1] ?> في <?php echo $spp2[1] ?>, قد تم تعيينها بتربص تطبيقي بالمعهد العالي للغات التطبيقية و الاعلامية بباجة  </p>
                <h5>البريد الالكتروني:</h5>
                <p><?php echo $row[3] ?></p>
                <br>
                <p>سلمت هذه الشهادة للمعني(ة) بالأمر للغاتلاء بها عند الحاجة. </p>
        </div>

        <div class="footer">
            <div class="bottom-adjus"></div>
            <div class="bottom-left">
               <h2>مدير المعهد</h2>
            </div>
        </div>
</div>

<center>
    <button class="btn btn-primary d-print-none" onclick="imprimer_page()" style="margin-top: 20px; margin-bottom: 50px; width: auto;" ><img src="https://img.icons8.com/ios-glyphs/30/ffffff/print.png"/> Print</button>
    </center>

<?php 
} else {
 ?>
<center>
    <h2>pas d'attestation maintenant</h2>
    <a href="welcome_et.php" >home</a>
    </center>

<?php } ?>





    </body>
</html>