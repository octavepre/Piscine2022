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
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];

        $sql="SELECT * FROM intervenant WHERE Nom =  '" .$nom. "' AND prenom = '" .$prenom."'  AND `Mot de passe` = '" .$mdp."'";
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
            //header('Location : connecté.php') ;*/

            //echo "cool raoul " . $data['Prenom'];
            $_SESSION['PrenomClientActuel']=$data['Prenom'];
            $_SESSION['NomClientActuel']=$data['Nom'];
            $_SESSION['IdClientActuel']=$data['ID'];
            sleep(2);
            header("Location: http://localhost/Piscine2022/Visu%20projet/Pages/connect%C3%A9prof.php");
            exit();
            //echo "Connexion reussie <br> <a href=\"connectéprof.php\">ca flex </a>";
        }
}

?>