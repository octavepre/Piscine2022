<!doctype html>
<html lang="en">
  <head>
    <title>Index Projet Piscine</title>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet" type="text/css"/>
  </head>


  <body>
    <div class="containerfluid" id="wrapper">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="logo">
            <img src="../Images/omnes_edu.png" alt="Bootstrap" width="200" id="imgECE">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <ul>
                <a class="nav-item nav-link" href="../index.php">Accueil
                 <span class="sr-only">(current)</span></a>
              </ul>
              <ul>
                  <a class="nav-item nav-link active" href="#">Parcourir</a>
              </ul>
              <ul>       
                  <a class="nav-item nav-link" href="Pages/Rendezvous.php">RDV</a>
              </ul>
              
              <!--<a class="nav-item nav-link disabled" href="#">Disabled</a>-->
              <ul>
                <form class="form-inline">
                 <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">
                 <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Recherche</button>
                </form>
              </ul>
              <ul class="nav-item dropdown show">       
                <a class="nav-link btn btn-secondary dropdown-toggle" aria-current="page" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Connexion <img id = "user" src="../Icon/32/user-2.png" alt="User" width="32" id="imgECE">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-bs-popper="static">
                  <li>
                    <a class="dropdown-item" href="SignIn.php">Client</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ConnexionAdmin.php">Professeur</a>
                  </li>
                </ul>
              </ul>
            </div>
        </div>

        <div id="SectionParcour">
            <div class="Cadre">
              <h4 class="titlePar1">ENSEIGNEMENT</h4>
              <img src="../ImagesCaroussel/Img_car3.jpg" class="img_Parc" alt="Car1">
              <a id="btnParc1" class="btn btn-outline-light my-2 my-sm-0" type="submit" href="Enseignant.php">Voir plus</a>
            </div>
            <div class="Cadre2">
                <h4 class="titlePar2">RECHERCHE</h4>
                <img src="../ImagesCaroussel/Img_car3.jpg" class="img_Parc2" alt="Car1">
                <a id="btnParc2" class="btn btn-outline-light my-2 my-sm-0" type="submit"href="Recherche.php">Voir plus</a>
            </div>
            <div class="Cadre">
                <h4 class="titlePar1">RELATIONS INTERNATIONALES</h4>
                <img src="../ImagesCaroussel/Img_car3.jpg" class="img_Parc" alt="Car1">
                <a id="btnParc3" class="btn btn-outline-light my-2 my-sm-0" type="submit" href="RelationInter.php">Voir plus</a>
            </div>
        </div>
        
        <div class="container-fluid" id="footer">
          <div class="row">
            <div class="col-sm">
              <img src="../Images/omnes_edu.png" alt="logoEdu" width="200" id="imgECE">
            </div>
            <div class="col-sm" id="col_2">
              <ul>
                <a><img src="../Icon/32/call-3.png" alt="telephone" width="32" id="imgPhone"> +33 6 67 15 19 95</a>
              </ul>
              <ul>
                <a><img src="../Icon/32/email-2.png" alt="telephone" width="32" id="imgmail"> +33 6 67 15 19 95</a>
              </ul>
              <ul>
                <a><img src="../Icon/32/home-2.png" alt="telephone" width="32" id="imgAdress"> 36 rue Michel Sextius, 75015, Paris</a>
              </ul>
            </div>
            <div class="col-sm">
              One of three columns
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
