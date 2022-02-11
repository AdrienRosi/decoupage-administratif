<?php

namespace EtalabWrapper\DecoupageAdministratif\Entity;

class Departement
{
    public string $code;
    public string $nom;
    public string $chefLieu;
    public string $region;

    public function __construct(
        string $code,
        string $nom,
        string $chefLieu,
        string $region
    )
    {
        $this->code = $code;
        $this->nom = $nom;
        $this->chefLieu = $chefLieu;
        $this->region = $region;
    }
}
