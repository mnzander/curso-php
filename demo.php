<?php
//Trae TODO el contenido del archivo y "lo pone aquí" - El "require" se puede importar todas las veces que se quiera y puede dar problemas.
//Tambien existe el 'include' e 'include_once': La diferencia esque en ver de dar error, da Warnings
require_once "consts.php";
require_once "functions.php"; 
require_once "classes/NextMovie.php";

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

// $data = get_data(API_URL);
// $until_message = get_until_message($data["days_until"]);

/* ALTERNATIVA CON CURL (Sirve para GET, POST, PUT, DELETE...)

    $ch = curl_init(API_URL); //Inicializar una nueva sesión de cURL; ch = cURL handle

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla

    $result = curl_exec($ch); //Ejecutar la petición y guardamos el resultado

    curl_close($ch);
*/

?>

<?php render_template("head", $next_movie_data); ?>
<?php render_template("main", array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()]
)); ?>
<?php render_template("styles"); ?>