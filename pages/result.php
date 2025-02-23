<!-- Pagina final de resultado muestra el pokemon y su nombre-->
<!DOCTYPE html>
<html>

<?php
// Importar plantilla de HEAD que es la misma para todas la paginas del sitio
include '../templates/head.php';
// Importan plantilla de funciones, me permite tener el codigo mas limpio por que defino las funciones en este archivo
// Si necesito una funcion en otro .php no tengo que reescribirla, solo incluyo este archivo y las llamo.
include '../templates/functions.php';
// Valida obtiene y valida que el formulario sea recibido, de caso contrario te redirige al form.php
$formData = getFormData();

// Obtiene un numero entre 1 y 1024 correspondiente al numero de pokedex de un pokemon mediante un calculo unico de HASH
$pokemonUser = calculatePKM($formData['primerNombre'], $formData['edad'], $formData['genero'], $formData['juegoFavorito'], $formData['tipo']);
// Consulta la api mediante un get para obtener la data del pokemon usando el numero calculado
$pokemonData = getPKM('pokemon', $pokemonUser);
$pokemonName = $pokemonData['name']; // Nombre del Pokémon
$pokemonSprite = $pokemonData['sprites']['front_default']; // URL del sprite frontal
?>

<!-- cuerpo similar a las paginas anteriores, en este caso tenemos codigo php embebido para usar las variables obtenidas del pokemon
 para mostrar su nombre y su imagen en la tarjeta-->
<body>
    <div class="container">
        <div class="card">
            <img src="<?= ucfirst($pokemonSprite)?>" class="card-img-top" alt="...">

            <div class="card-body">
                <h1 class="card-title"><?= ucfirst($pokemonName) ?></h1>
                <h2> Este es tu Pokemon !</h2>
            </div>
        </div>
    </div>