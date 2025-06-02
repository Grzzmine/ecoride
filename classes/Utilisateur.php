<?php
class Utilisateur
{
    public $pseudo;
    public $nom;
    public $prenom;
    public $email;
    private $password;
    public $credit = 20;
    public $role = "utilisateur";
    public $supprime = false;

    public function __construct(string $pseudo, string $email, string $password)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function presentation(): string
    {
        return " Bonjour, je suis $this->pseudo, vous pouvez me contacter à $this->email";
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}