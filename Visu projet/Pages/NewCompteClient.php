<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}

if(isset($_POST['login']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $postal = $_POST['postal'];
    $pays = $_POST['Pays'];
    $tel = $_POST['telephone'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $confirm= $_POST['conf'];

    if($nom == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($prenom == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($adresse == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($ville == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($postal == '')
    {
        echo"<td>
        <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
    </a></td>";
    }
    else if($pays == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($tel == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($mail == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($mdp == '')
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    }
    else if($mdp != $confirm)
    {
        echo"<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Mot de passe incorrect\")'>
            </a></td>";
    }
    else {
 
        echo "allo";
        $sql= "INSERT INTO `client` (`Nom`,`Prenom`,`Adresse`,`Ville`,`Code postal`,`Pays`,`telephone`,`Carte etudiante`,`courriel`,`Mot de passe`) VALUES ('" . $nom . "','" . $prenom . "','" . $adresse . "','" . $ville . "','" . $postal . "','" .$pays. "','" .$tel. "',' ','" .$mail. "','" . $mdp . "')";

        if (mysqli_query($conn, $sql))
        {
            echo "au top";
        }
        sleep(2);
        session_start();
        $_SESSION['PrenomClientActuel']=$prenom;
        $_SESSION['NomClientActuel']=$nom;
        header("Location: http://localhost/Piscine2022/Visu%20projet/Pages/connect%c3%a9.php");
        exit();
        mysqli_close($conn);
    }
    
}
