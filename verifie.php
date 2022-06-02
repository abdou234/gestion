
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
if(isset($_POST['insert'])){
  //on teste si tous les champs du formulaire sont remplits
  if ((empty($_POST['prenom'])) || (empty($_POST['nom'])) || (empty($_POST['service'])) || (empty($_POST['status'])) || (empty($_POST['Age'])) ||(empty($_POST['temperature'])) ||(empty($_POST['Poids'])) ||(empty($_POST['Taille'])) ||(empty($_POST['IMC'])) || (empty($_POST['Glycemie']))|| (empty($_POST['horaire']))){
    echo '<div class="alert alert-danger" role="alert">
    veillez remplir tous les champs
   </div>';
  }
  else{
  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
  // récupérer les valeurs 
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $service = $_POST['service'];
  $status= $_POST['status'];
  $Age= $_POST['Age'];
  $temperature= $_POST['temperature'];
  $Poids = $_POST['Poids'];
  $Taille= $_POST['Taille'];
  $IMC= $_POST['IMC'];
  $Glycemie = $_POST['Glycemie'];
  $horaire = $_POST['horaire'];
  


  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `medcin`(prenom,nom,service,status,Age,temperature,Poids,Taille,IMC,Glycemie,horaire) VALUES (:prenom,:nom,:service,:status,:Age,:temperature,:Poids,:Taille,:IMC,:Glycemie,:horaire)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":prenom"=>$prenom,":nom"=>$nom,":service"=>$service,":status"=>$status,":Age"=>$Age,":temperature"=>$temperature,":Poids"=>$Poids,":Taille"=>$Taille,":IMC"=>$IMC,":Glycemie"=>$Glycemie,":horaire"=>$horaire));
  // vérifier si la requête d'insertion a réussi
  
  
  if($exec){
    echo '<div class="alert alert-success" role="alert">
    <div class="me-auto font-weight-bold">Sama</div>
   les donnees ont ete bien enregistre dans la base de donnee
  </div>';
  }else{
    echo "Echec de l operation d'insertion";
  }
  $pdo=null;
}}
?>
</div>