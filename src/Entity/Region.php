<?php

namespace EtalabWrapper\DecoupageAdministratif\Entity;

class Region
{
    public string $code;
    public string $nom;
    public string $chefLieu;

    public function __construct(
        string $code,
        string $nom,
        string $chefLieu
    )
    {
        $this->code = $code;
        $this->nom = $nom;
        $this->chefLieu = $chefLieu;
    }
}
