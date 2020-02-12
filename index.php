<?php

include "affichage.php";
include "calculatrice.php";

// new crée une instance d'une class (+/- egal à une version)
// la class est un modèle, un moule et l'instance est un gâteau indépendant
// ici, erreur si propriété mise en privé ou en protected
    //$affichage = new affichage("Jules");
//echo $affichage->nom;
echo "<br>";
// si public, on peut redéfinir la propriété en-dehors de la class :
//$affichage->nom = "Test";
//echo $affichage->nom;
echo "<br>";

// nouvelle instance, qui affiche à nouveau 'Gregory':
//$affichage2 = new affichage();
//echo $affichage2->nom;

// Mettre la propriété $nom en privé
    //$affichage3 = new affichage("Jules");
    //echo $affichage3->saluer();

echo "<br>";
/*
$affichage->setNom("Hector");
echo $affichage->saluer();
*/

    //$nom = $_POST['nom'];
    //echo $nom;
echo "<br>";

    //$affichage4 = new affichage($nom);
    //echo $affichage4->saluer();
echo "<br>";

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$operation = $_POST['operation'];

$calculatrice = new calculatrice($nombre1, $nombre2, $operation);
$calculatrice->calculate();


// on récupère bien les valeurs :
// echo $nombre1." ".$nombre2." ".$operation;

switch ($operation){
    case "addition":
        echo $nombre1+$nombre2;
        break;
    case "soustraction":
        echo $nombre1-$nombre2;
        break;
}

