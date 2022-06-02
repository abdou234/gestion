

<?php
$host = 'localhost';
$dbport='3307';
$dbname = 'test';
$username = 'root';
$password = '';

if(isset($_POST['insert'])){
  //on teste si tous les champs du formulaire sont remplits
  if ((empty($_POST['prenom'])) || (empty($_POST['nom'])) || (empty($_POST['naissance'])) || (empty($_POST['adresse'])) || (empty($_POST['telephone']))|| (empty($_POST['depar'])) || (empty($_POST['horaire']))){
    echo '<div class="alert alert-danger" role="alert">
    veuillez remplir tous les champs
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
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $naissance = $_POST['naissance'];
  $adresse = $_POST['adresse'];
  $telephone = $_POST['telephone'];
  $depar = $_POST['depar'];
  $horaire = $_POST['horaire'];


  // Requête mysql pour insérer des données
  $sql ="INSERT INTO `ndiaye`(prenom,nom,naissance,adresse,telephone,depar,horaire) VALUES (:prenom,:nom,:naissance,:adresse,:telephone,:depar,:horaire)";
  $res =$pdo->prepare($sql);
  $exec =$res->execute(array(":prenom"=>$prenom,":nom"=>$nom,":naissance"=>$naissance,":adresse"=>$adresse,":telephone"=>$telephone,":depar"=>$depar,":horaire"=>$horaire));
  // vérifier si la requête d'insertion a réussi
  
  
  if($exec){
    echo "
   les donnees ont ete bien enregistre dans la base de donnee
  ";
  }
  else{
    echo "Echec de l operation d'insertion";
  }
  $pdo=null;
}}
?>

</div>