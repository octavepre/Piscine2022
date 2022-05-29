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
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>


  <body>
  <div class="containerfluid" id="wrapper">
      
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="logo">
            <img src="../Images/omnes_edu.png" alt="OmnesLogo" width="200" id="imgECE">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <ul>
                <li> <a class="nav-item nav-link" href="ADMIN/Modif.php">Modifier un intervenant
                 <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul>
                <li>
                  <a class="nav-item nav-link" href="ADMIN/Ajout.php">Ajouter un intervenant</a>
                </li >
              </ul>
              <ul>
                <li>  
                  <a class="nav-item nav-link" href="ADMIN/Supp.php">Supprimer un intervenant</a>
                </li >
              </ul>

              </ul>
              
              <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
              <ul>
                <a class="nav-item nav-link" href="MonCompte.php">
                  <?php
                  session_start();
                  if($_SESSION!=null)
                  {echo $_SESSION['PrenomClientActuel']. " " . $_SESSION['NomClientActuel'];}
                 ?>
                 </a>
              </ul>
              <ul>
                <li>  
                  <a class="nav-item nav-link" href="../index.php"> 
                    <img id = "user" src="../Icon/32/deco.jpg" alt="User" width="32" id="imgECE">
                  </a>
                </li >
              </ul>
            </div>
          </div>
          
        
        <div id="Section" style="text-align : center ; padding:20px">
          <a class="btn btn-light my-2 my-sm-0" href="ADMIN/Modif.php" style="margin-top : 20px; width : 250px">
            Modifier un intervenant
          </a><br><br>

          <a class="btn btn-light my-2 my-sm-0" href="ADMIN/Ajout.php" style="margin-top : 20px; width : 250px">
            Ajouter un intervenant
          </a><br><br>

          <a class="btn btn-light my-2 my-sm-0" href="ADMIN/Supp.php" style="margin-top : 20px; width : 250px">
            Supprimer un intervenant
          </a><br>
        </div>

                
    </div>
    <div style="height : 30px"></div>

    <?php require '../Footer.html'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

