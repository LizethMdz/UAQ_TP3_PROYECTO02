<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Decalogo de Mavila!</title>
















































































































































    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-light js-scroll-trigger" href="#page-top">SISTEMAS DE INFORMACIÓN</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-light text-dark rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Principios</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="interaccion.php">Interacción</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="autor.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-black text-center " style="background-image: url('img/happy.jpeg'); ">
      <div class="container">
        <h1 class="text-uppercase text-white mb-0">DECÁLOGO DE MAVILA</h1>
        <hr class="star-light">
        <h2 class="font-weight-light text-white mb-0">Proyecto 2 -  TÓPICO III</h2>
      </div>
    </header>



    <!-- About Section -->
    <section class="bg-white text-black mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-dark">RESULTADOS</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <?php

            $suma = 0;
            $porcentaje = 0;

            $uno = (int)$_POST['radio-1'];
            $dos = (int)$_POST['radio-2'];
            $tres = (int)$_POST['radio-3'];
            $cuatro = (int)$_POST['radio-4'];
            $cinco = (int)$_POST['radio-5'];

            $suma = $uno + $dos + $tres + $cuatro + $cinco;
            ?>
          <hr>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <p class="text-center">Total de Puntos: <?php echo $suma ?></p>

                <?php $suma;
                  $porcentaje = ($suma * 100)/25;
                ?>

                <p class="text-center"> Tu Puntaje: <?php echo $porcentaje ?> % </p>
                <?php
                  if($porcentaje > 21 && $porcentaje <= 40 ){
                    echo "<p class='text-center'> Tu nivel está entre 20 y 40 entonces seria
                    recomendable que cambiaras ciertos hábitos que te ayuden a estar bien contigo mismo </p>";
                  }

                  if ($porcentaje > 41 && $porcentaje <= 60) {
                    echo "<p class='text-center'> Tu nivel está entre 40 y 60 entonces, conoces
                    a cerca de los principios, pero tal vez no muy seguido los llevas a cabo </p>";
                  }

                  if ($porcentaje > 61 && $porcentaje <= 80) {
                    echo "<p class='text-center'> Tu nivel está entre 60 y 80 entonces es
                      evidente que llevas una vida estable y feliz </p> ";
                  }

                  if ($porcentaje > 81 && $porcentaje <= 100) {
                    echo "<p class='text-center'> Tu nivel está entre 80 y 100 entonces tienes
                    un alto grado de conocimiento y aplicación de cada uno de los Principios del
                    Decálogo de Mavila </p>";
                  }

                ?>
              </div>
            </div>
          </div>

          <hr>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div id="container" style="min-width: 400px; max-width: 400px; height: 400px; margin: 0 auto; text-align:center;"></div>
              </div>

            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-secondary" href="index.html">
            <i class="fas fa-arrow-circle-left mr-2"></i>
            Atras!
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Desarrollado</h4>
            <p class="lead mb-0">Facultad de Informática
              <br>UAQ</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Web</h4>
            <p class="lead mb-0"> Desarrollado con HTML, CSS, Bootstrap
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>

  <script type="text/javascript"
  >
    Highcharts.chart('container', {

      chart: {
        type: 'gauge',
        plotBackgroundColor: null,
        plotBackgroundImage: null,
        plotBorderWidth: 0,
        plotShadow: false
      },

      title: {
        text: 'Decálogo de Mavila'
      },

      pane: {
        startAngle: -150,
        endAngle: 150,
        background: [{
          backgroundColor: {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
              [0, '#FFF'],
              [1, '#333']
            ]
          },
          borderWidth: 0,
          outerRadius: '109%'
        }, {
          backgroundColor: {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
              [0, '#333'],
              [1, '#FFF']
            ]
          },
          borderWidth: 1,
          outerRadius: '107%'
        }, {
          // default background
        }, {
          backgroundColor: '#DDD',
          borderWidth: 0,
          outerRadius: '105%',
          innerRadius: '103%'
        }]
      },

      // the value axis
      yAxis: {
        min: 0,
        max: 200,

        minorTickInterval: 'auto',
        minorTickWidth: 1,
        minorTickLength: 10,
        minorTickPosition: 'inside',
        minorTickColor: '#666',

        tickPixelInterval: 30,
        tickWidth: 2,
        tickPosition: 'inside',
        tickLength: 10,
        tickColor: '#666',
        labels: {
          step: 2,
          rotation: 'auto'
        },
        title: {
          text: '%'
        },
        plotBands: [{
          from: 0,
          to: 120,
          color: '#55BF3B' // green
        }, {
          from: 120,
          to: 160,
          color: '#DDDF0D' // yellow
        }, {
          from: 160,
          to: 200,
          color: '#DF5353' // red
        }]
      },

      series: [{
        name: 'Decálogo de Mavila',
        data: [ <?php echo $porcentaje ?> ],
        tooltip: {
          valueSuffix: ' %'
        }
      }]

    },
    // Add some life
    function (chart) {
      if (!chart.renderer.forExport) {
        setInterval(function () {
          var point = chart.series[0].points[0],
            newVal,
            inc = Math.round((Math.random() - 0.5) * 20);

          newVal = point.y + inc;
          if (newVal < 0 || newVal > 200) {
            newVal = point.y - inc;
          }

        }, 3000);
      }
    });

  </script>

</html>
