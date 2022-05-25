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
                <a class="nav-item nav-link" href="../index.php">Acceuil
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
              <ul>       
                <a class="nav-item nav-link active" href="#">
                  Connexion <img id = "user" src="../Icon/32/user.png" alt="User" width="32" id="imgECE">
                </a>
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
              
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
              
                            <div class="form-outline form-white mb-4">
                              <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email..."/>
                              <label class="form-label" for="typeEmailX">Email</label>
                            </div>
              
                            <div class="form-outline form-white mb-4">
                              <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Mot de passe"/>
                              <label class="form-label" for="typePasswordX">Mot de Passe</label>
                            </div>
              
                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
              
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              
                          </div>
              
                          <div>
                            <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
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

