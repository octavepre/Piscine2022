<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
    $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
    if(!$conn){
        die("Échec de la connexion : " . mysqli_connect_error());
    }
}

$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$tel = isset($_POST["telephone"]) ? $_POST["telephone"] : "";
$spe = isset($_POST["spe"]) ? $_POST["spe"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
$mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
$Date = isset($_POST["Date"]) ? $_POST["Date"] : "";
$do = isset($_POST["dayOff"]) ? $_POST["dayOff"] : "";

echo "<h2>".$nom."  ".$prenom."  ".$tel."  ".$spe."  ".$mdp."   ".$mail."  ".$do."</h2>";

$sql="UPDATE intervenant SET Nom='".$nom."',Prenom='".$prenom."',telephone='".$tel."',Specialite='".$spe."',Courriel='".$mail."',`Mot de passe`='".$mdp."',`dayoff`='".$do."' WHERE ID ='".$_SESSION['ModifID']."'";
if(mysqli_query($conn,$sql))
{
    echo "Element modifié <br><a href='../PageAdmin.php'>Retour accueil</a>";
}

mysqli_close($conn);
?>