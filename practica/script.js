function procesarLogin() {
  var identificacion = document.getElementById("identificacion").value;
  var contrasena = document.getElementById("contrasena").value;

  if (identificacion === "" || contrasena === "") {
    alert("Por favor completá todos los campos.");
    return;
  }

  alert("Bienvenido: " + identificacion);
}