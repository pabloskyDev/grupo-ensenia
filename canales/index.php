<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body class="bodyquienessomos">
    <!-- Menu navegación CANALES -->
    <nav class="navbar navbar-expand-lg bg-canales">
      <?php include '../templates/header.php'; ?>
    </nav>                
    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-canales text-muted ">
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
          origin: 'left',
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
          origin: 'right',
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