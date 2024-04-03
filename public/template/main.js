$(document).ready(function() {
    $('.dropdown-toggle').dropdown();
    $('#loginForm').submit(function(event) {
      event.preventDefault();
      
      var username = $('#loginUsername').val();
      var password = $('#loginPassword').val();
      
      // Aquí podrías enviar los datos de inicio de sesión al servidor para su verificación y procesamiento
      console.log("Username: " + username);
      console.log("Password: " + password);
      
      // Por simplicidad, solo mostraremos los datos en la consola del navegador
      // En producción, deberías enviar estos datos al servidor para su procesamiento
    });
  });
  