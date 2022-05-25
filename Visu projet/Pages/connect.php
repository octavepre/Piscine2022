<?php

$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}

if(isset($_POST['login']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];

        $sql="SELECT * FROM compte WHERE Nom =  '" .$nom. "' AND prenom = '" .$prenom."'  AND `Mot de passe` = '" .$mdp."'";
        $result = mysqli_query($conn, $sql);

        while($data = mysqli_fetch_assoc($result)){
            
            /*if($data['type'] == 1)
            {
                //ouvrir page admin
            }
            if($data['type'] == 2)
            {
                //ouvrir page intervenant
            }
            if($data['type'] == 3)
            {
                echo "cool raoul";
                //ouvrir page client/etudiant
            }
            //echo $data['type'] . ", " . $data['Courriel'] . "<br>";
            //header('Location : connecté.html') ;*/

            echo "cool raoul " . $data['prenom'];
            echo "Connexion reussie <br> <a href=\"connecté.html\">ca flex </a>";
        }
}

?>