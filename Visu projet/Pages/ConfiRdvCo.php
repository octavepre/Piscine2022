<?php 
echo "<meta charset=\"utf-8\">";
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
    //$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
    // Check connection
    if (!$conn) {
        $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
        if(!$conn){
            die("Échec de la connexion : " . mysqli_connect_error());
        }
    }
$RDV = isset($_POST["rdv"])? $_POST["rdv"] : ""; 
$idCli = isset($_POST["idEleve"])? $_POST["idEleve"] : "";
$idInt = isset($_POST["idInter"])? $_POST["idInter"] : ""; 
$RDVBis = explode(' ', $RDV, 2);

$db_found = mysqli_select_db($conn, "projetweb");
if($db_found){
    $sql = "INSERT INTO `rdv`(`IDClient`, `IDIntervenant`, `Hdebut`, `jour`) VALUES ($idCli,$idInt,'$RDVBis[0]','$RDVBis[1]')";
    $result = mysqli_query($conn, $sql);
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "octavep00@gmail.com";
    $to = "prevot.octave@gmail.com";
    $subject = "Prise de rendez Vous Confirmé";
    $message = "Le groupe Omnes vous confirme la prise de Rendez vous : $RDVBis[1] à $RDVBis[0]";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "<script type= 'text/javascript'>alert('Rendez-Vous reservé');</script>";
}
else{
    echo "Database not found";
}
echo"<a href='connecté.php'>Retour Menu</a>";
Exit();
/*
$stmt = $dbh->prepare("INSERT INTO form_data (email,  name, company, country, comments) VALUES (:email, :name, :company, :country, :comments)");
 
$stmt -> bindParam(':email', '$_POST["email"]');
$stmt -> bindParam(':name', '$_POST["name"]');
$stmt -> bindParam(':company', '$_POST["company"]');
$stmt -> bindParam(':country', '$_POST["country"]');
$stmt -> bindParam(':comments', '$_POST["comments"]');
 
$stmt->execute();
 
if ($dbh->query($stmt)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}
 
$dbh = null;*/
 
?>