<?php

class Biblioteque
{
    private static array $livres;
    public static function addLivre(Livre $livre): void
    {
        self::$livres[] = $livre;
    }
    public static function getLivres(): array
    {
        return self::$livres;
    }
    public static function afficherLivres() {
        foreach (self::$livres as $livre) {
            echo $livre->getDescription() . PHP_EOL;
        }
    }
    public static function rechercherLivres(string $critere): array {
        $resultats = [];
        foreach (self::$livres as $livre) {
            if ($livre instanceof Livre) {
                if (stripos($livre->getDescription(), $critere)) {
                    $resultats[] = $livre->getDescription();
                }
            }
        }
        return $resultats;
    }
}