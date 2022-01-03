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
$req2="SELECT * FROM etudiant WHERE (cin='$cin' and id_classe='$idclasse')";
$et=mysqli_query($conn,$req2);
$et1=mysqli_query($conn,$req2);


$spp="SELECT * FROM specialite WHERE id_sp=$idsp";
$spp1=mysqli_query($conn,$spp);
$spp2=mysqli_fetch_array($spp1);



date_default_timezone_set('Europe/Paris');
  $date = date('d-m-y');
  


?>



<html>
<head>
    <title></title>
    <style>
        .top-right{
            top: 0px;
            right: 0px;
            float:center;
            text-align: center;
            width: 30%;
        }
        .top-adjus{
            top: 0px;
            left: 0px;
            float: left;;
            text-align: center;
            width: 100%;

        }
        .bottom-left{
          
            left: 0px;
            float:left;
            text-align: center;
            width: 90%;
        }
        .bottom-adjus{
            top: 0px;
            left: 0px;
            float: left;;
            text-align: center;
            width: 50%;

        }
        .top{
            width: 100%;
            height: 100px;
        }
        .titre{
            text-align: center;
        }
        .container{
            width: 100%;
            margin: 20%;
        }
        .content{
            text-align: right;
        }
        input{
            border: hidden;
        }
        .bottom{
            height: 170px;
            text-align: center;
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

$rele = "SELECT * FROM attes where id_et='$cin'";
$rele1 =mysqli_query($conn,$rele);
if ($rele2= mysqli_fetch_array($rele1)) {


 ?>


    <div class="container" dir="rtl">
        <div class="top">
            <div class="top-right">
                <p>الجمهورية التونسية <br> وزارة التعليم العالي و البحث العلمي <br> جامعة جندوبة <br> المعهد العالي للغات التطبيقية و الاعلامية بباجة </p>
            </div>
        </div> 
       

        <div class="titre" >
            <h1>شهادة نجاح</h1>
        </div>
        <div class="content" >
            يشهد الكاتب العام للمعهد العالي للغات التطبيقية و الاعلامية بباجة ان الطالب(ة):
<br>الإسم: <?php echo $row[2]; ?>
<br>اللقب:  <?php echo $row[1]; ?>
<br>  المولود(ة) في    <?php echo $row[5]; ?>    بباجة
<br>صاحب(ة) بطاقة التعريف الوطنية رقم: <?php echo $row[0]; ?>
<br>بالنسبة للسنة الجامعية  2019/2020
<br>قد اجتاز(ت ) بنجاح الامتحانات   
<br>في الاختصاص : <?php echo $spp2[1]; ?>
<br>في الدورة : الرئيسية
<br>بملاحظة : جيد
<br>سلمت هذه الشهادة للمعني(ة) بالأمر للادلاء بها لدىمن له النظر

        </div>
        <div class="bottom">
            <div class="bottom-left">
               <p>باجة في: <?php echo $date; ?></p><br>
               <h2>الكاتب العام
                   <br>
                   <input type="text">

               </h2>
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