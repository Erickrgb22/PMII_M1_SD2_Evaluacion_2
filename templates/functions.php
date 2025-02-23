<?php
function getPokeAPIData($endpoint) {
    $url = "https://pokeapi.co/api/v2/$endpoint/";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

function getFormData() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los datos del formulario y almacenarlos en un array asociativo
        $formData = [
            'primerNombre' => $_POST['primerNombre'],
            'edad' => $_POST['edad'],
            'genero' => $_POST['genero'],
            'juegoFavorito' => $_POST['juegoFavorito'],
            'tipo' => $_POST['tipo']
        ];

        // Retornar el array con los datos del formulario
        return $formData;
    } else {
        // Si el formulario no ha sido enviado, redirigir al formulario
        header("Location: form.php");
        exit();
    }
}

function getPKM($endpoint, $numero) {
    $url = "https://pokeapi.co/api/v2/$endpoint/$numero/";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

function calculatePKM($primerNombre, $edad, $genero, $juegoFavorito, $tipo){
    // Concatenar los valores para generar una semilla
    $semilla = $primerNombre . $edad . $genero . $juegoFavorito . $tipo;

    // Calcular un hash de la semilla para obtener un número único
    $hash = crc32($semilla);

    // Asegurarse de que el hash sea positivo
    $hash = abs($hash);

    // Calcular el número entre 1 y 1024
    $numero = ($hash % 1024) + 1;

    return $numero;
}

$juegosPrincipales = [
    "Pokemon Red" => "Generación 1",
    "Pokemon Blue" => "Generación 1",
    "Pokemon Yellow" => "Generación 1",
    "Pokemon Gold" => "Generación 2",
    "Pokemon Silver" => "Generación 2",
    "Pokemon Crystal" => "Generación 2",
    "Pokemon Ruby" => "Generación 3",
    "Pokemon Sapphire" => "Generación 3",
    "Pokemon Emerald" => "Generación 3",
    "Pokemon FireRed" => "Generación 3",
    "Pokemon LeafGreen" => "Generación 3",
    "Pokemon Diamond" => "Generación 4",
    "Pokemon Pearl" => "Generación 4",
    "Pokemon Platinum" => "Generación 4",
    "Pokemon HeartGold" => "Generación 4",
    "Pokemon SoulSilver" => "Generación 4",
    "Pokemon Black" => "Generación 5",
    "Pokemon White" => "Generación 5",
    "Pokemon Black 2" => "Generación 5",
    "Pokemon White 2" => "Generación 5",
    "Pokemon X" => "Generación 6",
    "Pokemon Y" => "Generación 6",
    "Pokemon Omega Ruby" => "Generación 6",
    "Pokemon Alpha Sapphire" => "Generación 6",
    "Pokemon Sun" => "Generación 7",
    "Pokemon Moon" => "Generación 7",
    "Pokemon Ultra Sun" => "Generación 7",
    "Pokemon Ultra Moon" => "Generación 7",
    "Pokemon Let's Go Pikachu" => "Generación 7",
    "Pokemon Let's Go Eevee" => "Generación 7",
    "Pokemon Sword" => "Generación 8",
    "Pokemon Shield" => "Generación 8",
    "Pokemon Brilliant Diamond" => "Generación 8",
    "Pokemon Shining Pearl" => "Generación 8",
    "Pokemon Legends: Arceus" => "Generación 8",
    "Pokemon Scarlet" => "Generación 9",
    "Pokemon Violet" => "Generación 9"
];
?>