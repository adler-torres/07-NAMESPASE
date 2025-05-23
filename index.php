<?php
 require 'views/indexx.php';

spl_autoload_register(function ($class_name) {
    $ruta = str_replace('\\', '/', $class_name);
    $ruta = str_replace('App/Models', 'Models', $ruta);
    $ruta = str_replace('Controllers', 'Controllers', $ruta);
    include $ruta . '.php';
});

use App\Models\Persona as PersonaModelo;
use Controllers\Persona as PersonaControlador;

$objPerModelo = new PersonaModelo();
$objPerModelo->hola();

echo "<br>";

$objPerControlador = new PersonaControlador();
$objPerControlador->hola();
?>


