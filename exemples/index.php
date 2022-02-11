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
