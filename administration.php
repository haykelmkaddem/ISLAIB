<?php
session_start();
if(isset($_SESSION["email"])){ header("location: welcome.php"); exit; }
$errors = ""; 
$has_error = ""; 
$id=isset($_GET['id'])?$_GET['id']:"erreur";
if($_SERVER["REQUEST_METHOD"] == "POST"):
    require_once "connect.php";
    $email = isset($_POST['email'])?htmlspecialchars($_POST['email']):'';
    $password = isset($_POST['password'])?htmlspecialchars($_POST['password']):'';
    
    $login = new MySQL();
    $errors = $login->check_empty(['E-mail'=>$email,'Password'=>$password]);

if(empty($errors)) if(!$login->is_email_valid($email))$errors.= "l'Email n'est pas valide<br>";
if(empty($errors)) if(!$login->isAdminExist($email))$errors .= "Aucun Compte Trouver<br>";
if(empty($errors)) {
    
    if(!$login->isLoginCorrect($email,$password))$errors .= "l'E-mail ou Mot de passe ne sont pas correct";
    else{
        $_SESSION['id'] = $login->getAdminId($email);
        $_SESSION['email'] = $email;
        $_SESSION['active'] = 1;
        if(isset($_POST['id_action'])) header("location: welcome.php".$_POST['id_action']);        
        else header("location: acceuil.php");        
    }
}
if(!empty($errors)) $has_error = "has-error";
endif;
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Intranet</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />





  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	 font-size:16px;
     height: 50px;
    border-radius: 15px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;

}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 100000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

.modal::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.modal::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.modal::-webkit-scrollbar-thumb {
  background: #888; 
}
.it-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<body background="../background1.png">

<?php

if (!empty($errors)) {
  ?>
  <div class="alert alert-danger" role="alert">
<?php
echo $errors;

?>
</div>
  <?php

}

?>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="">
            <img src="images/ISLAIB.png" alt="">
            <span>
              ISLAIB
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="etudiant.php"> Etudiants <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="enseignant.php"> Enseignants </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="Administration.php"> Administration </a>
                </li>
              </ul>
              
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Bienvenue à votre<br>
            Espace
          </h3>
          <h1>
             administration
          </h1>
          <p>
            Protégez vos données personnelles Si vous utilisez un ordinateur public ou partagé, assurez-vous de quitter le navigateur à la fin de votre session de travail.
          </p>
          <div class="hero_btn-continer">
            <a onclick="document.getElementById('modal-wrapper').style.display='block'"  class="call_to-btn btn_white-border">
              <span>
                Login
              </span>
              <img src="images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/admin.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <div style="height: 170px;"></div>




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
     Institut supérieur des langues appliquées et d’informatique de Béja <br>Boulevard de l'environnment  B.P 340 Béja 9000. Tunisie Tél.: (216) 78 44 17 44 - Fax : (216) 78 44 17 44<br>
© Tous droits réservés 2015 ISLAIB
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->







<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="administration.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Login</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="E-mail" name="email">
      <input type="hidden" name="id_action" value="">
      <input type="password" placeholder="Enter Password" name="password"> 
      <input style="border-radius: 15px;" type="submit" class="btn btn-primary"  value="connexion">
            
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>








