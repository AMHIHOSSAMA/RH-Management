<?php
  
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gestion des employes";
  $db = new mysqli('localhost','root','','gestion des employes') or die(mysqli_error($dbname));
   
        $matricul=$_GET['delete'];

        $sql="DELETE FROM employers WHERE matricul='$matricul'";
        mysqli_query($db,$sql);
      
 
header("location:table.php");
?>