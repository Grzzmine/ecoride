<?php
class Admin extends Employe
{
    public function supprimerUtilisateur(Utilisateur $utilisateur): void
    {
        $utilisateur->pseudo =null;
        $utilisateur->email = null;
        $utilisateur->credit = 0;
        $utilisateur->role = "supprimé";
    }
}