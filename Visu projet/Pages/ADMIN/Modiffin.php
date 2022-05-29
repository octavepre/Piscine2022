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
if(isset($_POST['login']))
{$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['telephone'];
$spe = $_POST['spe'];
$mdp = $_POST['mdp'];
$mail=$_POST['mail'];

$sql="UPDATE intervenant SET Nom='".$nom."',Prenom='".$prenom."',telephone='".$tel."',Specialite='".$spe."',Courriel='".$mail."',`Mot de passe`='".$mdp."' WHERE ID ='".$_SESSION['ModifID']."'";
if(mysqli_query($conn,$sql))
{
    echo "Element modifié <br><a href='../PageAdmin.php'>Retour accueil</a>";
}}

mysqli_close($conn);
?>