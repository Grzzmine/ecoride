<?php
// Classe Avis

class Avis
{
    public $auteur;
    public $chauffeur;
    public $note;
    public $commentaire;
    public $valide;

    public function __construct($auteur, $chauffeur, int $note, string $commentaire)
        {
        $this->auteur = $auteur;
        $this->chauffeur = $chauffeur ;
        if($note < 1 || $note > 5){
            throw new Exception("Note invalide : La note doit être comprise entre 1 et 5.");
        }
        $this->note = $note;
        $this->commentaire = $commentaire;
        $this->valide = false;
        }

    public function validerAvis()
    {
        $this->valide = true;
    }

    public function refuserAvis()
    {
        $this->valide = false;
    }

    public function afficherAvis()
    {
        return "Avis de {$this->auteur->pseudo} sur {$this->chauffeur->pseudo} : {$this->note} / 5, commentaire : {$this->commentaire}";
    }

}