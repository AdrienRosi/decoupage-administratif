<?php

namespace EtalabWrapper\DecoupageAdministratif;

use EtalabWrapper\DecoupageAdministratif\Entity\Departement as Entity;

class Departement
{
    public static function db(): array
    {
        return \json_decode(file_get_contents(__DIR__ . '/../data/departements.json'), true);
    }

    public static function get(): array
    {
        return \array_map(function(array $item) {
            return self::dataTransformer($item);
        }, self::db());
    }

    public static function getOne(string $code): null|Entity
    {
        $results = \array_filter(self::db(), function($item) use ($code) {
            return $item['code'] === $code;
        });

        return $results ? self::dataTransformer(\current($results)) : null;
    }

    public static function getBy(string $codeRegion): iterable
    {
        return \array_map(function (array $item) {
            return self::dataTransformer($item);
        }, \array_filter(self::db(), function($item) use ($codeRegion) {
            return \array_key_exists('region', $item) && $item['region'] === $codeRegion;
        }));
    }

    private static function dataTransformer(array $data): Entity
    {
        return new Entity(
            $data['code'],
            $data['nom'],
            $data['chefLieu'],
            $data['region']
        );
    }
}
