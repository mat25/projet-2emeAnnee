<?php
namespace App;
class Equipe {
    private string $nom;
    private int $nbLikes;
    private string $entraineur;
    private string $anneeCreation;
    /**
     * @var Joueur[]
     */
    private array $joueurs;

    /**
     * @param string $nom
     * @param string $entraineur
     * @param string $anneeCreation
     */
    public function __construct(string $nom, string $entraineur, string $anneeCreation)
    {
        $this->nom = $nom;
        $this->entraineur = $entraineur;
        $this->anneeCreation = $anneeCreation;
        $this->nbLikes = 0;
        $this->joueurs = [];
    }

    public function incrementerNbLikes() : void {
        $this->nbLikes++;
    }

    /**
     * @return array
     */
    public function getJoueurs(): array
    {
        return $this->joueurs;
    }


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getNbLikes(): int
    {
        return $this->nbLikes;
    }

    /**
     * @return string
     */
    public function getEntraineur(): string
    {
        return $this->entraineur;
    }


    /**
     * @return string
     */
    public function getAnneeCreation(): string
    {
        return $this->anneeCreation;
    }




    public function ajouterJoueur(Joueur $joueur) : void {
        $this->joueurs[] = $joueur;
    }



}
