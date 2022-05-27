<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}

function transfert(){
    $ret        = false;
    $img_blob   = '';
    $img_taille = 0;
    $img_type   = '';
    $img_nom    = '';
    $taille_max = 250000;
    $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
    
    if (!$ret) {
        echo "Problème de transfert";
        return false;
    } else {
        // Le fichier a bien été reçu
        $img_taille = $_FILES['fic']['size'];
        
        if ($img_taille > $taille_max) {
            echo "Trop gros !";
            return false;
        }

        $img_type = $_FILES['fic']['type'];
        $img_nom  = $_FILES['fic']['name'];
        $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
        $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
        $req = "INSERT INTO images (" . 
                                "img_nom, img_taille, img_type, img_blob " .
                                ") VALUES (" .
                                "'" . $img_nom . "', " .
                                "'" . $img_taille . "', " .
                                "'" . $img_type . "', " .
                                "'" . addslashes ($img_blob) . "') ";
        $ret = mysql_query ($req) or die (mysql_error ());
        return true;
    }
}

if(isset($_POST['login']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $postal = $_POST['postal'];
    $pays = $_POST['Pays'];
    $carte = $_POST['carte'];
    $tel = $_POST['telephone'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    if($nom == '')
    {
        error();
    }
    else if($prenom == '')
    {
        error();
    }
    else if($adresse == '')
    {
        error();
    }
    else if($ville == '')
    {
        error();
    }
    else if($postal == '')
    {
        error();
    }
    else if($pays == '')
    {
        error();
    }
    else if($tel == '')
    {
        error();
    }
    else if($mail == '')
    {
        error();
    }
    else if($mdp == '')
    {
        error();
    }
    else {

        echo $carte; 
        $sql= "INSERT INTO `compte` (`ID`,`Nom`,`Prenom`,`Adresse`,`Ville`,`Code postal`,`Pays`,`telephone`,`Carte etudiante`,`courriel`,`Mot de passe`) VALUES ('3','" . $nom . "','" . $prenom . "','" . $adresse . "','" . $ville . "','" . $postal . "','" .$pays. "','" .$tel. "','../Images/".$carte. "','" .$mail. "','" . $mdp . "')";

        if (mysqli_query($conn, $sql))
        {
            echo "au top";
        }
        mysqli_close($conn);
    }
}

?>