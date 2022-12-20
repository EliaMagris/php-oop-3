<?php


include_once __DIR__ . '/prodotto.php';

class Cd extends Prodotto
{

    public $durata;
    public $anno;

    public function __construct(
        string $nome,
        string $autore,
        float $prezzo,
        Generi $generi,
        bool $pubblicato,
        string $immagine,

        int $durata,
        int $anno
    )
    {
        $this->durata = $durata;
        $this->anno = $anno;
        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}