<?php
// Classe Reservation

class Reservation
{
    public $passager;
    public $trajet;
    public $dateReservation;
    public $statut;

    public function __construct($passager, $trajet)
    {
        $this->passager = $passager;
        $this->trajet = $trajet;
        $this->dateReservation = date ("d/m/Y H:i:s");
        $this->statut = "confirmé";
    }

    public function annuler()
        {
        $this->statut = "annulé";
        }
    public function afficherDetails()
    {
        return "Réservation de {$this->passager->pseudo} pour le trajet de {$this->trajet->villeDepart} à {$this->trajet->villeArrivee} le {$this->trajet->date} à {$this->trajet->heureDepart} – Statut : {$this->statut}";
    }
}