<?php
require "db.php";
$db = connexionBase();
$requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
$requete->execute(array($_GET["id"]));
$myArtist = $requete->fetch(PDO::FETCH_OBJ);
$requete->closeCursor();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Disc</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Ajout</title>
</head>
<body>
<div class="container">
    <h1>Artiste n°<?= $resultat->artist_id; ?></h1>

    <a href="discs.php">Retour à la liste des artistes</a>

    <br>
    <br>

    <form action ="script_disc_modif.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $myArtist->artist_id ?>">
<div class="form-group">
<label for="nom_for_label">Nom de l'artiste :</label><br>
<input class="form-control" type="text" name="nom" id="nom_for_label" value="<?= $myArtist->artist_name ?>">
</div>
<br><br>
<div class="form-group">
<label for="url_for_label">Adresse site internet :</label><br>
<input class="form-control" type="text" name="url" id="url_for_label" value="<?= $myArtist->artist_url ?>">
</div>
<br><br>

<input type="reset" value="Annuler">
<input type="submit" value="Modifier">
</form>

</body>
</html>