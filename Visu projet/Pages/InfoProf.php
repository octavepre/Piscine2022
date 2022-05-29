<?php

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
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border-radius :10px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #353535
        }

        th {
            background: #004c98 ;
            color: white;
        }

    </style>
    <script>
        function loadXMLDoc() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                // Request finished and response
                // is ready and Status is "OK"
                if (this.readyState == 4 && this.status == 200) {
                    empDetails(this);
                }
            };
            // etudiants.xml is the external xml file
            <?php 
                session_start();
                $conn = mysqli_connect('localhost', 'root', '', 'projetweb');
                //$conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
                // Check connection
                if (!$conn) {
                    $conn = mysqli_connect('localhost', 'root', 'root', 'projetweb');
                    if (!$conn) {
                        die("Échec de la connexion : " . mysqli_connect_error());
                    }
                }
                
                $id = $_GET['prof'];
                $cv = 0;
                $sql = "SELECT * FROM intervenant WHERE ID= '".$id ."'";
                $result = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($result)) {
                    $prenom = $data['Prenom'];
                    $nom = $data['Nom'];
                    $tel = $data['telephone'];
                    $mail = $data['Courriel'];
                    $spé = $data['Specialite'];
                    $id = $data['ID'];
                    $photo = $data['Photo de profil'];
                    $video = $data['video'];
                    $cv = $data['CV'];
                }
                $cvString = "XMLDoss/".$cv.".xml";
            ?>
            var cv = "<?php echo $cvString; ?>";
            console.log(cv);
            xmlhttp.open("GET",cv, true);
            xmlhttp.send();
        }

        function empDetails(xml) {
            var i;
            var xmlDoc = xml.responseXML;
            var table =
                `<tr>
                    <th style="border-top-left-radius : 10px">Experience</th>
                    <th>Formation</th>
                    <th>Date</th>
                    <th>Diplome</th>
                    <th style="border-top-right-radius : 10px">Publication</th>
                </tr>`;
            var x = xmlDoc.getElementsByTagName("Cv");
            // Start to fetch the data by using TagName
            for (i = 0; i < x.length; i++) {
                table +=
                    "<tr><td style='border-bottom-right-radius : 10px'>" +
                    x[i].getElementsByTagName("experiences")[0]
                        .childNodes[0].nodeValue
                    + "</td><td>" +
                    x[i].getElementsByTagName("formation")[0]
                        .childNodes[0].nodeValue
                    + "</td><td>" +
                    x[i].getElementsByTagName("formation")[0].getElementsByTagName("date")[0]
                        .childNodes[0].nodeValue
                    + "</td><td>" +
                    x[i].getElementsByTagName("diplomes")[0]
                        .childNodes[0].nodeValue
                    + "</td><td style='border-bottom-left-radius : 10px'>" +
                    x[i].getElementsByTagName("publication")[0]
                        .childNodes[0].nodeValue
                    + "</td></tr>";
            }
            // Print the xml data in table form
            document.getElementById("myTable").innerHTML = table;
        }
    </script>
</head>


<body>
    <div class="containerfluid" id="wrapper">

        <?php require '../Header.html'; ?>

        <div style="margin : 20px">
        <div id="Section" style="padding-bottom : 10px">
            <script>
                loadXMLDoc();
            </script>
            
                <table id="myTable"></table>
            <div style="text-align:center ; margin-top : 20px ; margin-bottom : 10px">
                <?php
                    echo "<video width=\"320\" height=\"240\" controls> <source src=\"".$video."\" type=video/mp4></video>";
                ?>
                <p>Video Presentation de M(me) <?php echo"".$nom.""?></p>
                <button class="btn btn-outline-light btn-lg px-5" onclick="history.go(-1)">Retour</button>
            </div>
            
        </div>
        </div>
        
    </div>

    <?php require '../Footer.html'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>