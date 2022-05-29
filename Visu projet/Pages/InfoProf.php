<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
//$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
// Check connection
if (!$conn) {
    $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
}

$id = $_GET['prof'];

$sql = "SELECT * FROM intervenant WHERE ID= '" . $id . "'";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    $prenom = $data['Prenom'];
    $nom = $data['Nom'];
    $tel = $data['telephone'];
    $mail = $data['Courriel'];
    $spé = $data['Specialite'];
    $id = $data['ID'];
    $photo = $data['Photo de profil'];
    $video = $data['video'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Index Projet Piscine</title>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>


<body>
    <div class="containerfluid" id="wrapper">

        <?php require '../Header.html'; ?>


        <div id="Section">
            <?php
            echo "<video width=\"320\" height=\"240\" controls> <source src=\"".$video."\" type=video/mp4></video>";
            ?>
        </div>


    </div>

    <?php require '../Footer.html'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>