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
    <?php require '../HeaderCoProf.php'; ?>
    
    <div id="Recherche" > 
            <ul>
                Vos rendez-vous
            </ul>  
        </div>
    <div id="RDV">
    <form method='POST' action='AnnuleRdvClient.php'>
    <table border="0" id="Section" >
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
    if($_SESSION!=null)
    {
      $id = $_SESSION['IdClientActuel'];
    }
    $sql = "SELECT * FROM `rdv` WHERE `IDIntervenant` = $id";
    $result = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($result)){  
      $cliID = $data['IDClient'];
      $IDrendezVous = $data['ID'];
      $sql2 = "SELECT * FROM `client` WHERE `ID` =  $cliID";
      $result2 = mysqli_query($conn, $sql2);
      if($data2 = mysqli_fetch_assoc($result2))
      {
        $PreInter = $data2['Prenom'];
        $NameInter = $data2['Nom'];
      }
      echo"<tr>
        <td>
          <input class='text' type='radio' name='choix' value='".$IDrendezVous."'> 
        </td>
        <td> 
            <div >
                 <ul>
                 ".$data['Jour']."
                </ul> 
                <ul class='text2' >
                    ".$PreInter." ".$NameInter."
               </ul> 

            </div>        
        </td>
        <td>
            <div align='right' >
                <ul class= 'heure'>
                    ".$data['Hdebut']."
               </ul> 
           </div>   
        </td>
        </tr>";
    }
    ?>
    </table>
    </div>

      <div style="text-align:center">
        <input  class="btn btn-outline-light my-2 my-sm-0" type="submit" name="button1" value="Annuler ce rendez-vous" onclick="alert('Rendez-Vous annulé')">
      </div>
    </form>
      </div>

        <div id="Recherche" ></div>

        <?php require '../Footer.html'; ?>
          
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
