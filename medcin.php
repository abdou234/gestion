
<!DOCTYPE html>
<html lang="fr">
  <head>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<meta charset="utf-8">
    <title>hopital</title>
    <link rel="stylesheet" type="text/css" href="EDIT.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>

  <body background="imagess.jpg">
    <div align="right" class="lam">
    
    </div>
    <div class="container register">
    <div class="row">
    <?php 
      include("verifie.php");

    ?> 
   
  	<div class="Rv"><h2>Dossier medical patient</h2></div>
  	<div class="main">
    <form action="" method="post">
      <div id="name">
      <h2 class="name">Prenom</h2>
      <p><input class="prenom" type="text" name="prenom"></p>
      <h2 class="names">Nom</h2>
      <p><input class="nom" type="text" name="nom"></p> 
</div> 
<div>
      <h2 class="age">Age</h2>
      <p><input class="ages" type="number" name="Age"></p>
      <h2 class="temp">Temperature</h2>
      <p><input class="temperature" type="number" name="temperature"></p>
      <h2 class="poi">Poids</h2>
      <p><input class="poids" type="number" name="Poids"></p>
      <h2 class="taille">Taille</h2>
      <p><input class="tailles" type="number" name="Taille"></p>
      <h2 class="poi">IMC</h2>
      <p><input class="poids" type="number" name="IMC"></p>
      <h2 class="temp">Glycemie g/l </h2>
      <p><input class="tailles" type="number" name="Glycemie"></p>
    </div>
      <h2 class="name">Services</h2>
      <select class="option"  name="service">
        <option disabled="disabled" selected="selected"> Choisissez un service</option>
        <option>médecine générale</option>
        <option>cardiologie</option>
        <option>neurologie</option>
        <option>immunologie</option>
        <option>radiologie</option>
        <option>chirurgie</option>
        <option>pediatrie</option>
        <option>pneumologie</option>
        <option>odontologie</option>
      </select>
      
      <h2 class="name">Sexe</h2>
      <select class="option"  name="status">
        <option disabled="disabled" selected="selected"></option>
        <option>Homme</option>
        <option>Femme</option>
        
      </select>
      <h2 class="name">Date de consultation</h2>
      <p><input class="naissance" type="Date" name="horaire"></p>
      
      <p><input class="boutton" type="submit" name="insert" value="Enregistrer"></p>
  </div>
    </form>
     </div>
     </div>
     </div>
  </body>
</html>