 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
     <link rel="stylesheet" href="form.css">
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
     <main>
         <form id="myform" action="table.php" method="post">
             <div class="row">
                 <div class="col">
                     <input type="number" class="form-control" placeholder="Matricul" name="matricul">
                 </div>
                 <div class="col">
                     <input type="text" class="form-control" placeholder="Nom" name="nom">
                 </div>
             </div>
             <div class="row">
                 <div class="col">
                     <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                 </div>
                 <div class="col">
                     <input type="date" class="form-control" placeholder="Date de naissance" name="date">
                 </div>
             </div>
             <div class="row">
                 <div class="col">
                     <select class="form-select" aria-label="Default select example" name="departement">

                         <option selected>Département</option>
                         <option value="Ressources humaines">Ressources humaines</option>
                         <option value="Finances">Finances</option>
                         <option value="Département légal">Département légal</option>
                         <option value="Recherche & Développement">Recherche & Développement</option>
                         <option value="Marketing">Marketing</option>
                         <option value="Contrôle de qualité">Contrôle de qualité</option>
                         <option value="Gestion">Gestion</option>
                         <option value="IT">IT</option>
                     </select>
                 </div>
                 <div class="col">
                     <input type="number" class="form-control" placeholder="Salaire" name="salaire">
                 </div>
             </div>
             <div class="row">
                 <div class="col">
                     <input type="text" class="form-control" placeholder="Fonction" name="fonction">
                 </div>
                 <div class="col">
                     <input type="text" class="form-control" placeholder="Photo url" name="photo">
                 </div>
             </div>
             <button type="submit" class="btn btn-primary" name="update" for="form">Update</button>
         </form>
     </main>
     <img src="" alt="">

     <?php


$db = new mysqli('localhost','root','','gestion des employes') or die(mysqli_error($dbname));
$matricul=$_GET['edit'];
     if (isset($_GET['edit'])) {
        $matricul = $_POST['matricul'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dates = $_POST['date'];
        $departement = $_POST['departement'];
        $salaire = $_POST['salaire'];
        $fonction = $_POST['fonction'];
         $photo = $_POST['photo'];



         
 
         $sql="UPDATE  `employers` SET `matricul`='$matricul','nom'='$nom','prenom'='$prenom','date'='$dates','departement'='$departement','salaire'='$salaire','fonction'='$fonction','photo'='$photo' matricul='$matricul'";
         $result=mysqli_query($db,$sql);
         if ($result) {
             echo "DELETED";
         }else {
             echo "Not deleted";
         }
     }
     
    

?>




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>
 </body>

 </html>