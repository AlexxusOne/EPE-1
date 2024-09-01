<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechSolutions - Contacto</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
  <?php include('header.php'); ?>

 
  <section class="container my-5">
    <h2 class="text-center mb-4">Contáctanos</h2>
    

    
    <form action="contact.php" method="POST" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
        <div class="invalid-feedback">
          Por favor ingrese su nombre.
        </div>
      </div>
      <div class="form-group">
        <label for="correo_electronico">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
        <div class="invalid-feedback">
          Por favor ingrese un correo electrónico válido.
        </div>
      </div>
      <div class="form-group">
        <label for="asunto">Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" required>
        <div class="invalid-feedback">
          Por favor ingrese el asunto.
        </div>
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        <div class="invalid-feedback">
          Por favor ingrese su mensaje.
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    <?php
   
    include('db.php');

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo_electronico'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

       
        $sql = "INSERT INTO contactos (nombre, correo_electronico, asunto, mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-4'>Mensaje enviado con éxito. Nos pondremos en contacto contigo pronto.</div>";
        } else {
            echo "<div class='alert alert-danger mt-4'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    
    $conn->close();
    ?>
  </section>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
   
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>
</html>
