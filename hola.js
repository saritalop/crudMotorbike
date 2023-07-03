document.getElementById("formula").addEventListener("submit", function (event) {
  event.preventDefault(); // Evita que se envíe el formulario automáticamente

  // Obtiene los valores de los campos
 var nombre_servicio = document.getElementById('nombre_servicio').value;
  var descripcion = document.getElementById('descripcion').value;

  // Realiza las validaciones
  if (nombre_servicio == "" || descripcion == "") {
      alert("Ingrese un nombre de servicio válido");
  }else{

      this.submit()
  }

});

