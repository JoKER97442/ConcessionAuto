<?php
/*****************************************************************************
 * CLASS
 * ***************************************************************************/
// On créer une class directeur ou fonction directeur.
class Directeur extends User
{
    public function __construct()
    {
        parent::__construct("Kerbidi", "Jonathan", "Directeur", "JoKER", "Boss", true);
    }

}
?>
