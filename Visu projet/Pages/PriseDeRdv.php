<?php
    //$conn = mysqli_connect('localhost', 'root', '', 'projetweb');
    $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
    // Check connection
    if (!$conn) {
          die("Échec de la connexion : " . mysqli_connect_error());
    }
    /*$sql = "SELECT * FROM intervenant";
    $result = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_assoc($result))
    {
      $prenom = $data['Prenom'];
      $nom = $data['Nom'];
      $tel = $data['telephone'];
      $mail = $data['Courriel'];
    }*/
?>

<!doctype html>
<html lang="en">

<head>
  <title>Index Projet Piscine</title>
  <!--Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../style.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <div class="containerfluid" id="wrapper">
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="logo">
        <img src="../Images/omnes_edu.png" alt="Bootstrap" width="200" id="imgECE">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
              Connexion <img id="user" src="../Icon/32/user.png" alt="User" width="32" id="imgECE">
            </a>
          </ul>
      </div>
    </div>
    <div id="SectionRDV">
        <table id="planning">
            <tr style="text-align : center">
                <th style="widht:16%">LUNDI</th>
                <th style="widht:16%">MARDI</th>
                <th style="widht:16%">MERCREDI</th>
                <th style="widht:16%">JEUDI</th>
                <th style="widht:16%">VENDREDI</th>
                <th style="widht:16%">SAMEDI</th>
            </tr>
                <?php
                $sql = "SELECT * FROM AllHoraire";
                $result = mysqli_query($conn, $sql);
            
                while($data = mysqli_fetch_assoc($result))
                {
                  echo"<tr>";
                    $heure = $data['Heure'];


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Lundi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Mardi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Mercredi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Jeudi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Vendredi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }


                    $sql1 = "SELECT * FROM `rdv` WHERE `Jour` = 'Samedi' and `Hdébut` = $heure";
                    $resultat = mysqli_query($conn, $sql1);
                    if($data2 = mysqli_fetch_assoc($resultat)){
                        if($data2['Hdébut'] == $heure){
                            echo"<td><button class='btn btn-outline-danger my-2 my-sm-0' type='submit' style='width : 100%; pointer-event : none'>".$heure."</button></td>";
                        }
                    }
                    else{
                        echo"<td><button class='btn btn-outline-light my-2 my-sm-0' type='submit' style='width : 100%;'>".$heure."</button></td>";
                    }
                  echo"</tr>";
                }
                ?>
        </table>
    </div>
    </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>