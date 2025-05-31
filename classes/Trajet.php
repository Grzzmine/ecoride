<?php
// Classe Trajet

class Trajet
{
    public $chauffeur;
    public $vehicule;
    public $villeDepart;
    public $villeArrivee;
    public $date;
    public $heureDepart;
    public $heureArrivee;
    public $prix;
    public $nbPlacesDisponibles;

    public function __construct( $chauffeur, $vehicule, string $villeDepart, string $villeArrivee, string $date, string $heureDepart, string $heureArrivee, int $prix, int $nbPlacesDisponibles)
        {
        $this->chauffeur = $chauffeur;
        $this->vehicule = $vehicule;
        $this->villeDepart = $villeDepart;
        $this->villeArrivee = $villeArrivee;
        $this->date = $date;
        $this->heureDepart = $heureDepart;
        $this->heureArrivee = $heureArrivee;
        $this->prix = $prix;
        $this->nbPlacesDisponibles = $nbPlacesDisponibles;
        }
    public function estEcologique()
    {
        return $this->vehicule->estEcologique();
    }

    public function infosTrajet()
    {
        return "Trajet de {$this->villeDepart} à {$this->villeArrivee} le {$this->date} ({$this->heureDepart} → {$this->heureArrivee}) avec le chauffeur {$this->chauffeur->pseudo}, en véhicule {$this->vehicule->marque} {$this->vehicule->modele}. Prix : {$this->prix}€, places dispo : {$this->nbPlacesDisponibles}";
    }
}