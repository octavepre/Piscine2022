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
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

        $sql="SELECT * FROM client WHERE courriel =  '" .$mail. "' AND `Mot de passe` = '" .$mdp."' ";
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
            $nom =$data['Nom'];
            $prenom=$data['Prenom'];
            $_SESSION['IdClientActuel']= $data['ID'];
            $_SESSION['NomClientActuel']= $nom;
            $_SESSION['PrenomClientActuel']= $prenom;
            $_SESSION['AdresseClientActuel']=$data['Adresse'];
            $_SESSION['VilleClientActuel']=$data['Ville'];
            $_SESSION['Code postalClientActuel']=$data['Code postal'];
            $_SESSION['PaysClientActuel']=$data['Pays'];
            $_SESSION['telephoneClientActuel']=$data['telephone'];
            $_SESSION['Carte etudianteClientActuel']=$data['Carte etudiante'];
            $_SESSION['mailClientActuel']=$data['courriel'];
            $_SESSION['MDPClientActuel']=$data['Mot de passe'];
            /*echo $_SESSION['PrenomClientActuel'];
            echo "cool raoul " . $data['Prenom'];*/
            sleep(2);
            header("Location: http://localhost/Piscine2022/Visu%20projet/Pages/connect%c3%a9.php");
            exit();
            //echo "Connexion reussie <br> <a href=\"connecté.php\">ca flex </a>";
        }
}

?>