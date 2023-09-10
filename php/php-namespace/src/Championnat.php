<?php
namespace App;
use League\Csv\Reader;
class Championnat {
    private string $nom;
    // Association ONE TO MANY avec la classe Equipe
    // Chaque element du tableau est un objet (une instance) de la classe Equipe
    /**
     * @var Equipe[]
     */
    private array $equipes;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->equipes = [];
    }

    public function ajouterEquipe(Equipe $equipe) : void {
        $this->equipes[] = $equipe;
    }

    public function getNombreEquipes() : int {
        return count($this->equipes);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return array
     */
    public function getEquipes(): array
    {
        return $this->equipes;
    }

    public function ajouterEquipesCSV($nomFichier) {
        $reader = Reader::createFromPath("./csv/$nomFichier", 'r');
        $reader->setHeaderOffset(0);
        $reader->setDelimiter(";");
        $records = $reader->getRecords();
        foreach ($records as $offset => $record) {
            $equipe = new Equipe($record["Nom"],$record["Entraineur"],$record["Annee de creation"]);
            $this->ajouterEquipe($equipe);
        }
    }



}