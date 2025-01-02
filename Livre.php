<?php

class Livre
{
    public function __construct(
        public string $titre,
        public Auteur $auteur,
        public int $pages,
    ) {}
    public function getDescription(): string { return "Titre: " . $this->titre . ", Auteur: " . $this->auteur->getCompleteName() . ", Pages: " . $this->pages; }

}