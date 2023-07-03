document.getElementById("formula").addEventListener("submit", function (event) {
  event.preventDefault(); // Evita que se envíe el formulario automáticamente

  // Obtiene los valores de los campos
  var nombre_servicio = document.getElementById('nombre_servicio').value;
  var descripcion = document.getElementById('descripcion').value;

  var validarAmbos = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/; // Expresión regular para validar solo letras y espacios

  // Realiza las validaciones
  if (nombre_servicio == "" || descripcion == "") {
    Swal.fire({
      icon: "error",
      title: "Oops!",
      text: "Llenar los campos vacios",
    });
  } else if (!validarAmbos.test(nombre_servicio)) {
    Swal.fire({
      icon: "error",
      title: "Oops!",
      text: "Ingresar un servicio válido",
    });
  } else if (!validarAmbos.test(descripcion)) {
    Swal.fire({
      icon: "error",
      title: "Oops!",
      text: "Ingresar una descripción válida",
    });
  }
  else {
    this.submit()
  }




});

function cancelar() {
  // Cerrar el formulario aquí
  document.getElementById('formula').reset();
  window.location.href = 'servicios.php';


}



