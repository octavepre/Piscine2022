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
$IDRDV = 0;
$sql2 = "SELECT * FROM `rdv`";
$result2 = mysqli_query($conn, $sql2);
while($data2 = mysqli_fetch_assoc($result2))
{
    if($IDRDV < $data2['ID'])
    {
        $IDRDV = $data2['ID'];
    }
}
$IDRDV++;
$sql = "INSERT INTO `rdv`(`IDClient`, `IDIntervenant`, `Hdebut`, `jour`,`ID`) VALUES ($idCli,$idInt,'$RDVBis[0]','$RDVBis[1]',$IDRDV)";
$result = mysqli_query($conn, $sql);
/*
session_start();
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "octavep00@gmail.com";
$to = ".$_SESSION['mailClientActuel'].";
$subject = "Prise de rendez Vous Confirmé";
$message = "Le groupe Omnes vous confirme la prise de Rendez vous : $RDVBis[1] à $RDVBis[0]";
$headers = "De :" . $from;
mail($to,$subject,$message, $headers);*/
sleep(2);
header("Location: http://localhost/Piscine2022/Visu%20projet/Pages/connect%c3%a9.php");
exit();
echo"<a href='connecté.php'>Retour Menu</a>";

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