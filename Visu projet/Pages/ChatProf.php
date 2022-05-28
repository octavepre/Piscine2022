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

if (isset($_POST['message'])) {
	if (!empty($_POST['message'])) {
		$message = htmlspecialchars($_POST['message']);
		$sql = "INSERT INTO chat(`mail_utilisateur`,`message`,`id_inter`) VALUES ('" . $_SESSION['NomClientActuel'] . "','" . $message . "','" . $id . "')";
		if (mysqli_query($conn, $sql)) {
		}
	}
}
?>


<!doctype html>
<html lang="fr-FR">

<head>
	<title>Chat Projet Piscine</title>
	<!--Required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="../style.css" rel="stylesheet" type="text/css" />
	<script src="indexChat.js"></script>
</head>

<body>
	<div>
	<?php
	$sql2 = "SELECT * FROM `chat` WHERE `id_inter` = (SELECT `ID`	FROM `intervenant` WHERE Nom = '".$_SESSION['NomClientActuel']."') ORDER BY id DESC";
	$global = mysqli_query($conn, $sql2);
	while ($msg = mysqli_fetch_assoc($global)) {

	?>
		<b> <?php echo "<a style=\"color:white\" href=\"ReponseProf.php?mail=".$msg['mail_utilisateur']."\">" . $msg['mail_utilisateur'] . "</a>" ?> </b> : <?php echo "<a style=\"color:white\">" . $msg['message'] . "</a>" ?> <br />
	<?php
	}
	?>
	</div>
	<ul>

		<li> <a class="nav-item nav-link" href="connecté.php">Retour menu
				<span class="sr-only">(current)</span></a>
		</li>
	</ul>
	<?php require '../Footer.html'; ?>
</body>

</html>