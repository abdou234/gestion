<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>
 <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          
<title>page de connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="secretaire.css">
</head>
<body background="img2.jpg">
	<h1 align="center">page de Medcin</h1>


<form method="post" action="">
	<fieldset>
		
		<legend><h2></h2></legend>
    <input type="text" name="login" placeholder="login"><br><br>
                    <input type="password" name="password" placeholder="mot de passe"><br><br>
                    <input type="submit" name="validation" value="envoye" id="bouton">
 <!--
=========================================================
* div class="coul">
<?php
 if (isset($_GET['msg'])) {
 	echo htmlspecialchars($_GET['msg']);
 }
 ?>
 </div>
<div class="coul"> 
 
<?php
$host = 'localhost';
$dbport=3307;
$dbname = 'test';

$username = 'root';
$password = '';
if(isset($_POST['validation']))
{
     try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {
       $login=$_POST['login'];
        $password=$_POST['password'];
        $q = $pdo->prepare("SELECT * FROM secretaire WHERE login = :user && password = :passer");   
        $q->execute(array(
            'user' => $login,
            'passer' => $password
        ));

        $resultat = $q->fetch();

       
        if(!$resultat){
            header("location:sign.php?msg=login et/ou mot de passe incorrect");
           }
           
         else{
            session_start();
            $_SESSION['user'] = $login;
            $_SESSION['passer'] = $password;
             
                header("location:dashboard.html");
            
           
            }
}
       else {

        $erreur = "erreur";
        header("location:sign-up.php?msg=veuillez remplir tous les champs");
      }}

?>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/conn.php">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                  
                    Sama rv
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/conn.php">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    admin
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/medcin*.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    medcin
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-up.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                  secretaire
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/material-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-dark">connexion</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
 
              
	


</fieldset>

</div>
</form>
</body>
</html>         
