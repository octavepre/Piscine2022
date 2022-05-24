<?php

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, "projetweb");

if ( isset( $_POST['Envoyer'] ) ) {

    $id = $_POST['ID']; 
    $Nom = $_POST['nom']; 
    $Courriel = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $type = $_POST['type'];

}

$sql = "INSERT INTO compte (`id`,`Nom`,`Courriel`,`Mot de passe`,`type`) VALUES ($id,$Nom,$Courriel,$mdp,$type) ";
$resultat = mysqli_query($db_handle, $sql);
    if($db_found){
        $sql= "INSERT INTO compte (`id`,`Nom`,`Photo de profil`,`Spécialité`,`vidéo`,`CV`,`Courriel`,`Mot de passe`,`type`) VALUES ('".$id."','".$Nom."','','','','','".$Courriel."','".$mdp."','".$type."')";
        $result = mysqli_query($db_handle, $sql);
        
        if (mysqli_query($db_found, $sql))
        {
            echo "benef";
        }
        }else{
            echo "Database not found";
        }
}
mysqli_close($db_handle);
?>