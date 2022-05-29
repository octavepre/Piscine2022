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

    $sql = "SELECT * FROM intervenant";
    $result = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_assoc($result))
    {
      $prenom = $data['Prenom'];
      $nom = $data['Nom'];
      $tel = $data['telephone'];
      $mail = $data['Courriel'];
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
    <link href="../style.css" rel="stylesheet" type="text/css"/>
  </head>

  
  <body>
    <div class="container-fluid" id="wrapper">
    <?php require '../HeaderCo.php'; ?>
        <div id='EnTete'></div>
        <div id="SectionEnseignants">
          <?php
          $sql = "SELECT * FROM intervenant";
          $result = mysqli_query($conn, $sql);
          while($data = mysqli_fetch_assoc($result)){   
            $prenom = $data['Prenom'];
            $nom = $data['Nom'];
            $tel = $data['telephone'];
            $mail = $data['Courriel'];
            $spé = $data['Specialite'];
            $id = $data['ID'];
            $photo = $data['Photo de profil'];

            echo"<div class='Enseignants'>
            <div class='row'>
              <div class='col-sm'>
                      <div class='PhotoID'>
                          <img class='cropped2' src='".$photo."' alt='logoEdu' id='imgECE'>
                      </div>
                  </div>
                  <div class='col-sm'> <!--Changer la mise en page utiliser tr td th-->
                      <div class='row'>
                        <div class='col-sm'>
                          <h2 class='NameEnsei'>".$prenom." ".$nom." </h2>
                          <p class='SpecEnsei'><i>".$spé." </i><p>
                        </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm'>
                              <p>Salle : </p>
                          </div>
                          <div class='col-sm'>
                              <p>EM015 </p>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm'>
                              <p>Telephone : </p>
                          </div>
                          <div class='col-sm'>
                              <p>".$tel." </p>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-sm'>
                              <p>Email : </p>
                          </div>
                          <div class='col-sm'>
                              <p>".$mail."</p>
                          </div>
                      </div>
                  </div>
                  <div class='col-sm' id='EnseiBtn'>";
                      if(($spé!= 'Systemes intelligents communicants') && ($spé != 'Mathematiques pour l’ingenierie' ) && ($spé != 'Nanoscience et nanotechnologie pour l’ingenierie'))
                      {
                        echo"<form action='PriseDeRdv.php' method='post'>
                          <input type='hidden' name='id' value='".$id."'><br>
                          <input id='RdvEnsei' class='btn btn-outline-light my-2 my-sm-0' type='submit' value='Prendre RDV'>                        
                        </form>";
                      }
                      echo"
                        <a id='ContactEnsei' class='btn btn-outline-light my-2 my-sm-0' type='submit' href='indexChat.php?prof=".$id."'>Contacter</a><br>
                        <a id='CVEnsei' class='btn btn-outline-light my-2 my-sm-0' href='InfoProf.php?prof=".$id."'>Plus d'informations</a>
                  </div>
              </div>
          </div>";
          }?>
        </div>
        <?php require '../Footer.html'; ?>
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
