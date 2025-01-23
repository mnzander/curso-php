<?php
// Variables
    $name = "Ander";
    $isDev = true;
    $age = 26;
    $isOld = $age > 40;

// Constantes
    const NOMBRE = "Ander";
    define('LOGO_URL', 'https://www.php.net/images/logos/new-php-logo.svg');

// Interpolación  
    $output = "Hola $name, con una edad de $age";

// Ternario 
    $outputAge = $isOld ? "Eres viejo, lo siento" : "Eres joven, lo siento tambien";

// Match
    $outputAgeWithMatch = match (true) {
        $age < 2    => "Eres un bebé, $name",
        $age < 10   => "Eres un niño, $name",
        $age < 18   => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40   => "Eres un adulto joven, $name",
        $age < 60   => "Eres un adulto mayor, $name",
        default     => "Eres un anciano, $name",        
    };

// Arrays

    $bestLanguages = ["PHP", "Javascript", "Python"];
    $bestLanguages[] = "Java"; //Añadir al final del Array
    $bestLanguages[2] = "Typescript"; //Añadir en una posición

?>

<!-- IF de PHP, manera diferente -->
<?php if ($isOld) : ?>
    <h2>Eres viejo lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev...</h2>
<?php else : ?>
    <h2>Eres joven, lo siento tambien</h2>
<?php endif; ?>

<!-- IMG Y TITLE -->
<h3>
    <!-- Acceder a una posición de un Array -->
    El mejor lenguaje es <?= $bestLanguages[1] ?> 
</h3>

<ul>
    <!-- Iterar en un Array -->
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . ": " . $language ?></li>
    <?php endforeach; ?>
</ul>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output ?>
</h1>

<!-- CSS -->
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
