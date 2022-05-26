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
                  <a class="nav-item nav-link" href="Parcourir.php">Parcourir</a>
              </ul>
              <ul>       
                  <a class="nav-item nav-link" href="#">RDV</a>
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