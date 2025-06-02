<?php
classe AuthService{
    public statc function login(Utilisateur $utilisateur): void
    {
        $_SESSION['user'] = $utilisateur;
    }
    public static function logout(): void
    {
        unset($_SESSION['user']);
    }
    public static function getUser(): ?Utilisateur
    {
        return $_SESSION['user'] ?? null;
    }
    public static function isConnected(): bool
    {
        return isset($_SESSION['user']);
    }
    public static function isAdmin(): bool
    {
        return self::isConnected() && self::getUser()->role == "admin";
    }

    public static function isEmploye(): bool
    {
        return self::isConnected() && self::getUser()->role == "employe";
    }
    public static function isUtilisateur(): bool
    {
        return self::isConnected() && self::getUser()->role == "utilisateur";
    }






}