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

$id=$_GET['prof'];

$sql="DELETE FROM intervenant WHERE ID = '".$id."'";
if(mysqli_query($conn,$sql))
{
    echo "Element supprimé <br><a href='../PageAdmin.php'>Retour accueil</a>";
}

mysqli_close($conn);
?>