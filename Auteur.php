<?php

class Auteur
{
    public function __construct(
        public string $nom,
        public string $prenom,
    ) {}
    public function getCompleteName(): string { return $this->nom . ' ' . $this->prenom; }
}