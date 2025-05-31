<?php
// Classe Vehicule

class Vehicule
{
    public $marque;
    public $modele;
    public $couleur;
    public $plaque;

    public $energie;

    public $nbPlaces;

    public function __construct(string $marque, string $modele, string $couleur, string $plaque, string $energie, int $nbPlaces)
        {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->plaque = $plaque;
        $this->energie = $energie;
        $this->nbPlaces = $nbPlaces;
        }

        public function estEcologique()
        {
            return strtolower($this->energie) == "électrique";
        }

        public function infosVehicule()
        {
            return "Marque : $this->marque, modèle : $this->modele, couleur : $this->couleur, plaque : $this->plaque, énergie : $this->energie, nombre de places : $this->nbPlaces";
        }
}