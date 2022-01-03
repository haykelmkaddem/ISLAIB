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




        @font-face {
  font-family: "Poppins-Regular";
  src: url("../fonts/poppins/Poppins-Regular.ttf"); }
@font-face {
  font-family: "Poppins-Medium";
  src: url("../fonts/poppins/Poppins-Medium.ttf"); }
@font-face {
  font-family: "Bitter-Regular";
  src: url("../fonts/bitter/Bitter-Regular.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Poppins-Regular";
  font-size: 15px;
  color: #fff;
  margin: 0; }

:focus {
  outline: none; }

textarea {
  resize: none; }

input, textarea, select, button {
  font-family: "Poppins-Regular";
  font-size: 15px;
  color: #fff; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

ul {
  padding: 0;
  margin: 0;
  list-style: none; }

a {
  text-decoration: none; }

textarea {
  resize: none; }

img {
  max-width: 100%;
  vertical-align: middle; }

.wrapper {
  height: 100vh;
  background: #f9f6f1;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background: url("../images/form-wizard-bg.jpg");
  background-size: cover; }

.inner {
  width: 909px; }

.image-holder {
  position: relative; }
  .image-holder h3 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); }

h3 {
  font-family: "Bitter-Regular";
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  padding: 9px 23px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  font-weight: 400;
  letter-spacing: 0.3px; }

.wizard {
  background: url("../images/form-content-bg.png") repeat;
  padding: 62px 60px 58px 62px;
  display: flex; }
  .wizard .steps {
    width: 26.05%;
    margin-right: 68px; }
  .wizard .content {
    width: 73.95%; }

.steps ul {
  border-left: 3px solid rgba(242, 242, 242, 0.4); }
