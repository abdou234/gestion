
<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>


<?php


$host = 'localhost';
$dbport=3307;
$dbname = 'test';
$username = 'root';
$password = '';
$id=$_GET['id'];

  $sql = "SELECT * FROM medcin where id='$id'";
$pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname","$username","$password");
  if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['service']) && isset($_POST['status']) && isset($_POST['Age']) && isset($_POST['temperature']) && isset($_POST['Poids']) && isset($_POST['Taille']) && isset($_POST['IMC']) && isset($_POST['Glycemie']) && isset($_POST['horaire'])){
  
   $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $service =$_POST['service'];
  $status= $_POST['status'];
  $Age= $_POST['Age']; 
  $temperature= $_POST['temperature'];
  $Poids = $_POST['Poids'];
  $Taille= $_POST['Taille'];
  $IMC= $_POST['IMC'];
  $Glycemie = $_POST['Glycemie'];
  $horaire = $_POST['horaire'];
  // Requête mysql pour insérer des données
  $sql="UPDATE  'medcin' SET 'prenom'='prenom','nom=''nom','service'='service','status'='status','Age'='Age','temperature'='temperature','Poids'='Poids','Taille'='Taille','IMC'='IMC','Glycemie'='Glycemie','horaire'='horaire' WHERE 'id'='$id'";
  $stmt = $pdo->prepare($sql);
  if($stmt->execute(array(":prenom"=>$prenom,":nom"=>$nom,":service"=>$service,":status"=>$status,":Age"=>$Age,":temperature"=>$temperature,":Poids"=>$Poids,":Taille"=>$Taille,":IMC"=>$IMC,":Glycemie"=>$Glycemie,":horaire"=>$horaire))){
  // vérifier si la requête d'insertion a réussi
  
 echo'les donnees ont ete modifies';
  }
  
  $pdo=null;
}
?>
</div>