document.addEventListener("DOMContentLoaded", function() {
  const button = document.querySelector(".DiJuFra-button-md3");
  const nombreInput = document.getElementById("nombreYApellidosInput");
  const emailInput = document.getElementById("emailInput");
  const mensajeInput = document.getElementById("mensajeInput");

  // Función para borrar el texto por defecto cuando el usuario hace clic en el campo
  nombreInput.addEventListener("focus", function() {
    if (nombreInput.value === "Nombre y apellidos") {
      nombreInput.value = "";
    }
  });

  nombreInput.addEventListener("blur", function() {
    if (nombreInput.value === "") {
      nombreInput.value = "Nombre y apellidos";
    }
  });

  // Función para borrar el texto por defecto cuando el usuario hace clic en el campo
  emailInput.addEventListener("focus", function() {
    if (emailInput.value === "E-mail") {
      emailInput.value = "";
    }
  });

  emailInput.addEventListener("blur", function() {
    if (emailInput.value === "") {
      emailInput.value = "E-mail";
    }
  });

  // Función para borrar el texto por defecto cuando el usuario hace clic en el campo
  mensajeInput.addEventListener("focus", function() {
    if (mensajeInput.value === "Mensaje") {
      mensajeInput.value = "";
    }
  });

  mensajeInput.addEventListener("blur", function() {
    if (mensajeInput.value === "") {
      mensajeInput.value = "Mensaje";
    }
  });

  // Evento para el botón RESERVAR
  button.addEventListener("click", function(event) {
    event.preventDefault(); // Prevenir envío del formulario por defecto
    
    const nombre = nombreInput.value;
    const email = emailInput.value;
    const mensaje = mensajeInput.value;

    // Verificar si todos los campos están completos y no son los valores predeterminados
    if (nombre && email && mensaje && 
        nombre !== "Nombre y apellidos" && 
        email !== "E-mail" && 
        mensaje !== "Mensaje") {
      
      // Aquí se puede implementar una lógica adicional, como enviar datos a un servidor o mostrar una notificación.
      alert("Mensaje enviado correctamente. ¡Gracias por contactarnos!");

      // Restablecer los campos después de enviar el mensaje
      nombreInput.value = "Nombre y apellidos";
      emailInput.value = "E-mail";
      mensajeInput.value = "Mensaje";
    } else {
      alert("Por favor complete todos los campos.");
    }
  });
});
