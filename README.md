# Découpage administratif 

Wrapper PHP pour l'accès aux données concernant le découpage administratif français

## Installation

```
composer require etalab-wrapper/decoupage-administratif
```

## Utilisation

```
<?php

include_once('../vendor/autoload.php');

use EtalabWrapper\DecoupageAdministratif\Commune;
use EtalabWrapper\DecoupageAdministratif\Departement;
use EtalabWrapper\DecoupageAdministratif\Region;

Region::get();
Region::getOne('93');
Departement::get();
Departement::getBy('93');
Departement::getOne('84');
Commune::getBy('84000');
Commune::getOne('84007');

```

## Crédits

- [@etalab]https://github.com/etalab/decoupage-administratif

## Licence
Données : Licence Ouverte
Code : MIT
