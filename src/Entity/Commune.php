<?php

namespace EtalabWrapper\DecoupageAdministratif\Entity;

class Commune
{
    public string $code;
    public string $nom;
    public null|string $arrondissement;
    public string $departement;
    public null|string $type;
    public array $codesPostaux;
    public null|int $population;

    public function __construct(
        string $code,
        string $nom,
        null|string $arrondissement,
        string $departement,
        string $type,
        array $codesPostaux,
        null|int $population
    )
    {
        $this->code = $code;
        $this->nom = $nom;
        $this->arrondissement = $arrondissement;
        $this->departement = $departement;
        $this->type = $type;
        $this->codesPostaux = $codesPostaux;
        $this->population = $population;
    }
}
