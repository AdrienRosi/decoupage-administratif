<?php

namespace EtalabWrapper\DecoupageAdministratif\Entity;

class Arrondissement
{
    public string $code;
    public string $nom;
    public string $chefLieu;
    public string $commune;

    public function __construct(
        string $code,
        string $nom,
        string $chefLieu,
        string $commune
    )
    {
        $this->code = $code;
        $this->nom = $nom;
        $this->chefLieu = $chefLieu;
        $this->commune = $commune;
    }
}
