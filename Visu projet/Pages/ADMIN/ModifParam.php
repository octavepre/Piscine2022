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

$id = isset($_POST["id"])? $_POST["id"] : "";
$sql = "SELECT * FROM intervenant WHERE ID='".$id."'";
$result = mysqli_query($conn, $sql);
if($data = mysqli_fetch_assoc($result)) {
    $_SESSION['ModifNom'] = $data['Nom'];
    $_SESSION['ModifPrenom'] = $data['Prenom'];
    $_SESSION['ModifSpe'] = $data['Specialite'];
    $_SESSION['ModifTel'] = $data['telephone'];
    $_SESSION['ModifMail'] = $data['Courriel'];
    $_SESSION['ModifMdp'] = $data['Mot de passe'];
    $_SESSION['ModifID'] = $data['ID'];
    $_SESSION['DayOff'] = $data['dayoff'];
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
  <link href="../../style.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <div class="containerfluid" id="wrapper">
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="logo">
            <img src="../../Images/omnes_edu.png" alt="OmnesLogo" width="200" id="imgECE">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <ul>
                <li> <a class="nav-item nav-link" href="SelectModif.php">Modifier un intervenant
                 <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul>
                <li>
                  <a class="nav-item nav-link" href="Ajout.php">Ajouter un intervenant</a>
                </li >
              </ul>
              <ul>
                <li>  
                  <a class="nav-item nav-link " href="SelectDel.php">Supprimer un intervenant</a>
                </li >
              </ul>

              </ul>
              
              <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
              <ul>
                <a class="nav-item nav-link" href="MonCompte.php">
                  <?php
                  if($_SESSION!=null)
                  {echo $_SESSION['PrenomClientActuel']. " " . $_SESSION['NomClientActuel'];}
                 ?>
                 </a>
              </ul>
              <ul>
                <li>  
                  <a class="nav-item nav-link" href="../../index.php"> 
                    <img id = "user" src="../../Icon/32/deco.jpg" alt="User" width="32" id="imgECE">
                  </a>
                </li >
              </ul>
            </div>
          </div>

  
  <div id="SectionConAdmin" class="containerfluid">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Nouvel intervenant</h2>
                  <p class="text-white-50 mb-5">Veuillez remplir tous les champs</p>

                  <form action="Modiffin.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="nom" class="form-control form-control-lg" placeholder="NOM..." name="nom" value=<?php echo $_SESSION['ModifNom'] ?>>
                      <label class="form-label" for="nom">Nom</label>
                      <input type="text" id="prenom" class="form-control form-control-lg" placeholder="Prénom..." name="prenom" value=<?php echo $_SESSION['ModifPrenom'] ?>>
                      <label class="form-label" for="prenom">Prenom</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="text" id="Téléphone" class="form-control form-control-lg" placeholder="06..." name="telephone" value=<?php echo $_SESSION['ModifTel']?>>
                      <label class="form-label" for="Téléphone">Téléphone</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                    <label class="form-label">Jour de Congé</label>
                    <?php if($_SESSION['DayOff']=='Lundi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi' selected='selected'>Lundi</option>
                        <option valeur='Mardi'>Mardi</option>
                        <option valeur='Mercredi'>Mercredi</option>
                        <option valeur='Jeudi'>Jeudi</option>
                        <option valeur='Vendredi'>Vendredi</option>
                        <option valeur='Samedi'>Samedi</option>
                      </select>";
                    }
                    else if($_SESSION['DayOff']=='Mardi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi'>Lundi</option>
                        <option valeur='Mardi' selected='selected'>Mardi</option>
                        <option valeur='Mercredi'>Mercredi</option>
                        <option valeur='Jeudi'>Jeudi</option>
                        <option valeur='Vendredi'>Vendredi</option>
                        <option valeur='Samedi'>Samedi</option>
                      </select>";
                    }
                    else if($_SESSION['DayOff']=='Mercredi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi'>Lundi</option>
                        <option valeur='Mardi'>Mardi</option>
                        <option valeur='Mercredi' selected='selected'>Mercredi</option>
                        <option valeur='Jeudi'>Jeudi</option>
                        <option valeur='Vendredi'>Vendredi</option>
                        <option valeur='Samedi'>Samedi</option>
                      </select>";
                    }
                    else if($_SESSION['DayOff']=='Jeudi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi'>Lundi</option>
                        <option valeur='Mardi'>Mardi</option>
                        <option valeur='Mercredi'>Mercredi</option>
                        <option valeur='Jeudi' selected='selected'>Jeudi</option>
                        <option valeur='Vendredi'>Vendredi</option>
                        <option valeur='Samedi'>Samedi</option>
                      </select>";
                    }
                    else if($_SESSION['DayOff']=='Vendredi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi'>Lundi</option>
                        <option valeur='Mardi'>Mardi</option>
                        <option valeur='Mercredi'>Mercredi</option>
                        <option valeur='Jeudi'>Jeudi</option>
                        <option valeur='Vendredi' selected='selected'>Vendredi</option>
                        <option valeur='Samedi'>Samedi</option>
                      </select>";
                    }
                    else if($_SESSION['DayOff']=='Samedi')
                    {
                     echo"<select name='dayOff' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width : 100% ; height : 50px ; border-radius : 5px'>
                        <option valeur='Lundi'>Lundi</option>
                        <option valeur='Mardi' selected='selected'>Mardi</option>
                        <option valeur='Mercredi'>Mercredi</option>
                        <option valeur='Jeudi'>Jeudi</option>
                        <option valeur='Vendredi'>Vendredi</option>
                        <option valeur='Samedi' selected='selected'>Samedi</option>
                      </select>";
                    }
                    ?>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="typeEmailX">Email</label>
                      <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email..." name="mail" value=<?php echo $_SESSION['ModifMail']?>>
                    </div>

                    <div class="form-outline form-white mb-4" style="padding-top : 30px">
                     <label class="form-label" for="typePasswordX">Specialite</label>
                      <input type="text" id="typePasswordX" class="form-control form-control-lg" placeholder="Specialite" name="spe" value=<?php echo $_SESSION['ModifSpe'] ?>>
                      <label class="form-label" for="typePasswordX">Mot de Passe</label>
                      <input type="text" id="typePasswordX" class="form-control form-control-lg" placeholder="Mot de passe" name="mdp" value=<?php echo $_SESSION['ModifMdp'] ?>>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="Modif">Modif</button>
                  </form>
                  <div style="text-align:center ; padding : 20px">
                    <a class="btn btn-outline-light btn-lg px-5" href="SelectModif.php">Retour</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="container-fluid" id="footer">
        <div class="row">
          <div class="col-sm">
            <img src="../../Images/omnes_edu.png" alt="logoEdu" width="200" id="imgECE">
          </div>
          <div class="col-sm" id="col_2">
            <ul>
              <a><img src="../../Icon/32/call-3.png" alt="telephone" width="32" id="imgPhone"> +33 6 67 15 19 95</a>
            </ul>
            <ul>
              <a><img src="../../Icon/32/email-2.png" alt="telephone" width="32" id="imgmail"> info@ece.fr</a>
            </ul>
            <ul>
              <a><img src="../../Icon/32/home-2.png" alt="telephone" width="32" id="imgAdress"> 10 rue Michel Sextius, 75015, Paris</a>
            </ul>
            <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.372616477147!2d2.2863485148902147!3d48.851104609174946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653230919712!5m2!1sfr!2sfr" width="550" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
          </div>
          <div class="col-sm">
            <div style="width:50px ; height:50px ; text-align:center; border-radius : 100% ; float:right">
                <a href="#"><img src="../../Icon/32/upload.png" alt="fleche" width="32" id="imgAdress"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>