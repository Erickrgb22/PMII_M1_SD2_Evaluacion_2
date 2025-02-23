    // Validacion dinamica del formulario en form.php

    // funcion para escuchar cambios en el DOM del sitio y tomara acciones
    document.addEventListener("DOMContentLoaded", function () {
      const form = document.getElementById("pokemonForm");
      const submitBtn = document.getElementById("submitBtn");

      // Función para validar un campo individual le agrega la clase is-valid o is-invalid
      // segun corresponda, de este modo se muestran o se ocultan los mensajes aplicando los estilos
      function validateField(field) {
        if (field.checkValidity()) {
          field.classList.remove("is-invalid");
          field.classList.add("is-valid");
        } else {
          field.classList.remove("is-valid");
          field.classList.add("is-invalid");
        }
      }

      // Función para validar el formulario completo
      function validateForm() {
        const primerNombre = document.getElementById("primerNombre");
        const edad = document.getElementById("edad");
        const genero = document.querySelector('input[name="genero"]:checked');
        const juegoFavorito = document.getElementById("juegoFavorito");
        const tipo = document.getElementById("tipo");

        // Validar cada campo
        validateField(primerNombre);
        validateField(edad);
        validateField(juegoFavorito);
        validateField(tipo);

        // Validar género (es un grupo de radio buttons)
        const generoGroup = document.querySelectorAll('input[name="genero"]');
        let isGeneroValid = false;
        generoGroup.forEach((radio) => {
          if (radio.checked) isGeneroValid = true;
        });
        if (!isGeneroValid) {
          generoGroup.forEach((radio) => {
            radio.classList.add("is-invalid");
          });
        } else {
          generoGroup.forEach((radio) => {
            radio.classList.remove("is-invalid");
          });
        }

        // Habilitar o deshabilitar el botón
        if (
          primerNombre.checkValidity() &&
          edad.checkValidity() &&
          isGeneroValid &&
          juegoFavorito.checkValidity() &&
          tipo.checkValidity()
        ) {
          submitBtn.disabled = false;
        } else {
          submitBtn.disabled = true;
        }
      }

      // Escuchar cambios en los campos
      form.addEventListener("input", function (event) {
        validateField(event.target); // Validar el campo que cambió
        validateForm(); // Validar el formulario completo
      });

      // Validar al enviar el formulario
      form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      });

      // Validar el formulario al cargar la página
      validateForm();
    });