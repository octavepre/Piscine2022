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

    $nom = $_POST['nom_inter'];
    $prenom = $_POST['prenom_inter'];
    $tel = $_POST['telephone'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $confirm = $_POST['conf'];
    $Formations = isset($_POST["Formations"]) ? $_POST["Formations"] : "";
    $Experiences = isset($_POST["Experiences"]) ? $_POST["Experiences"] : "";
    $Diplomes = isset($_POST["Diplomes"]) ? $_POST["Diplomes"] : "";
    $Date = isset($_POST["Date"]) ? $_POST["Date"] : "";
    $Publication = isset($_POST["Publication"]) ? $_POST["Publication"] : "";
    $Nom = isset($_POST["Nom"]) ? $_POST["Nom"] : "";
    $spe = isset($_POST["spe"]) ? $_POST["spe"] : "";

    /*$Id=0;
    $sql5 = "SELECT * FROM `intervenant`";
    $result5 = mysqli_query($conn, $sql5);
    while($data5 = mysqli_fetch_assoc($result5))
    {
        if($Id < $data5['ID'])
        {
            $Id = $data5['ID'];
        }
    }
    $Id++;*/

    if ($nom == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    } else if ($prenom == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    } else if ($tel == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    } else if ($mail == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    } else if ($mdp == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Champ(s) manquant(s)\")'>
            </a></td>";
    } else if ($mdp != $confirm) {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Mot de passe incorrect\")'>
            </a></td>";
    }
    else if ($spe == '') {
        echo "<td>
                <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Mot de passe incorrect\")'>
            </a></td>";
    }
    else if ($date<1950 || $date>2022) {
                echo "<td>
                        <a class='btn btn-danger' style='width:100% ; height:62px; margin-top:-8px' onclick='alert(\"Date Incorrect\")'>
                    </a></td>";
    } else {

        //Création du XML
        $xmlFile = new DOMDocument('1.0', 'utf-8');
        $xmlFile->appendChild($bibliotheque = $xmlFile->createElement('CurriculumVitae'));

        $sql = "SELECT * FROM cv"; //avec son titre et auteur
                if ($Formations != "") {
                $sql .= " WHERE Formation LIKE '%$Formations%'"; }
                                }
                $result = $conn ->query($sql); //regarder s'il y a de resultat
                if (mysqli_num_rows($result) != 0) {
                    echo "<p>Book already exists. Duplicates not allowed.</p>"; }
                else {
                    $sql = "INSERT INTO cv (Formation, Expérience, Diplômes,Publication, Dates) VALUES( '$Formations', '$Experiences', '$Diplomes', '$Publication', '$Date')";
                    $result = $conn ->query($sql);
                    echo "<p>Add successful.</p>";
        
                $Id=0;
                $sql5 = "SELECT * FROM `cv`";
                $result5 = mysqli_query($conn, $sql5);
                while($data5 = mysqli_fetch_assoc($result5))
                {
                    if($Id < $data5['ID'])
                    {
                        $Id = $data5['ID'];
                    }
                }
                echo "allo";
                $sql2 = "INSERT INTO `intervenant` (`Nom`,`Prenom`,`telephone`,`specialite`,`courriel`,`Mot de passe`,`cv`) VALUES ('" . $nom . "','" . $prenom . "','" . $tel . "','".$spe."','" . $mail . "','" . $mdp . "',".$Id.")";
                $result2 = mysqli_query($conn, $sql2);
                if ($result2) {
                    echo "au top";
                }

                /*$sql3="SELECT ID FROM cv WHERE Nom = (SELECT Nom FROM intervenant WHERE Nom ='".$nom."' ";
                $resultat=mysqli_query($conn,$sql3);
                while($trouver = mysqli_fetch_assoc($resultat))
                {
                    $lastsql = "UPDATE intervenant SET cv ='".$trouver."' WHERE Nom='".$nom."'";
                 }    
                mysqli_close($conn);*/
    }


    //$sql = "SELECT * FROM CV";
    $sql1 = "SELECT * FROM CV WHERE ID = $Id ";

    if (mysqli_query($mysqli, $sql1)) 
    {
        if($result = $mysqli ->query($sql1))
        {
            if($result -> num_rows >0)
            {
                while($row = $result -> fetch_row())
                {
                    //AFFICHAGE SOUS FORME XML
                    echo "<cv>";
                    echo "<formation>$row[1]</formation>";
                    echo "<diplome>$row[3]</diplome>";
                    echo "<date>$row[5]</date>";
                    echo"<experience>$row[2]</experience>";
                    echo"<publication>$row[4]</publication>";
                    echo "</cv>";

                    $xp = $row[1];
                    $forma = $row[2];
                    $diplomes= $row[3];
                    $publi= $row[4];
                    $date = $row[5];



                    $bibliotheque->appendChild($livre = $xmlFile->createElement('Cv'));
                    //$livre->setAttribute('note', 'mes livres personnels');

                    $livre->appendChild($xmlFile->createElement('experiences', $xp));
                    $livre->appendChild($titre = $xmlFile->createElement('formation', $forma));
                    $titre->appendChild($xmlFile->createElement('date', $date));
      
                    $livre->appendChild($xmlFile->createElement('diplomes', $diplomes));
                    $livre->appendChild($xmlFile->createElement('publication', $publi));

                    

                    //$livre->appendChild($xmlFile->createElement('date', '$row[4]'));
                }   
            }
        }
    }
    else 
    {
        echo "Erreur : " . $sql1 . "<br>" . mysqli_error($mysqli);
    }
    //Ferme la balise ROOT
    echo "</curicculum>";
    
    $xmlFile->formatOutput = true;
    $xmlFile->save("$Id.xml"); //voir si on peut pas juste rentrer le nom et on rajoute .xml

?>