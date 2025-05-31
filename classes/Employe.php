<?php
class Employe extends Utilisateur
{
    public function validerAvis(Avis $avis): void
    {
        $avis->validerAvis();
    }

    public function refuserAvis(Avis $avis): void
    {
        $avis->refuserAvis();
    }
}