
<?php
include 'tables.php';
  $host = 'localhost';
  $dbport=3307;
  $dbname = 'test';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;port=$dbport;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM ndiaye ORDER BY id DESC";
  if(isset($_GET['s']) AND !empty($_GET['s'])){
    $s=htmlspecialchars($_GET['s']);
    $sql ='SELECT depar * FROM ndiaye Where depar Like"%'.$s.'"% ORDER BY id DESC';
  }
  ?>
  <form method='GET'>
             
  <input type="search" name='s'  placeholder='Rechercher'>
  <input type="submit" name='envoyer' >
</form>