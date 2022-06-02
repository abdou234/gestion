<?php
require 'tablemedcin.php';

    $id=$_GET['id'];
    $sql = 'DELETE  FROM medcin where id=:id';  
    $stmt = $pdo->prepare($sql);
if($stmt->execute([':id'=> $id ])){
   
}
    ?>