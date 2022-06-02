<?php
session_start();
if(isset($_SESSION["user"])&& isset($_SESSION["passer"])){
  $host = 'localhost';
  $dbport=3307;
  $dbname = 'test';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;port=$dbport;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = ("SELECT * FROM ndiaye WHERE id <=20");
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="secretaire.css">
<script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(
		function(){ 
			$("li").toggles("fast"); 

		});
});
</script><p>
</head>
<body bgcolor="pink">
	<div class="liste">
 <h3><a href="profil.php">Profile</a></h3>
 <h3><a href="index.php">Ajouter un rendez-vous</a></h3>
 <h3><a href="deconnection.php">se deconnecté</a></h3><br>
 </div>
 <h1 align="center">Liste des rendez-vous</h1>
 <div class="td">
 	<font color="black">
 <table cellpadding="10" cellspacing="1" border="3"  align="center">
   <tr>
   	<th>ID</th><th>Prenoms</th><th>Noms</th><th>Date de naissances</th><th>Adresses</th><th>Telephones</th><th>Services</th><th>Horaires</th>
   </tr>
   <tbody>
   	
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     	<tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['prenom']); ?></td>
       <td><?php echo htmlspecialchars($row['nom']); ?></td>
       <td><?php echo htmlspecialchars($row['naissance']); ?></td>
       <td><?php echo htmlspecialchars($row['adresse']); ?></td>
       <td><?php echo htmlspecialchars($row['telephone']); ?></td>
       <td><?php echo htmlspecialchars($row['depar']); ?></td>
       <td><?php echo htmlspecialchars($row['horaire']); ?></td>
      </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 </font>
 </div>
</body>
</html>
<?php
}
else{
	header("Location:conn.php? msg=vous etes deconnecté ou pas encore connecter ");

}
?>