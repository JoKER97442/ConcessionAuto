<?php
/*****************************************************************************
 * CLASS
 * ***************************************************************************/
// On créer une class directeur ou fonction directeur.
class Secretaire extends User
{
	public function __construct()
    {
        parent::__construct("Kerbidi", "Amélie", "Secretaire", "Ladybug", "Miraculouse", true);
    }

}
?>

<!-- Si new client ou un client n'achete pas pendant tant de jours envoiyer invitation -->
