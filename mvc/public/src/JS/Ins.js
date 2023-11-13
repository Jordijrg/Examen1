new DataTable('#example');

function verifyPassword() {
  var password = jQuery('#password').val();

  // Realizar la petición AJAX
  $('#inscripcionesTable').hide();
  $.ajax({
    type: 'POST',
    url: 'index.php?r=verificarPasswd',
    data: { password: password },
    async: false,
    success: function(data) {
      console.log(data);
      if (data === 'success') {
        // Contraseña correcta, mostrar la sección de inscripciones
        $('#passwordForm').hide();
        $('#inscripcionesTable').show();
        $('#container').addClass('d-block');
        $('#correct').addClass('d-block');
        console.log('Contraseña correcta');
      } else {
        // Contraseña incorrecta, mostrar un mensaje o realizar otras acciones
        alert('Contraseña incorrecta');
      }      
    },
    error: function() {
      // Manejar errores de la petición AJAX
      alert('Error al verificar la contraseña');
    }
  });
}
