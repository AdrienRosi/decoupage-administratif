<?php

namespace EtalabWrapper\DecoupageAdministratif;

use EtalabWrapper\DecoupageAdministratif\Entity\Commune as Entity;

class Commune
{
    public static function db(): array
    {
        return \json_decode(file_get_contents(__DIR__ . '/../data/communes.json'), true);
    }

    public static function getOne(string $code): null|Entity
    {
        $results = \array_filter(self::db(), function($item) use ($code) {
            return \array_key_exists('type', $item)
                && $item['type'] === 'commune-actuelle'
                && \array_key_exists('code', $item)
                && $item['code'] === $code;
        });

        return $results ? self::dataTransformer(\current($results)) : null;
    }

    public static function getBy(string $codePostal): iterable
    {
        return \array_map(function (array $item) {
            return self::dataTransformer($item);
        }, \array_filter(self::db(), function($item) use ($codePostal) {
            return \array_key_exists('codesPostaux', $item) && \in_array($codePostal, $item['codesPostaux']);
        }));
    }

    private static function dataTransformer(array $data): Entity
    {
        return new Entity(
            $data['code'],
            $data['nom'],
            $data['arrondissement'] ?? null,
            $data['departement'],
            $data['type'],
            $data['codesPostaux'],
            $data['population']
        );
    }
}
