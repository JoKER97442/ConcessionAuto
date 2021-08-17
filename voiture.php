<?php
class voiture
{
    private $modele;
    private $prix;

    public function __construct($modele, $prix)
    {
        $this->setModele($modele);
        $this->prix = $prix;
    }

    public function setModele($modele)
    {
        // Ici on vérifie si notre variable renvoie un string ou non
        if(is_string($modele)) {
          $this->modele = $modele; 
        }  else {
            // Sinon renvoie message d'erreur
            throw new Error("Le modele doit être du texte");
        }  
    }
    
    public function getModele($modele)
    {
        return $this->modele;
    }
}
?>