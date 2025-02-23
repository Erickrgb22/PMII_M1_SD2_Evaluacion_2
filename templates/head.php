<!-- Plantilla con todo el HEAD que usan las 3 paginas
Aqui defino el nombre de la pestana con la etiqueta title
El icono de la pokebola es ese link con atributo rel="icon"

Las etiquetas de metadatos basicas como el charset para definir los caracteres y
el viewport para apoyar al diseno responsive (que se vea bien en todos lados)

Por ultimo pero no menos importante todos los estilos de la pagina includo el framework Boostrap 5
fondo.css que coloca la imagen del fondo
menu.css son un conjunto de estilos para mantener la UI de forma consistente
form_control.css son valores personalizados para el formulario, sobreescribo el color rojo que pone
Bootsrap por uno gris puesto que mi validacion es dimanica para no sobrecargar de peticiones la pagina.

-->
<head>
  <title>Adivina tu Pokemon</title>
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pok%C3%A9_Ball_icon.svg/1026px-Pok%C3%A9_Ball_icon.svg.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Herramienta de Debug para ver el break point de bootsrap <link rel="stylesheet" href="../styles/boostrap-breakpoint.css"> -->
  <link rel="stylesheet" href="../styles/fondo.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <link rel="stylesheet" href="../styles/form_control.css">
</head>