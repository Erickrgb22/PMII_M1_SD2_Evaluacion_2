<!-- Pagina Principal, aqui hay un saludo bonito y un boton de continuar -->
<!DOCTYPE html>
<html>

<?php
// Importar el HEAD del sitio, este es el mismo para las 3 paginas.
include '../templates/head.php';
?>

<!-- Cuerpo de la Pagina -->
<body>
  
<!-- Contenedor de bootsrap para alojar contenido, se le aplica un estilo CSS definido en menu.css para darle tamano y centrarlo -->
  <div class="container">
    
  <!-- Se usa la clase card de bootstrap que basicamente agrega una tarjetita blanca, tambien tiene un estilo que define su tamano en menu.css-->
    <div class="card"> 

      <!-- Imagen de la Pokebola, se usa la clase card-img-top para que tome el estilo basico de bootstrap de imagen en tarjeta, pero tambien
      se agrego un estilo personalizado en menu.css para mantener la pokebola de un tamano controlado ni muy grande ni muy pequeno en caso de no
      estar disponible la imagen obtenida de la url se mostraran tres puntos suspensivos  -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pok%C3%A9_Ball_icon.svg/1026px-Pok%C3%A9_Ball_icon.svg.png" class="card-img-top" alt="...">
      
      <!-- Div para delimitar el cuerpo de la tarjeta, necesario segun la documentacion de bootsrap para mantener las
       dimenciones dentro de la tarjeta -->
      <div class="card-body">

        <!-- Titulo de la tarjeta, clase card-title de boostrap le da el tamano y la tipografia -->
        <h1 class="card-title"> Bienvenido al mundo Pokemon</h1>
        <!-- Menaje de bienvenida amigable generado por IA (me dio flojera imanigarme uno no soy bueno redactando)
         clase card-text le da tamano y tipografia a la letra -->
        <p class="card-text"> ¡Bienvenid@ a tu destino Pokémon! 🎉✨ Aquí descubrirás qué criatura mágica te acompañaría si el mundo Pokémon fuese real. ¿List@ para conocer a tu compañero de aventuras? ¡Haz clic y deja que la magia comience! 🌟🔮 #TuPokémonTeEspera</p>
        <!-- Link a la siguiente pagina tiene varias clases, una es btn que define que es un boton, btn-primary viene de bootsrap y le da ese color azul, d-flex y justify es para que el boton ocupe todo el largo de la tarjeta y el texto este en el centro-->
        <a href="form.php" class="btn btn-primary d-flex justify-content-center">Continuar</a>
      </div>
    </div>
  </div>
</body>
</html>