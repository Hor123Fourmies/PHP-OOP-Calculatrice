<?php


class affichage
{

    // Déclarons des propriétés :
    // public = propriété de la class 'affichage'
    // public = on va pouvoir y accéder en-dehors de la class
    //public $nom = "Gregory";
    // private rend la propriété inaccessible en-dehors de la class
    //private $nom = "Gregory";
    private $nom;
    // protected inaccessible en-dehors de la class; accessible aux class qui héritent de la class 'affichage'
    //protected $ nom = "Gregory";

    // Déclarons un constructeur (toujours en public, doit toujours être accessible en-dehors de la class :
    // double underscore
    //constructeur : qd on instrancie la class, on peut définir des valeurs ds le constructeur
    //Modifie les propriétés, même en privé

    /*
    public function __construct()
    {
        $this->nom = "Test";
    }
    */

    // Si paramètre $nom, mettre un nom ds la partie index, entre les () de new affichage
    public function __construct($nom)
    {
        $this->nom = $nom;
    }


    // Déclarons maintenant une méthode  :

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom ()
    {
        return $this->nom;
    }

    public function saluer ()
    {
        return "Bonjour ".$this->nom;
        //return "Bonjour".$nom; Attention, ça ne marche pas !!

    }


}