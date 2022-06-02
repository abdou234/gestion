<?php
require 'tablesurgence.php';

    $id=$_GET['id'];
    $sql = 'DELETE  FROM urgences where id=:id';  
    $stmt = $pdo->prepare($sql);
if($stmt->execute([':id'=> $id ])){
   
}
    ?>