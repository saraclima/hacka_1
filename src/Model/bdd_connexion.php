<?php

include 'bdd_user_info.php';

// Création d'une connection à la base de base de donnée
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

// Vérification que la connection à fonctionnée
if ($bdd == false){
    echo "Connection error: " . mysqli_error($bdd);
}