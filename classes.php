<?php

declare(strict_types=1);

class SuperHero {

    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ){

    }

    public function attack() {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description() {
        $powers = implode(", ", $this->powers); //Pasar un array a un string ('Join' de Javascript) / explode ('Split' en Javascript)
        return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }
}

$hero = new SuperHero("Batman", ["Inteligencia", "fuerza", "tecnología"], "Gotham");

?>