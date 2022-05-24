<?php

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, "projetweb");

if(isset($_POST['Connexion']))
{
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    echo 'nom : ' . $nom . ',<br>mot de passe : ' . $mdp;
    if($db_found)
    {
        $sql="SELECT * FROM compte WHERE Nom =  '" .$nom. "'  AND `Mot de passe` = '" .$mdp."'";
        $result = mysqli_query($db_handle, $sql);

        while($data = mysqli_fetch_assoc($result)){
            echo $data['type'] . ", " . $data['Courriel'] . "<br>";
            //header('Location : www.localhost/piscine2022/Visu projet/connecté.html') ;
        }
    }
}

?>