<?php

include_once __DIR__ . '/prodotto.php';

class Dvd extends Prodotto
{
    public $time;
    public $cover;

    public function __construct(
        string $nome,
        string $autore,
        float $prezzo,
        Generi $generi,
        bool $pubblicato,
        string $immagine,

        int $time,
        string $cover
    )
    {
        $this->time = $time;
        $this->cover = $cover;
        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}