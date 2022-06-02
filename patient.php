<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php

    $host = 'localhost';
    $dbport=3307;
    $dbname = 'test';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;port=$dbport;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $id=$_GET['id'];
    $sql = "SELECT * FROM medcin where id='$id'";
    
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
	
	
	<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class='container'>
		<section id="wrap">

        <div class="content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12" style="box-shadow: 0px 0px 4px 4px rgba(0.1,0.1,0.1,0.1); padding:20px">
                           <div class="card strpied-tabled-with-hover">
                               <div class="card-header ">
                                   <h4 class="card-title"> Dossier  medical du patient</h4>
                               </div>
                               <div class="card-body table-full-width table-responsive">

			<div class="">
  <?php echo $row['prenom']; ?> <?php echo $row['nom']; ?>">
			</div>

			<table class="container">
				<thead>
					<tr class=>
						<th colspan="2">Coordonnées</th>
					</tr>
				</thead>
				<tr>
					<td>id</td>
					<td><?php echo htmlspecialchars($row['id']); ?></td>
				</tr>
				<tr>
					<td>Prénom</td>
					<td><?php echo htmlspecialchars($row['prenom']); ?></td>
				</tr>
				<tr>
					<td>Nom</td>
					<td><?php echo htmlspecialchars($row['nom']); ?></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><?php echo htmlspecialchars($row['Age']); ?></td>
				</tr>
				<tr>
					<td>temperature</td>
					<td><?php echo htmlspecialchars($row['temperature']); ?></td>
				</tr>
				<tr>
					<td>Poids</td>
					<td><?php echo htmlspecialchars($row['Poids']); ?></td>
				</tr>
				<tr>
					<td>Taille</td>
					<td><?php echo htmlspecialchars($row['Taille']); ?></td>
				</tr>
				<tr>
					<td>IMC</td>
					<td><?php echo htmlspecialchars($row['IMC']); ?></td>
    </tr>
    <tr>
					<td>Glycemie</td>
					<td><?php echo htmlspecialchars($row['Glycemie']); ?></td>
				</tr>
                <tr>
					<td>service</td>
					<td><?php echo htmlspecialchars($row['service']); ?></td>
				</tr>
                <tr>
					<td>Sexe</td>
					<td><?php echo htmlspecialchars($row['status']); ?></td>
				</tr>
                <tr>
					<td>Horaire</td>
					<td><?php echo htmlspecialchars($row['horaire']); ?></td>
				</tr>
				
				</tr>
			</table>
            <?php endwhile; ?>
            </div>
                           </div>
                       </div>
                       
                   </div>
               </div>
