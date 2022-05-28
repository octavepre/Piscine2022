<?php
session_start();
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
            <img src="Images/omnes_edu.png" alt="Bootstrap" width="200" id="imgECE">
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <ul>

                <li> <a class="nav-item nav-link active" href="#">Accueil
                 <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <ul>
                <li>
                  <a class="nav-item nav-link" href="Pages/Parcourir.php">Parcourir</a>
                </li >
              </ul>
              <ul>
              <li>  
                <a class="nav-item nav-link" href="Pages/SignIn.php" >RDV</a>
              </li >
            </ul>

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

                  Connexion <img id = "user" src="Icon/32/user-2.png" alt="User" width="32" id="imgECE">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-bs-popper="static">
                  <li>
                    <a class="dropdown-item" href="Pages/SignIn.php">Client</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="Pages/ConnexionAdmin.php">Professeur</a>
                  </li>
                </ul>
              </ul>
            </div>
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
              <img style="opacity: 0.6" src="ImagesCaroussel/Img_car3.jpg" class="d-block w-100" alt="Car1">
              <div id="Caroussel_text">
            <h1> Découvrir nos enseignants </h1>
              <a  href="Enseigant.php">
            <button class="btn btn-light my-2 my-sm-0" type="submit">Voir plus</button>
            </a>
          </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img style="opacity: 0.6" src="ImagesCaroussel/Img_car1.jpg" class="d-block w-100" alt="Car2">
              <div id="Caroussel_text">
            
            <h1> Partir étudier à l'étranger ? </h1>
            <button class="btn btn-light my-2 my-sm-0" type="submit">Voir plus</button>
          </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img style="opacity: 0.6" src="ImagesCaroussel/Img_car2.jpg" class="d-block w-100" alt="Car3">
              <div id="Caroussel_text">
            
              <h1> Trouver votre spécilaité ? </h1>
            <button class="btn btn-light my-2 my-sm-0" type="submit">Voir plus</button>
          </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          
        </div>
        
        <div id="Section">
          <h2 class="wlcm_title" style="padding: 20px" >Bienvenue à Omnes Education</h2>
          <ul class="wlcm_title" style="font-style: italic;font-size: 20px; color: grey" >Qu'est ce que c'est ?</ul>
          <div id="wlcm_txt_div">
            <p id="wlcm_txt">OMNES Education est une plateforme qui vous mets en relation avec des enseignants 
              et chercheurs reconnus. Vous souhaitez consulter les nouvelles réformes scolaires ? 
              Prendre rendez-vous pour des cours particuliers ? Entamer des démarches à l’étranger ?
               Tout cela est réalisable grâce à cette plateforme. Vous pouvez vous connecter et accéder 
               directement à vos rendez-vous et planifier votre avenir. Alors n’attendez plus et rejoignez-nous ! </p></div>
         
         
          <h2 class="wlcm_title">Bulletin de la Semaine</h2>
               
               <div id="Section"> 
               
               <div id="Section6" > <ul> Lundi  </ul> 
               <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 30%; padding-left: 12px"> 
               
                Le ramassage scolaire compte à ce jour 15.000 postes disponibles. L'éducation nationale peine à trouver des chauffeurs pour conduire les jeunes classes de province.
                
              </p>
               <button style="margin-right: 10%; float: right" class="btn btn-light my-2 my-sm-0" type="submit">Voir l'article </button>
              </div>
               <div id="Section6" > <ul > Mardi  </ul> 
               <p style="font-size: 12px; font-family:Arial;margin-right: 40%; padding-left: 12px"> 
               
               REDFGHVBJNK?LBVCFHHGJBNBHJGVHCFGHVBJKN?LJNBHGVCFHVJBKNL?JHGFCHVJBKNL?JHBGVCFHVBJKNLHGCFKH JHVJGVJGVHGV HVY 
              
              </p>
               <button style="margin-right: 10%; float: right" class="btn btn-light my-2 my-sm-0" type="submit">Voir l'article </button>
              </div>
               <div id="Section6" > <ul > Mercredi  </ul> 
               <p style="font-size: 12px; font-family:Arial;margin-right: 40%; padding-left: 12px"> 
               
               REDFGHVBJNK?LBVCFHHGJBNBHJGVHCFGHVBJKN?LJNBHGVCFHVJBKNL?JHGFCHVJBKNL?JHBGVCFHVBJKNLHGCFKH JHVJGVJGVHGV HVY 
              
              </p>
               <button style="margin-right: 10%; float: right" class="btn btn-light my-2 my-sm-0" type="submit">Voir l'article </button>
              </div>
               <div id="Section6" > <ul > Jeudi  </ul> 
               <p style="font-size: 12px; font-family:Arial;margin-right: 40%; padding-left: 12px"> 
               
               REDFGHVBJNK?LBVCFHHGJBNBHJGVHCFGHVBJKN?LJNBHGVCFHVJBKNL?JHGFCHVJBKNL?JHBGVCFHVBJKNLHGCFKH JHVJGVJGVHGV HVY 
              
              </p>
              <a>
               <button style="margin-right: 10%; float: right"  class="btn btn-light my-2 my-sm-0" type="submit">Voir l'article </button>
              </a></div>
               <div id="Section6" > <ul > Vendredi  </ul> 
               <p style="font-size: 12px; font-family:Arial;margin-right: 40%; padding-left: 12px"> 
               
               REDFGHVBJNK?LBVCFHHGJBNBHJGVHCFGHVBJKN?LJNBHGVCFHVJBKNL?JHGFCHVJBKNL?JHBGVCFHVBJKNLHGCFKH JHVJGVJGVHGV HVY 
              
              </p>
               <button style="margin-right: 10%; float: right" class="btn btn-light my-2 my-sm-0" type="submit">Voir l'article </button>
              </div>
               <div id="Section" style="color: #353535">  jvne /div>
               </div>
        </div>
        </div>

        <div class="container-fluid" id="footer">
          <div class="row">
            <div class="col-sm">
              <img src="Images/omnes_edu.png" alt="logoEdu" width="200" id="imgECE">
            </div>
            <div class="col-sm" id="col_2">
              <ul>
                <a><img src="Icon/32/call-3.png" alt="telephone" width="32" id="imgPhone"> +33 6 67 15 19 95</a>
              </ul>
              <ul>
                <a><img src="Icon/32/email-2.png" alt="telephone" width="32" id="imgmail"> +33 6 67 15 19 95</a>
              </ul>
              <ul>
                <a><img src="Icon/32/home-2.png" alt="telephone" width="32" id="imgAdress"> 36 rue Michel Sextius, 75015, Paris</a>
              </ul>
            </div>
            <div class="col-sm">
            <ul>
                <a class="nav-item nav-link" href="Pages/ConnexionReglage.php"> Admin </a>
              </ul>
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

