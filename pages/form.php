<!-- Pagina del Formulario, aqui hay bastante mas codigo que en la anterior -->
<!DOCTYPE html>
<html>

<?php
// Importar plantilla con el HEAD del documento HTML (es el mismo para las 3 paginas)
include '../templates/head.php';
// Importar plantilla que contiene diversas funciones de php que se usan en todo el sitio)
include '../templates/functions.php';
// Array con todos los tipos de pokemon obtenidos con la pokeAPI, la funcion esta definida en la
// plantilla functions.php
$tipos = getPokeAPIData("type")['results'];
?>

<!-- No voy a comentar el codigo aca linea por linea como en la pagina anterior
 Basicamente es la misma tarjeta con la imagen del profesor OAK y los controles del
 formulario se aplican exactamente los mismos estilos que en la pagina del saludo
 -->
<body>
    <div class="container">
        <div class="card">
            <img src="https://images.wikidexcdn.net/mwuploads/wikidex/f/f8/latest/20180820010545/Profesor_Oak_LGPE.png" class="card-img-top" alt="...">

            <div class="card-body">
                <h1 class="card-title">Rellena el Formulario</h1>

<!-- Esta linea define el formulario, notese que llama a la pagina result.php usando el metodo POST
 De este modo esa pagina mediante una funcion getFormData definida en functions.php la pagina results.php obtendra la data ingresada en este formulario 
 Cada control del formulario contenido en una etiqueta input tiene la logica de validacion, esta es verificada por javascript para mostrar u ocultar los mensaje de validacion que tienen la clase invalid-feedback. 
 -->
                <form id="pokemonForm" action="result.php" method="POST" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="primerNombre" class="form-label">Primer Nombre</label>
                        <input type="text" class="form-control" id="primerNombre" name="primerNombre" maxlength="28" pattern="^\S+$" required>
                        <div class="invalid-feedback">
                            El primer nombre no puede tener espacios y es obligatorio (máximo 28 caracteres).
                        </div>
                    </div>

                    <!-- Edad -->
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" min="6" required>
                        <div class="invalid-feedback">
                            Debes tener más de 5 años para jugar Pokémon.
                        </div>
                    </div>

                    <!-- Género -->
                    <div class="mb-3">
                        <label class="form-label">Género</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino" required>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino" required>
                                <label class="form-check-label" for="femenino">Femenino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="otro" value="otro" required>
                                <label class="form-check-label" for="otro">Otro</label>
                            </div>
                        </div>
                    </div>

                    <!-- Juego Favorito  contiene codigo PHP para listar los Juegos de pokemon usando un bucle con PHP
                     e iterando las opciones sobre un array degfinido en functions.php-->
                    <div class="mb-3">
                        <label for="juegoFavorito" class="form-label">Juego Favorito</label>
                        <select class="form-select" id="juegoFavorito" name="juegoFavorito" required>
                            <option value="">Selecciona un juego</option>
                            <?php foreach ($juegosPrincipales as $juego => $generacion): ?>
                                <option value="<?= $juego ?>"><?= ucwords(str_replace("-", " ", $juego)) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Selecciona tu juego favorito.
                        </div>
                    </div>

                    <!-- Tipo  Muy parecido al caso anterior pero en vez de usar un array estatico, usa el obtenido por la funcion getPokeAPIData 
                     del inicio almacenado en la variable $tipo-->
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option value="">Selecciona un tipo</option>
                            <?php foreach ($tipos as $tipo): ?>
                                <option value="<?= $tipo['name'] ?>"><?= ucfirst($tipo['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Selecciona un tipo.
                        </div>
                    </div>

                    <!-- Botón de Submit deshabilitado si el formulario no esta completo, la validacion es hecha por JAVASCRIPT-->
                    <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Enviar</button>
                </form>
            </div>
        </div>
        <!--Java Scrip de Bootsrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                            <!--Java Script de validacion del formulario -->
        <script src="../scritps/form_validation.js"></script>
</body>

</html>