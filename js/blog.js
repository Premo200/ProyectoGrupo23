document.addEventListener("DOMContentLoaded", function() {
  // Agregar un evento click a los botones de "Leer más"
  const buttons = document.querySelectorAll(
    ".DiJuFra-button-smsec3, .DiJuFra-button-smsec4, .DiJuFra-button-smsec5"
  );
  buttons.forEach((button) => {
    button.addEventListener("click", function() {
      // Redirigir a la página de artículos al hacer clic en el botón "Leer más"
      window.location.href = "includes/articulos.html";
    });
  });

  
  const links = document.querySelectorAll(".DiJuFra-text148");
  links.forEach((link) => {
    link.addEventListener("mouseover", function() {
      // Agregar lógica a ejecutar al pasar el mouse sobre los enlaces
      console.log('Mouse sobre enlace');
    });
  });
});
