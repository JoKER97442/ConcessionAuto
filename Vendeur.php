<?php
/*****************************************************************************
 * CLASS
 * ***************************************************************************/
// On créer une class directeur ou fonction directeur.
class Vendeur extends User
{
    public function __construct()
    {
        parent::__construct("Turpin", "Venise", "Veudeur", "Minize", "Femme", true);
    }

}

?>