.steps li {
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  height: 31px;
  position: relative; }
  .steps li a {
    color: #fff;
    font-family: "Poppins-Medium";
    font-size: 15px;
    padding-left: 18px; }
    .steps li a:before {
      content: "";
      width: 3px;
      height: 31px;
      position: absolute;
      left: -3px;
      top: 0; }
  .steps li.current a {
    color: #edc948; }
    .steps li.current a:before {
      background: #edc948; }

.content h4 {
  display: none; }

label {
  margin-bottom: 7px;
  display: block;
  font-size: 14px; }

.form-group .form-row {
  margin-bottom: 27px; }

.form-row {
  display: flex;
  margin-bottom: 29px; }
  .form-row.mb-21 {
    margin-bottom: 21px; }
  .form-row .form-holder, .form-row .select {
    width: 50%;
    margin-right: 30px; }
    .form-row .form-holder:last-child, .form-row .select:last-child {
      margin-right: 0; }
    .form-row .form-holder.w-100, .form-row .select.w-100 {
      width: 100%;
      margin-right: 0; }
    .form-row .form-holder.mr-20, .form-row .select.mr-20 {
      margin-right: 20px; }
  .form-row .select .form-holder {
    width: 100%;
    margin-right: 0; }

.form-holder {
  position: relative; }
  .form-holder span.lnr-chevron-down {
    position: absolute;
    bottom: 10px;
    right: 0;
    font-size: 10px; }
  .form-holder span.lnr-calendar-full {
    position: absolute;
    bottom: 12px;
    right: 0;
    font-size: 12px; }
  .form-holder span.placeholder {
    position: absolute;
    bottom: 8px;
    left: 0;
    font-size: 14px; }

.select {
  position: relative; }
  .select .select-control {
    height: 34px;
    border-bottom: 1px solid #5d718e;
    width: 100%;
    font-size: 14px;
    padding: 0;
    display: flex;
    align-items: center;
    cursor: pointer; }
  .select .dropdown {
    display: none;
    position: absolute;
    top: 100%;
    width: 100%;
    background: #fff;
    color: #999;
    z-index: 9;
    border: 1px solid #81acee; }
    .select .dropdown li {
      padding: 2px 10px; }
      .select .dropdown li:hover {
        background: #81acee;
        color: #fff; }

.form-control {
  background: none;
  height: 34px;
  border: none;
  border-bottom: 1px solid #5d718e;
  width: 100%;
  font-size: 14px;
  padding: 0; }
  .form-control.pl-85 {
    padding-left: 85px; }
  .form-control.pl-96 {
    padding-left: 96px; }
  .form-control::-webkit-input-placeholder {
    color: #fff; }
  .form-control::-moz-placeholder {
    color: #fff; }
  .form-control:-ms-input-placeholder {
    color: #fff; }
  .form-control:-moz-placeholder {
    color: #fff; }
  .form-control:focus {
    border-bottom: 1px solid #e6e6e6; }

textarea.form-control {
  padding: 6px 0; }

.option {
  color: #999;
  padding-left: 20px; }

select.form-control {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  color: #fff; }
  select.form-control option[value=""][disabled] {
    display: none; }

select option {
  padding: 0 15px; }

.section-style {
  display: flex; }
  .section-style .board-wrapper {
    width: 50%;
    margin-right: 30px; }
  .section-style .form-wrapper, .section-style .pay-wrapper {
    width: 50%; }

.board-inner {
  background: #fff;
  color: #012353;
  font-size: 14px;
  padding: 22px 33px 13px 21px; }
  .board-inner div {
    margin-bottom: 8px; }
    .board-inner div:last-child {
      margin-bottom: 0; }
  .board-inner .board-item span {
    margin-left: 13px; }
  .board-inner .board-line {
    display: flex;
    justify-content: space-between; }
    .board-inner .board-line div {
      margin-bottom: 0; }

.bill {
  border: 1px solid #fff;
  padding: 18px 20px 11px 20px; }
  .bill .bill-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 7px; }
    .bill .bill-item .price {
      font-family: "Poppins-Medium";
      color: #edc948; }
    .bill .bill-item.people {
      justify-content: flex-start; }
      .bill .bill-item.people .bill-unit:first-child {
        margin-right: 28px; }
    .bill .bill-item.service {
      margin-top: 31px; }
    .bill .bill-item.vat {
      margin-bottom: 14px; }
    .bill .bill-item.total-price {
      margin-bottom: 21px; }
      .bill .bill-item.total-price .price {
        font-size: 17px; }
    .bill .bill-item.total {
      font-size: 12px;
      align-items: center; }
      .bill .bill-item.total span {
        display: block;
        margin-left: 0;
        font-size: 14px; }
      .bill .bill-item.total .price {
        font-size: 17px; }
  .bill .bill-unit span {
    margin-left: 2px; }
  .bill .bill-cell {
    padding-bottom: 7px;
    border-bottom: 1px solid #5d718e;
    margin-bottom: 15px; }
    .bill .bill-cell:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border: none; }

button {
  padding: 0;
  border: none;
  display: flex;
  height: 42px;
  width: 164px;
  justify-content: center;
  align-items: center;
  background: #edc948;
  font-family: "Poppins-Medium";
  text-transform: uppercase;
  font-size: 14px;
  color: #012353;
  cursor: pointer;
  bottom: 56px;
  border-radius: 21px;
  font-weight: 500;
  margin: auto;
  margin-top: 50px;
  font-weight: 500; }
  button i {
    margin-left: 10px; }
  button:hover {
    background: #d4b43f; }

.checkbox {
  position: relative;
  padding-left: 25px; }
  .checkbox label {
    cursor: pointer; }
    .checkbox label a {
      color: #edc948; }
      .checkbox label a:hover {
        color: #d4b43f; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 3px;
  left: 0;
  height: 14px;
  width: 15px;
  border: 1px solid #fff;
  font-family: Material-Design-Iconic-Font;
  font-size: 13px; }
  .checkmark:after {
    position: absolute;
    top: 0;
    left: 1px;
    display: none;
    content: '\f26b';
    color: #fff; }

.checkbox-circle {
  display: flex;
  justify-content: space-between;
  margin-bottom: 16px; }
  .checkbox-circle label {
    padding-left: 19px;
    cursor: pointer;
    font-size: 12px;
    display: inline-block;
    position: relative; }
  .checkbox-circle input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox-circle input:checked ~ .checkmark:after {
    display: block; }
  .checkbox-circle .checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 1px solid #fff; }
    .checkbox-circle .checkmark:after {
      content: "";
      top: 3px;
      left: 3px;
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: #fff;
      position: absolute;
      display: none; }

@media (max-width: 1500px) {
  .wrapper {
    height: auto;
    padding: 80px 0; } }
@media (max-width: 1199px) {
  .wrapper {
    padding: 0; } }
@media (max-width: 991px) {
  .wizard {
    padding: 50px; } }
@media (max-width: 767px) {
  .wizard {
    padding: 50px 20px;
    flex-direction: column; }
    .wizard .steps {
      width: 100%;
      margin-right: 0;
      margin-bottom: 30px; }
    .wizard .content {
      width: 100%; }

  .section-style {
    flex-direction: column; }
    .section-style .board-wrapper {
      width: 100%;
      margin-right: 0;
      margin-bottom: 50px; }
    .section-style .form-wrapper, .section-style .pay-wrapper {
      width: 100%; }

  .form-row {
    display: block;
    margin-bottom: 0; }
    .form-row .form-holder {
      width: 100%;
      margin-right: 0; }
    .form-row .select {
      width: 100%;
      margin-right: 0; }

  .form-control, .select-control {
    margin-bottom: 29px; }

  .form-holder span.placeholder {
    bottom: 36px; }
  .form-holder span.lnr-chevron-down, .form-holder span.lnr-calendar-full {
    bottom: 39px; }

  .select span.lnr-chevron-down {
    bottom: 10px; }

  h3 {
    width: 90%;
    text-align: center; } }



  .wrapper {
    margin-top: 20px;
    width: 40%;
    height: auto;
    border: solid 0.6px; 
    border-radius: 30px;
    box-shadow: 2px 2px;
    padding-top: 0px;
    margin-bottom: 5px;
    position: relative;
  }

.step-order {
  display: block;
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    margin-top: 14px;
}








    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body style="color: #999;">













<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color" style="background-color: #082465;">
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

<div class="image-holder">
<img src="images/imgac.jpg" style="height: 300px;width: 100%; background: black; opacity: 0.9;" alt="">
<h3>Ajouter les notes</h3>
</div>




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

$classe="SELECT * FROM classe where (id_sp=$sp and id_niv=$niv)";
$listclasse=mysqli_query($conn,$classe);

$matiere="SELECT * FROM matiere where id_mod=$mod";
$listmat=mysqli_query($conn,$matiere);
?>



<center>
    <div class="wrapper" >


            <form action="ajoutnote.php" method="get" style="width: 90%; margin-top: 10px;">
              <table style="width: 80%; text-align: center; color: black; padding: 0px; margin-bottom: 60px;">
                <tr>
                  <th><img src="images/step-2.png"></th>
                  <th><img src="images/step-arrow.png"></th>
                  <th><img src="images/step-2.png"></th>
                  <th><img src="images/step-arrow.png"></th>
                  <th><img src="images/step-2.png"></th>
                  <th><img src="images/step-arrow.png"></th>
                  <th><img src="images/step-2-active.png"></th>
                </tr>
                <tr>
                  <th><span class="step-order">ETAPE 01</span></th>
                  <th></th>
                  <th><span class="step-order">ETAPE 02</span></th>
                  <th></th>
                  <th><span class="step-order">ETAPE 03</span></th>
                  <th></th>
                  <th><span class="step-order">ETAPE 04</span></th>
                </tr>
              </table>







  <span class="step-order" style="text-align: left;">Choisir La matiére:</span>

      <select class="custom-select" id="inlineFormCustomSelectPref" name="matiere" style="width: 90%; border-radius: 5px; margin-top: 5px; position: absolute;
  left: 25px">
      <?php while ($row3 = mysqli_fetch_array($listmat)):?>
        <option style="width: 50%; border-radius: 25px;" value="<?php echo $row3[0]; ?>"><?php echo $row3[2]; ?></option>
      <?php endwhile; ?>
    </select>
<br>
<br>
<span class="step-order" style="text-align: left;">Choisir La classe:</span>
    <select class="custom-select" id="inlineFormCustomSelectPref" name="classe" style="width: 90%; border-radius: 5px; margin-top: 5px; position: absolute;
  left: 25px;">
      <?php while ($row4 = mysqli_fetch_array($listclasse)):?>
        <option style="width: 50%; border-radius: 5px;" value="<?php echo $row4[0]; ?>"><?php echo $row4[1]; ?></option>
      <?php endwhile; ?>
    </select>
<br>
<br>
<br>

<input type="text" name="specialite" value="<?php echo $sp ?>" hidden>
<input type="text" name="niveau" value="<?php echo $niv ?>" hidden>
<input type="text" name="semestre" value="<?php echo $sem ?>" hidden>
<input type="text" name="module" value="<?php echo $mod ?>" hidden>
    <input style="margin-top: 7px; border-radius: 5px; position: absolute;
  right: 30px; background-color: #8EB852; border-color: #8EB852;" type="submit" value="Confirmé" class="btn btn-success">

                  </form>
    </div>
    </center>


<center>

<form action="ajoutnote.php" method="get" >


</form>
  </center>
</body>
</html>