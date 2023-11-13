<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href='src/CSS/index.css' rel='stylesheet' />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
    integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="src/JS/index.js" defer></script>
  <title>Excursio</title>
</head>

<body>
  <div id="nav">
    <?php
    include 'head.php';
    ?>
  </div>
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/img1.jpg" class="d-block w-100" alt="img1">
        </div>
        <div class="carousel-item">
          <img src="img/img2.jpg" class="d-block w-100" alt="img2">
        </div>
        <div class="carousel-item">
          <img src="img/img3.jpg" class="d-block w-100" alt="img3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row m-top">
      <div class="col-6 info">
        <p class="info">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>
      </div>
      <div class="col-6 d-felx">
        <a class="btn-ins" href="index.php?r=registre">
          <button type="button" class="btn btn-primary">Inscripció</button>
        </a>
      </div>
    </div>
  </div>
<!-- Moda Política de Cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookieModalLabel">Política de Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tanca"></button>
      </div>
      <div class="modal-body">
        <!-- Contingut de la nostra política de cookies -->
        <p>Aquest lloc web utilitza cookies per millorar l'experiència de l'usuari.</p>
        <p>Accepta les nostres cookies per continuar navegant.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accepta</button>
      </div>
    </div>
  </div>
</div>


</body>
<footer>
  <?php
  include 'footer.php';
  ?>
</footer>

</html>