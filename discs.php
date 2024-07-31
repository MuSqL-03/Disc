<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM artist");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
       
        .artist-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .artist-details img {
            max-width: 200px;
            border: 1px solid #ccc;
        }
        .details {
            max-width: 400px;
        }
        .details h4 {
            margin: 0 0 10px;
        }
        .details p {
            margin: 5px 0;
        }
        
    </style>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h1>Disc List</h1>
            <a href="disc_new.php" class="btn btn-primary">Ajouter</a>
        </div>
        <table>
            
        <tr>
        <div class="artist-details">
        <img src="R-3620609-1337675910-1871.jpeg.jpg" alt="Artist Image">
        <div class="details">
            <h4>Highway To Hell</h4>
            <p><b>AC/DC</b></p>
            <p><b>Label:</b> Awesome Label</p>
            <p><b>Year:</b>1979</p>
            <p><b>Genre:</b> Hard Rock</p>
            <a href="disc_detail.php" class="btn btn-primary ">Details</a>
        </div>
       </div>
        </tr>
        <tr>
        <br>
    <div class="artist-details">
        <img src="After the Gold Rush.jpeg" alt="Artist Image">
        <div class="details">
            <h4>After the Gold Rush</h4>
            <p><b>Neil Young</b></p>
            <p><b>AC/DC</b></p>
            <p><b>Label:</b> Reprise Records</p>
            <p><b>Year:</b>1970</p>
            <p><b>Genre:</b>  Country Rock</p>
            <a href="disc_detail.php" class="btn btn-primary ">Details</a>
        </div>
    </div>
        </tr>
        <tr>
        <br>
    <div class="artist-details">
        <img src="Broken Arrow.jpeg" alt="">
        <div class="details">
            <h4>Broken Arrow</h4>
            <p><b>Neil Young</b></p>
            <p><b>label:</b> Reprise Records</p>
            <p><b>Year:</b>1996</p>
            <p><b>Genre:</b>Country Rock, Classic Rock</p>
            <a href="disc_detail.php" class="btn btn-primary">Details</a>
        </div>
    </div>
        </tr>
          
            
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
