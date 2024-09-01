<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechSolutions - Inicio</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <header class="bg-primary text-white text-center py-4">
    <h1>TechSolutions</h1>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="services.php">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="team.php">Equipo</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
        </ul>
      </div>
    </nav>
  </header>

  
  <section class="container my-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Sobre Nosotros</h2>
        <p>TechSolutions es una empresa líder en asesoría tecnológica, ofreciendo servicios de consultoría, desarrollo de software y seguridad informática.</p>
      </div>
      <div class="col-md-6">
        <img src="img/logo.jpg" class="img-fluid" alt="TechSolutions">
      </div>
    </div>
  </section>

  
  <section class="bg-light py-5">
    <div class="container">
      <h3 class="text-center mb-4">Testimonios de Clientes</h3>
      <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <blockquote class="blockquote text-center">
              <p class="mb-0">"TechSolutions transformó nuestra infraestructura tecnológica. ¡Altamente recomendados!"</p>
              <footer class="blockquote-footer">Juan Pérez, CEO de ABC Corp</footer>
            </blockquote>
          </div>
          <div class="carousel-item">
            <blockquote class="blockquote text-center">
              <p class="mb-0">"Excelente servicio y soporte técnico. Resolvieron todos nuestros problemas de seguridad."</p>
              <footer class="blockquote-footer">Ana Gómez, Gerente de IT en XYZ Ltd.</footer>
            </blockquote>
          </div>
        </div>
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
