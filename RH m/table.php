<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container" id="allnav">
            <a class="navbar-brand"><img id="logo" src="logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Les employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">L’entreprise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Recherche</a>
                    </li>
                </ul>
                <button id="btnajout" type="button" class="btn btn-outline-light">Ajouter</button>

            </div>
        </div>
    </nav>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Matricul</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date</th>
                <th scope="col">Departement</th>
                <th scope="col">Salaire</th>
                <th scope="col">Fonction</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <?php 
$server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gestion des employes";
  $db = new mysqli('localhost','root','','gestion des employes') or die(mysqli_error($dbname));

  // $mysqldata =$db->prepare("SELECT * FROM employers");
  // $mysqldata->execute();

 
  if (isset($_POST['submit'])) {
    if (!empty($_POST['matricul'])&& !empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['date'])&& !empty($_POST['departement'])&& !empty($_POST['salaire'])&& !empty($_POST['fonction'])&& !empty($_POST['photo'])){
      
    $matricul = $_POST['matricul'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dates = $_POST['date'];
    $departement = $_POST['departement'];
    $salaire = $_POST['salaire'];
    $fonction = $_POST['fonction'];
    $photo = $_POST['photo'];

    $sql = "INSERT INTO `employers` (`Matricul`, `Nom`, `Prénom`, `Date de naissance`, `Département`, `Salaire`,`Fonction`, `Photo`)
VALUES ('$matricul', '$nom', '$prenom', '$dates', '$departement' ,'$salaire', '$fonction',  '$photo')";
  
$insert = mysqli_query($db,$sql);


}
  }
  $sql_get = "SELECT `Matricul`, `Nom`, `Prénom`, `Date de naissance`, `Département`, `Salaire`,`Fonction`, `Photo` from `employers`";
  $result = $db-> query($sql_get);
  if ($result-> num_rows > 0){
    while ($row = $result -> fetch_assoc()) {
      echo "<tr><td>".$row["Matricul"] . "</td><td>".$row["Nom"] . "</td><td>". $row["Prénom"] . "</td><td>". $row["Date de naissance"] . "</td><td>".$row["Département"] . "</td><td>". $row["Salaire"] . "</td><td>". $row["Fonction"] . "</td><td>". $row["Photo"] . "</td><td><a name='modifie' href='update.php?edit=$row[Matricul]' class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fa fa-edit'></i></a><a name='delete' href='delete.php?delete=$row[Matricul]' class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></a>";
    }
  }
  
  if (isset($_POST['modifie'])) {
    $matricul = $_POST['modifie'];
    $mysqli->query("UPDATE  employers SET `Matricul` =$matricul , `Nom` = $nom, `Prénom` = $prenom,`Date de naissance`= $dates, `Département`= $departement, `Salaire`= $salaire,`Fonction`= $fonction,`Photo`=$photo, WHERE Matricul=$id") or die($mysqli->error());
  }

  $db-> close();
?>
        <!-- <tbody>
    <tr>
      <td><?php echo $matricul ?></td>
      <td><?php echo $nom ?></td>
      <td><?php echo $prenom ?></td>
      <td><?php echo $dates ?></td>
      <td><?php echo $departement ?></td>
      <td><?php echo $salaire ?></td>
      <td><?php echo $fonction ?></td>
      <td><img src="<?php echo $photo ?>" ></td>
    </tr>
  </tbody> -->
    </table>


</body>

</html>