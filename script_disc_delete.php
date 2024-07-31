<?php
    // Contrôle de l'ID (si inexistant ou <= 0, rediriger vers la liste d'artistes) :
    if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) {
        header("Location: discs.php");
        exit;
    }

    // Si la vérification est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db->prepare("DELETE FROM artist WHERE artist_id = ?");
        $requete->execute(array($_GET["id"]));
        $requete->closeCursor();
    }
    catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        die("Fin du script (script_disc_modif.php)");
    }

    // Si OK: redirection vers la page artists.php

    header("Location: discs.php");
    exit;
    ?>