<?php 

$serv = "localhost";
$uName = "root";
$pass = "";
$db_name = "_to_do_list";

try {
    $conn = new PDO("mysql:host=$serv;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Erreur Connexion : ". $e->getMessage();
}
?>