<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "la_concept_store";
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$ville=$_GET['ville'];
$adresse=$_GET['adresse'];
$code=$_GET['code'];
$tele=$_GET['tele'];
$mail=$_GET['mail'];
$mdp=$_GET['mdp'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`, `ville`, `code`, `telephone`, `email`, `password`) VALUES (NULL, '$nom','$prenom','$ville','$adresse','$code','$tele','$mail','$mdp')";
    // use exec() because no results are returned
    //echo $sql;exit;
    $conn->exec($sql);
    echo "Inscription réussie";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


/*$name = $_REQUEST['nom'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   echo "Bienvenue ".$name;  
}*/
?>
