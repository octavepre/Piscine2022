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
                <form class="form-inline" action="Pages/Chercher.php" method="post">
                 <input class="form-control mr-sm-2" type="text" placeholder="Nom ou specialite" name="chercher">
                 <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="login">Recherche</button>
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
            <a class="btn btn-dark my-2 my-sm-0" href="Pages/Enseignant.php">Voir plus</a>
            </a>
          </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img style="opacity: 0.6" src="ImagesCaroussel/Img_car1.jpg" class="d-block w-100" alt="Car2">
              <div id="Caroussel_text">
            
            <h1> Partir étudier à l'étranger ? </h1>
            <a class="btn btn-dark my-2 my-sm-0" href="Pages/RelationInter.php">Voir plus</a>
          </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img style="opacity: 0.6" src="ImagesCaroussel/Img_car2.jpg" class="d-block w-100" alt="Car3">
              <div id="Caroussel_text">
            
              <h1> Trouver votre spécilaité ? </h1>
            <a class="btn btn-dark my-2 my-sm-0" href="Pages/Recherche.php">Voir plus</a>
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
               
               <a href="https://www.webdo.tn/2022/05/28/tunisie-reforme-de-lenseignement-et-revision-des-programmes-et-des-manuels-scolaire/" >
                <div id="Section6" 
                     style="background-image: url(Images/Lundi.jpg); 
                            height : auto;
                            padding-left : 10px;
                            padding-right : 10px;
                            padding-bottom : 10px;
                            object-fit: cover;
                            object-position: center;"  > <ul> Lundi  </ul> 
                  <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 12px; padding-left: 12px "> 
               
                    Le ministère de l’éducation  entamé, il y a quelques semaines, la révision des programmes éducatifs et des manuels scolaires qui datent de 2002,
                    la réforme du système éducatif étant devenue nécessaire de l’avis de tous. 
                    La révision des programmes sera ainsi au centre de réunions et séances de travail, 
                    prévues la semaine prochaine entre le ministère de l’éducation et l’Union générale tunisienne du travail 
                
                  </p>
                </div>
              </a>

              <a href="https://www.letudiant.fr/etudes/qui-sont-les-nouveaux-ministres-de-l-enseignement-superieur-et-de-l-education-nationale.html" >
                <div id="Section6" 
                     style="background-image: url(Images/Mardii.jpg); 
                            height : auto;
                            padding-left : 10px;
                            padding-right : 10px;
                            padding-bottom : 10px;
                            object-fit: cover;
                            object-position: center;"  > <ul> Mardi  </ul> 
                  <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 12px; padding-left: 12px ">               
                  Même si la politique peut sembler loin des préoccupations d'orientation, savoir qui occupe les ministères 
                  de l'Éducation nationale et de l'Enseignement supérieur peut avoir du sens... 
                  L'Etudiant vous présente les deux nouveaux ministres dont les décisions pourraient avoir un 
                  impact pour les élèves et étudiants.
                  </p>
                </div>
              </a>

              <a href="https://www.letudiant.fr/etudes/btsdut/master-a-la-fac-ecole-d-ingenieurs-ou-de-commerce-quelle-poursuite-d-etudes-apres-un-but.html">
                <div id="Section6" 
                     style="background-image: url(Images/Mercredi.jpg); 
                            height : auto;
                            padding-left : 10px;
                            padding-right : 10px;
                            padding-bottom : 10px;
                            object-fit: cover;
                            object-position: center;"  > <ul> Mercredi  </ul> 
                  <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 12px; padding-left: 12px "> 
               
                    Le bachelor universitaire de technologie en trois ans gagne en reconnaissance grâce à son grade de licence. 
                    Un grade qui facilite la poursuite d’études longues notamment universitaires. Découvrez le champ des possibles
                    offert par ce nouveau diplôme.
              
                  </p>
                </div>
              </a>


              <a href="https://www.liberation.fr/societe/education/emmanuel-macron-veut-remettre-en-cause-la-quasi-gratuite-des-etudes-universitaires-20220114_SUZ3WMFW7ZARVDGJNJELYL3K7I/">
                <div id="Section6" 
                     style="background-image: url(Images/Jeudi.jpg);
                            height : auto;
                            padding-left : 10px;
                            padding-right : 10px;
                            padding-bottom : 10px;
                            object-fit: cover;
                            object-position: center;"  > <ul> Jeudi  </ul> 
                  <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 12px; padding-left: 12px "> 
               
                    Emmanuel Macron veut remettre en cause l quasi-gratuité des études universitaires. 
                    Devant les présidents d’universités, le Président a esquissé les grandes lignes de ce que 
                    ser ait un deuxième quinquennat pour l’enseignement supérieur et la recherche : l’émergence 
                    d’établissements à l’américaine, et donc payants.           
                  </p>
                </div>
              </a>

              <a href="https://www.leparisien.fr/etudiant/orientation/ecoles/etudier-a-letranger-la-mobilite-reprend-doucement-TSM33BQRTBBP7AVRAIGXPWFORI.php">
                <div id="Section6" 
                     style="background-image: url(Images/Vendredii.jpg); 
                            /*min-height : 150px;*/
                            padding-left : 10px;
                            padding-right : 10px;
                            padding-bottom : 10px;
                            height : auto;
                            object-fit: cover;
                            object-position: center;"  > <ul> Vendredi  </ul> 
                  <p style="font-size: 12px; font-style: italic; font-family:Arial;margin-right: 12px; padding-left: 12px "> 
                  Après plusieurs mois de difficulté et d’incertitude, le Covid n’a pas tari la soif de découvertes des étudiants.
                  Mais en attendant un vrai retour à la normale, beaucoup privilégient l’Europe. La mobilité reprend donc progressivement 
                  avec une certaine douceur. 
                  </p>
                </div>
              </a>



               <div id="Section" style="color: #353535">  jvne </div>
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
                <a><img src="Icon/32/email-2.png" alt="telephone" width="32" id="imgmail"> info@ece.fr</a>
              </ul>
              <ul>
                <a><img src="Icon/32/home-2.png" alt="telephone" width="32" id="imgAdress"> 10 rue Michel Sextius, 75015, Paris</a>
              </ul>
              <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.372616477147!2d2.2863485148902147!3d48.851104609174946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653230919712!5m2!1sfr!2sfr" width="550" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
            </div>
            <div class="col-sm">
            <ul>
                <a class="nav-item nav-link" href="Pages/ConnexionReglage.php"> Admin </a>
              </ul>
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

