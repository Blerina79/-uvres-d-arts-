<?php

    // tableau pour stocker le prix selon l'epoque
    $prix_periodes = [100000, 76000, 32000, 15000, 0];

    // tableau pour stocker le pourcentage selon le type d'oeuvre
    $pourcentage_type = [5, 27, 35, 1205, 0];

    // récuperer une donnée du formulaire
    // la date de fabrication

    // extraire toute les données du formulaire et de les mettre dans une variable
    extract($_POST);

    // condition
    if (!empty($nom)) {
        echo "<h1>Estimation en cours...</h1>" . "<br>";

        // recuperer le prix associé à la periode
        $prix = $prix_periodes[$annee];

        
        $pourcentage_prix_oeuvre = $pourcentage_type[$type];
        $pourcentage = $pourcentage_prix_oeuvre / 100;
        $multiplicateur = 1 + $pourcentage; // 1.8 = +80%

        // calcul prix suivant la periode + pourcentage
        $calculfinal = $prix * $multiplicateur;

        echo "Prix de rachat : " . $calculfinal . "€ <br>";

        // verifier si l'artiste est marius et que l'oeuvre date de 1919
        if ($artiste == "marius" && $annee == 3) {
            echo "<img src='https://images.pexels.com/photos/1585325/pexels-photo-1585325.jpeg?auto=compress&cs=tinysrgb&w=600'>";
        }


    }
    else{
        echo "Merci de remplir tout les champs <br>";
    }