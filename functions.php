<?php

declare(strict_types=1); //Solo se puede a nivel de archivo (arriba del todo)

function render_template (string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url) :array { //Tiene que recibir un String y devolver un Array
    $result = file_get_contents($url); //Solo para hacer GET de una API
    $data = json_decode($result, true); //Convertir los datos a un Array asociativo
    return $data;
}

function get_until_message(int $days) :string { //Recibe un entero y devuelve un String
    return match (true) { // Devuelve cuando sea correcto...
        $days === 0 => "¡Hoy se estrena!",
        $days === 1 => "¡Mañana se estrena!",
        $days < 7   => "Esta semana se estrena",
        $days < 30  => "Este mes se estrena...",
        default     => "$days días hasta el estreno",
    };
}