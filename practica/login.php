<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="formulario">
    <h1 id="titulo">Iniciar sesión</h1>

    <label for="identificacion">Identificación</label>
    <input type="text" id="identificacion">

    <label for="contrasena">Contraseña</label>
    <input type="password" id="contrasena">

    <button onclick="procesarLogin()">Procesar</button>
    

    <script src="script.js"></script>
    <p><a href="recuperar_acceso.html">¿Olvidó su contraseña?</a></p>
    <p>¿No tiene cuenta? <a href="registrar_usuarios.html">Regístrese</a></p>
  
     </div>
  </body>
</html>