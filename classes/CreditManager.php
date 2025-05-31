<?php
// Classe CreditManager

class CreditManager
{
    public function debiter($utilisateur, int $montant): bool
    {
        if ($utilisateur->credit >= $montant) {
            $utilisateur->credit -= $montant;
            return true;
        }
        return false;
    }

    public function crediter($utilisateur, int $montant): void
    {
        $utilisateur->credit += $montant;
    }

    public function aAssezDeCredits($utilisateur, int $montant): bool
    {
        return $utilisateur->credit >= $montant;
    }
}