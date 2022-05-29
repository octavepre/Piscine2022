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
              Connexion <img id="user" src="../Icon/32/user-2.png" alt="User" width="32" id="imgECE">
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
    <div id="SectionConAdmin">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Nouveau compte</h2>
                  <p class="text-white-50 mb-5">Veuillez remplir tous les champs</p>

                  <form action="NewCompteProf.php" method="post" enctype="multipart/form-data">

                    <div class="form-outline form-white mb-4">
                      <input type="text" id="nom" class="form-control form-control-lg" placeholder="NOM..." name="nom_inter" />
                      <label class="form-label" for="nom">Nom</label>
                      <input type="text" id="prenom" class="form-control form-control-lg" placeholder="Prénom..." name="prenom_inter" />
                      <label class="form-label" for="prenom">Prenom</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="text" id="Téléphone" class="form-control form-control-lg" placeholder="06..." name="telephone" />
                      <label class="form-label" for="Téléphone">Téléphone</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email..." name="mail" />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>

                    <div class="form-outline form-white mb-4">
                        CV : <br>
                        <tr>
                                <td>Formations</td>
                                <td><input type="text" class="form-control form-control-lg" name="Formations" placeholder="Formations..." size="60"></td> </tr>
                        <tr>
                                <td>Experiences</td>
                                <td><input type="text" class="form-control form-control-lg" name="Experiences" placeholder="Expériences..." size="60"></td> </tr>
                        <tr>
                                <td>Diplomes</td>
                                <td><input type="text" class="form-control form-control-lg" name="Diplomes" placeholder="Diplomes..." size="60"></td> </tr>
                        <tr>
                                <td>Date</td>
                                <td><input type="number" class="form-control form-control-lg" name="Date" placeholder="Date" size="60" value="2022" min="1950" max="2022"></td> </tr>
                        <tr>
                                <td>Publications</td>
                                <td><input type="text" class="form-control form-control-lg" name="Publication" placeholder="Publication" size="60"></td> </tr>
                        <tr>
                    </div>

                    <div class="form-outline form-white mb-4" style="padding-top : 30px">
                     <label class="form-label" for="typePasswordX">Specialite</label>
                      <input type="text" id="typePasswordX" class="form-control form-control-lg" placeholder="Specialite" name="spe" />
                      <label class="form-label" for="typePasswordX">Mot de Passe</label>
                      <input type="text" id="typePasswordX" class="form-control form-control-lg" placeholder="Mot de passe" name="mdp" />
                      <label class="form-label" for="typePasswordX">Confirmer le mot de Passe</label>
                      <input type="text" id="typePasswordX" class="form-control form-control-lg" placeholder="Mot de passe" name="conf" />
                    </div>

                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
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
              <a><img src="../Icon/32/email-2.png" alt="telephone" width="32" id="imgmail"> info@ece.fr</a>
            </ul>
            <ul>
              <a><img src="../Icon/32/home-2.png" alt="telephone" width="32" id="imgAdress"> 10 rue Michel Sextius, 75015, Paris</a>
            </ul>
            <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.372616477147!2d2.2863485148902147!3d48.851104609174946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653230919712!5m2!1sfr!2sfr" width="550" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
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