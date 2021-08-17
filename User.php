<?php
/*****************************************************************************
 * CLASS
 * ***************************************************************************/
// On créer une class directeur ou fonction directeur.
class User
{
    public $nom;
    public $prenom;
    public $poste;
    public $login;
    public $password;
    public $admin;

    public function __construct($nom, $prenom, $poste, $login, $password, $admin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->poste = $poste;
        $this->login = $login;
        $this->password = $password;
        $this->admin = $admin;
    }

}
?>