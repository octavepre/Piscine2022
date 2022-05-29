<?php 
session_start();
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

<?php 

$sql = "SELECT * FROM intervenant";
$result = mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result))
{
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
          <div class='col-sm' id='EnseiBtn'>
              <a id='CVEnsei' class='btn btn-outline-light my-2 my-sm-0' href='delete.php?prof=".$id."'>Supprimer</a>
          </div>
      </div>
  </div>";
}


?>