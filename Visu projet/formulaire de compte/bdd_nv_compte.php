<?php
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
    $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
    if(!$conn){
        die("Échec de la connexion : " . mysqli_connect_error());
    }
}
 
echo "Connexion réussie";
if ( isset( $_POST['Envoyer'] ) ) {

    $id = $_POST['ID']; 
    $Nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];
    $type = $_POST['type'];
    $mail = $_POST['mail'];
    $spe = $_POST['spe'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $tel = $_POST['tel'];
    $postal = $_POST['postal'];
    $pays = $_POST['pays'];

    $sql= "INSERT INTO `compte` (`ID`,`Nom`,`prenom`,`Mot de passe`,`type`) VALUES ('" . $id . "','" . $Nom . "','" . $prenom . "','" . $mdp . "','" . $type ."')";
    if (mysqli_query($conn, $sql)) {
      if($type == "1")
      {
        $sql= "INSERT INTO `administrateur` (`ID`,`Nom`,`Prenom`,`Courriel`) VALUES ('" . $id . "','" . $Nom . "','" . $prenom . "','" . $mail ."')";
      }
      if($type == "2")
      {
        $sql= "INSERT INTO `intervenant` (`ID`,`Nom`,`Prenom`,`Specialite`,`telephone`,`Courriel`) VALUES ('" . $id . "','" . $Nom . "','" . $prenom . "','" . $spe . "','" . $tel . "','" . $mail ."')";
      }
      if($type == "3")
      {
        $sql= "INSERT INTO `client` (`ID`,`Nom`,`Prenom`,`Adresse`,`Ville`,`Code postal`,`Pays`,`telephone`,`courriel`) VALUES ('" . $id . "','" . $Nom . "','" . $prenom . "','" . $adresse . "','" . $ville . "','" . $postal . "','" . $pays . "','" . $tel . "','" . $mail ."')";
      }
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}}

mysqli_close($conn);
/*
if ( isset( $_POST['Envoyer'] ) ) {

    $id = $_POST['ID']; 
    $Nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];
    $type = $_POST['type'];

    echo $id . " " . $Nom . " " . $prenom . " " . $mdp . " " . $type . "<br> "; 

    if($db_found){
        $sql= "INSERT INTO `compte` (`ID`,`Nom`,`prénom`,`Mot de passe`,`type`) VALUES ('" . $id . "','" . $Nom . "','" . $prenom . "','" . $mdp . "','" . $type ."')";
        if(mysqli_query($db_handle, $sql))
        {
            echo "benef";
        }
        
        }
}
mysqli_close($db_handle);*/
?>