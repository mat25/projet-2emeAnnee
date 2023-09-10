<?php

namespace App;

class Joueur
{
    private string $nom;
    private string $prenom;
    private Poste $poste;

    /**
     * @param string $nom
     * @param string $prenom
     */
    public function __construct(string $nom, string $prenom,Poste $poste)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->poste = $poste;
    }


}