
<!DOCTYPE html>
<html lang="fr">
  <head>
   	<meta charset="utf-8">
    <title>hopital</title>
    
    <link rel="stylesheet" type="text/css" href="rendez-vous.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  </head>

  <body background="imagess.jpg">
    
    <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div align="right" class="lam">
    <ul class="navbar-nav d-lg-block ">
                <li class="nav-item">
                  <a href="conn.php" class="btn btn-sm mb-0 me-1 bg-gradient"> SAMA RV</a>
                  </ul>
</div>
                  <div align="left" class="lam">
                  <ul class="navbar-nav d-lg-block d-none">
                
                  <a href='Contact/urgencess.php' class="btn btn-sm mb-0 me-1 bg-gradient-dark" >connexion</a>
               
              </ul>
                </li>

                </div>           
</nav>
    
    <div class="container register">
    <div class="row">
    <?php 
      include("mane.php");

    ?> 
   
   <div class="Rv"><marquee behavior="alternate"><h1>Gestion des rendez vous</h1></marquee></div>
  	<div class="main">
    <form action="" method="post">
      <div id="name">
      <h2 class="name">Prenom</h2>
      <p><input class="prenom" type="text" name="prenom"></p>
      <h2 class="names">Nom</h2>
      <p><input class="nom" type="text" name="nom"></p>
    </div>
      <h2 class="name">Date de Naissance</h2>
      <p><input class="naissance" type="Date" name="naissance"></p>
      <h2 class="name">Adresse</h2>
      <p><input class="adresse" type="text" name="adresse"></p>
      <h2 class="name">Telephone</h2>
      <input class="indi" type="number" name="indi" value="221">
      <p><input class="phone" type="number" name="telephone"></p>
      <h2 class="name">Service</h2>
      <select class="option" name="depar">
        <option disabled="disabled" selected="selected"> Choisissez un service</option>
        <option>cardiologie</option>
        <option>neurologie</option>
        <option>immunologie</option>
        <option>radiologie</option>
        <option>chirurgie</option>
        <option>pediatrie</option>
        <option>pneumologie</option>
        <option>odontologie</option>
      </select>
      <h2 class="name">Horaire de rendez vous</h2>
      <p><input class="jour" type="Datetime-local" name="horaire"></p>
      <h2 class="name"></h2>
      <p><input class="boutton" type="submit" name='insert'value="Enregistrer"></p>
  </div>
    </form>
     </div>
  </body>
</html>