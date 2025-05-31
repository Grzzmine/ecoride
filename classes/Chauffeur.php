<?php

class Chauffeur extends Utilisateur
{
    public $vehicule = [];
    public $preferences = [];

    public function __construct($pseudo, $email, $password)
    {
        parent::__construct($pseudo, $email, $password);
    }
    public function ajouterVehicule(vehicule $vehicule): void
    {
        $this->vehicule[] = $vehicule;
    }
    public function definirPreferences(array $preferences): void
    {
        $this->preferences = $preferences;
    }
    public function getPreferences(): array
    {
        return $this->preferences;
    }

}