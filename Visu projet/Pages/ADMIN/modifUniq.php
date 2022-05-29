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

$sql = "SELECT * FROM intervenant WHERE ID='" . $id . "'";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    $_SESSION['ModifNom'] = $data['Nom'];
    $_SESSION['ModifPrenom'] = $data['Prenom'];
    $_SESSION['ModifSpe'] = $data['Specialite'];
    $_SESSION['ModifTel'] = $data['telephone'];
    $_SESSION['ModifMail'] = $data['Courriel'];
    $_SESSION['ModifMdp'] = $data['Mot de passe'];
    $_SESSION['ModifID'] = $data['ID'];
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
    <link href="../style.css" rel="stylesheet" type="text/css" />
</head>


<body>
    <form action="Modiffin.php" method="post" enctype="multipart/form-data">

        <div class="form-outline form-white mb-4">
            <input type="text" id="nom" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifNom'] ?> name="nom" />
            <label class="form-label" for="nom">Nom</label>
            <input type="text" id="prenom" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifPrenom'] ?> name="prenom" />
            <label class="form-label" for="prenom">Prenom</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="text" id="Téléphone" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifTel'] ?> name="telephone" />
            <label class="form-label" for="Téléphone">Téléphone</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="text" id="typeEmailX" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifSpe'] ?> name="spe" />
            <label class="form-label" for="typeEmailX">Specialite</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="text" id="typeEmailX" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifMail'] ?> name="mail" />
            <label class="form-label" for="typeEmailX">Email</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="text" id="typePasswordX" class="form-control form-control-lg" value=<?php echo $_SESSION['ModifMdp'] ?> name="mdp" />
            <label class="form-label" for="typePasswordX">Mot de Passe</label>
        </div>

        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Modifier</button>
    </form>
</body>

</html>