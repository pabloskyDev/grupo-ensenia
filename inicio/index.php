<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grupo enseña</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body class="bodyindex" >
    <!-- Menu navegación index -->
    <nav class="navbar navbar-expand-lg bg-nav">
      <?php include '../templates/header.php'; ?>
    </nav>    
    <div id="carouselExampleIndicators" class="carousel slide container"      data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/carrousel1.png" class="d-block h-100" alt="imagen 1">
        </div>
        <div class="carousel-item">
          <img src="../img/carrousel2.png" class="d-block h-100" alt="imagen 2">
        </div>
        <div class="carousel-item">
          <img src="../img/carrousel3.png" class="d-block h-100" alt="imagen 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <div class="scards container-fluid">
      <div class="row">
        <div class="card1 col-md-4">
          <div class="card bg-card3 align-items-center p-3">
            <img src="../img/logoImagenLetras.png" class="card-img-top w-50 h-50" alt="logo imagen letras">
            <div class="card-body">
              <p class="card-text text-light">Es una empresa de diseño
                y desarrollo de proyectos para la inclusión, ajustes
                razonables y accesibilidad para las Personas con
                discapacidad, expertos en el área de la Interpretación en
                Lengua de Señas Colombiana L.S.C.</p>
            </div>
          </div>
        </div>
        <div class="card2 col-md-4">
          <div class="card bg bg-card3 align-items-center p-3">
            <img src="../img/logoImagenLetras.png" class="card-img-top w-50" alt="logo imagen letras">
              <div class="card-body">
                <p class="card-text text-light">Es una empresa de diseño
                 y desarrollo de proyectos para la inclusión, ajustes
                 razonables y accesibilidad para las Personas con
                 discapacidad, expertos en el área de la Interpretación en
                 Lengua de Señas Colombiana L.S.C.</p>
              </div>
            </div>
        </div>
          <div class="card3 col-md-4">
            <div class="card bg bg-card3 align-items-center p-3">
              <img src="../img/logoImagenLetras.png" class="card-img-top w-50" alt="logo imagen letras">
                <div class="card-body">
                  <p class="card-text text-light">Es una empresa de diseño
                    y desarrollo de proyectos para la inclusión, ajustes
                    razonables y accesibilidad para las Personas con
                    discapacidad, expertos en el área de la Interpretación en
                    Lengua de Señas Colombiana L.S.C.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <video src="../img/video1.mp4" class="card-img-top" alt="video muestra 1">
              </div>
              <div class="col-md-6 align-self-center align-content-center">
                <div class="container">
                  <div class="row">
                    <img src="../img/logoImagenLetras.png" class="card-img-top w-90" alt="logo imagen letras">
                  </div>
                  <br>
                  <div class="row">
                    <img src="../img/logoImagenLetras.png" class="card-img-top w-90" alt="logo imagen letras">
                  </div>
                </div>   
          </div>
       </div>          
<br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-nav text-muted ">
  <?php include '../templates/footer.php'; ?>
</footer>
<!-- fin footer-->

<!-- scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="../js/app1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <!--animaciones scrollreveal-->
  <script>
    window.sr = ScrollReveal();
    sr.reveal('#carouselExampleIndicators',{
        duration:2000,
        origin: 'left',
        distance:'800px'
    });    
  </script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.card1',{
        duration:2000,
        origin: 'top',
        distance:'200px'
    });    
  </script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.card2',{
        duration:2000,
        origin: 'bottom',
        distance:'200px'
    });    
  </script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.card3',{
        duration:2000,
        origin: 'top',
        distance:'200px'
    });    
  </script>
  <script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

   anime.timeline({loop: true})
   .add({
    targets: '.ml .letter',
    scale: [0, 1],
    duration: 2500,
    elasticity: 800,
    delay: (el, i) => 100 * (i+1)
   }).add({
    targets: '.ml',
    opacity: 0,
    duration: 2000,
    easing: "easeOutExpo",
    delay: 1000
  });
  </script>
  </body>
</html>