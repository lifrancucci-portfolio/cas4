<?php

  $page_name = 'Home';

  include 'php/contact.php';
  include './includes/head.php';

?>

<body id="homepage">

<!-- ************* HEADER ************* -->
  <?php include './includes/header.php'; ?>

<!-- ************* HERO ************* -->
  <div class="hero">
    <div class="hero__img">
      <img src="./ph/cas4-hero_glossy.png" alt="Panorama">
    </div>
    <div id="hero__overlay" class="hero__overlay">
      <div class="overlay-piece">
        <p class="overlay-char">C</p>
      </div>
      <div class="overlay-piece">
        <p class="overlay-char">A</p>
      </div>
      <div class="overlay-piece">
        <p class="overlay-char">S</p>
      </div>
      <div class="overlay-piece">
        <p class="overlay-char">4</p>
      </div>
    </div>
  </div>

  <div class="page-container">

<!-- ************* STATEMENT ************* -->
    <section id="statement" class="section statement">

      <h2 class="section-title">Creamos espacios transformadores</h2>
      <p class="text-body">
        Desde 2010 diseñamos y construimos casas modulares sustentables con un alto acento en el diseño.
        <br><br>
        Casas pensadas para simplificar el proceso de construir una vivienda, minimizando el uso de energías convencionales y reduciendo la contaminación, desde su fabricación hasta su instalación en sintonía con la naturaleza.
        <br><br>
        CAS4 crea una nueva forma de concebir el vivir.
        <br><br>
      </p>

    </section>

  <!-- ************* GALERIA ************* -->
    <section id="gallery" class="section gallery">
      <div id="gallery-carousel" class="carousel">

        <button class="carousel__button carousel__button--left">
          <i class="fa-solid fa-angle-left"></i>
        </button>

        <div class="carousel__track-container">
          <ul class="carousel__track">
            <!-- ROCHA URUGUAY -->
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-4.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-2.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-3.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-5.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-6.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-7.png" alt="Test Image">
            </li>
            <li class="carousel__slide">
              <img class="carousel__image" src="./ph/ph_rocha_uy-10.png" alt="Test Image">
            </li>
            <!-- VILLA ESPIL ARG -->
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-2.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-3.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-4.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-5.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-6.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-7.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-8.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-9.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_espil_ar-10.png" alt="Test Image">
            </li>
            <!-- VILLA RUIZ ARG -->
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-1.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-2.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-3.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-4.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-5-1.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-5.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-6.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-6-1.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-8.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-8-1.png" alt="Test Image">
            </li>
            <li class="carousel__slide current-slide">
              <img class="carousel__image" src="./ph/ph_ruiz_ar-10.png" alt="Test Image">
            </li>
          </ul>
        </div>

        <button class="carousel__button carousel__button--right">
          <i class="fa-solid fa-angle-right"></i>
        </button>

      </div>
    </section>
    <!-- ----------------------- -->

  <!-- ************* MODELOS ************* -->
    <section id="models" class="section models">
      <h2 class="section-title">Nuestros Modelos</h2>

      <div class="models-display">
        <div class="models-sidebar left">

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c2.php">C2</a>
              </p>
              <img class="model__img" src="./img/C2.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c4.php">C4</a>
              </p>
              <img class="model__img" src="./img/C4.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c5.php">C5</a>
              </p>
              <img class="model__img" src="./img/C5.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c6.php">C6</a>
              </p>
              <img class="model__img" src="./img/C6.png" alt="">
            </div>
          </div>

        </div>
<!-- ************************************* -->
        <div id="model__selected" class="model__selected">
          <div class="model">
            <p class="model__name">
              <a href="models/c2.php">C2</a>
            </p>
            <img class="model__img" src="./img/C2.png" alt="">
          </div>
        </div>

<!-- ************************************* -->
        <div class="models-sidebar right">

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c7.php">C7</a>
              </p>
              <img class="model__img" src="./img/C7.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c8.php">C8</a>
              </p>
              <img class="model__img" src="./img/C8.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c9.php">C9</a>
              </p>
              <img class="model__img" src="./img/C9.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </section>

  <!-- ******** ESPECIFICACIONES ******** -->

    <section id="specs" class="section specs">
      <div class="specs-section">
        <h2 class="section-title">Especificaciones Técnicas</h2>
        <p>
          <span>MATERIALES</span> <br>
          Carpinterías de PVC con vidrio DVH <br>
          Revestimiento interior multilaminado fenólico. Acabado Cetol Cristal <br>
          Revestimiento exterior chapa miniwave color  negro (consultar por otras opciones de color)<br>
          Cubierta inclinada de chapa acanalada prepintada color negro <br>
          Aislación: bastidor de madera con lana de vidrio
          <br><br>
        </p>
        <div class="materials">
          <div class="material">
            <img src="./img/ph_fenolico.jpg" alt="Material: Fenólico">
          </div>
          <div class="material">
            <img src="./img/ph_quadroline1.jpg" alt="Material: Chapa Quadroline">
          </div>
          <div class="material">
            <img src="./img/ph_vidrio2.jpg" alt="Material: Vidrio DVH">
          </div>
        </div>
      </div>
      <div class="specs-section">
        <p>
          <span>TAMAÑO x MÓDULO</span> <br>
          2.40m x4.80mx2.60m(h)<br>
          Una casa se puede componer de la cantidad de módulos que el cliente considere <br>
          Contamos con modelos estándar de casas
          <br><br>

          <span>ESTRUCTURA</span> <br>
          Estructura de madera certificada
          <br><br>

          <span>FUNDACIONES</span> <br>
          Fundaciones de hormigón armado
          <br><br>
        </p>

        <div class="modules">
          <video muted="" autoplay="" loop="">
            <source src="./video/animacion.mp4" type="video/mp4">
          </video>
        </div>
      </div>

    </section>



    <!-- *********** GALERIA 2 *********** -->
      <section id="process" class="section gallery">
        <div id="backstage-carousel" class="carousel">

          <button class="carousel__button carousel__button--left">
            <i class="fa-solid fa-angle-left"></i>
          </button>

          <div class="carousel__track-container">
            <ul class="carousel__track">
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-1.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-3.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-4.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-5.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-6.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-7.png" alt="Test Image">
              </li>
              <li class="carousel__slide current-slide">
                <img class="carousel__image" src="./ph/backstage-carousel-1.png" alt="Test Image">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./ph/backstage-carousel-2.png" alt="Test Image">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./ph/backstage-carousel-3.png" alt="Test Image">
              </li>
              <li class="carousel__slide">
                <img class="carousel__image" src="./ph/backstage-carousel-4.png" alt="Test Image">
              </li>
            </ul>
          </div>

          <button class="carousel__button carousel__button--right">
            <i class="fa-solid fa-angle-right"></i>
          </button>

        </div>
      </section>
      <!-- ----------------------- -->

  <!-- *********** VIDEO ************* -->
    <section id="video" class="video">
      <video muted="" autoplay="" loop="">
        <source src="./video/bg.mp4" type="video/mp4">
      </video>
    </section>

  <!-- *********** CONTACTO ************* -->

    <div id="main-contact" class="main-contact">
      <?php include './includes/contact.php' ?>
    </div>

  </div>

</body>

<?php include './includes/closing.php'; ?>
