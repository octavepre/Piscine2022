<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
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

         
        $sql = "INSERT INTO cv( Formation, Expérience, Diplômes,Publication, Dates) VALUES( '$Formations', '$Experiences', '$Diplomes', '$Publication', '$Date')";
        $result = $conn ->query($sql);
        echo "<p>Add successful.</p>";

        echo "allo";
        $sql2 = "INSERT INTO `client` (`Nom`,`Prenom`,`telephone`,`courriel`,`Mot de passe`) VALUES ('" . $nom . "','" . $prenom . "','" . $tel . "',' ','" . $mail . "','" . $mdp . "')";

        if (mysqli_query($conn, $sql2)) {
            echo "au top";
        }

        $sql3="SELECT ID FROM cv WHERE Nom = (SELECT Nom FROM intervenant WHERE Nom ='".$nom."' ";
        $resultat=mysqli_query($conn,$sql3);
        while($trouver = mysqli_fetch_assoc($resultat))
        {
            $lastsql = "UPDATE intervenant SET cv ='".$trouver."' WHERE Nom='".$nom."'";
        }
        mysqli_close($conn);


    }}

