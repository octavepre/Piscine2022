<?php

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, "projetweb");

if ( isset( $_POST['submit'] ) ) {

    $id = $_POST['ID']; 
    $Nom = $_POST['nom']; 
    $Courriel = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $type = $_POST['type'];

}

$sql = "INSERT INTO compte (`id`,`Nom`,`Courriel`,`Mot de passe`,`type`) VALUES ($id,$Nom,$Courriel,$mdp,$type) ";
    $resultat = mysqli_query($db_handle, $sql);

mysqli_close($db_handle);
?>