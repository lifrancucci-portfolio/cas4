<?php

  // Message Vars
  $msg = '';
  $msgClass = '';

  // Check for submit
  if (filter_has_var(INPUT_POST, 'submit')) {

    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    if(!empty($email) && !empty($name) && !empty($message)) {
      // Passed
      // Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        // Failed
        $msg = 'Por favor, ingresá un email válido';
        $msgClass = 'form-invalid';

      } else {
        // Passed
        $toEmail = 'info@cas4.com.ar';
        $subject = 'Contacto de '.$name;
        $body = "<h2>Solicitud de Contacto<h2>\r\n";
        $body .="<h4>De: <p>".$name."</p>\r\n";
        $body .="<h4>Email: <p>".$email."</p>\r\n";
        $body .="<h4>Mensaje: <p>".$message."</p>\r\n";

        if(isset($_POST['send-info']) && $_POST['send-info'] == 'Yes') {
          $body .="<h4>Desea recibir la gacetilla</h4>";
        } else {
          $body .="<h4>No desea recibir la gacetilla</h4>";
        }

        // Headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .="Content-Type: text/html; charset=UTF-8\r\n";

        // Additional Headers
        $headers .= "De: " .$name. '<'.$email.'>'. "\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
          // Email Sent
          $msg = 'Tu consulta fue enviada. Gracias!';
          $msgClass = 'form-valid';
        } else {
          // Email Failed
          $msg = 'Hubo un error en el envío. Podés contactarnos directamente a info@cas4.com.ar';
          $msgClass = 'form-invalid';
        }

      }

    } else {
      // Failed
      $msg = 'Por favor, completa todos los campos';
      $msgClass = 'form-invalid';
    }

  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAS4 - HOME</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/3119857d19.js" crossorigin="anonymous"></script>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Lato -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- JAVASCRIPT -->
  <script src="js/main.js" charset="utf-8"></script>
  <script src="js/menu.js" charset="utf-8"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      contentLoaded();
      loadMenu();
    });
  </script>


</head>

<body id="body">

<!-- ************* HEADER ************* -->
  <header class="header">
    <nav class="main-nav">

      <h1 id="nav-title" class="nav-title">cas4</h1>
      <div id="mobile-menu" class="mobile-menu ">
        <i class="fa-solid fa-bars"></i>
      </div>

      <ul id="nav-ul" class="nav-ul">
        <li>
          <a href="#statement">Statement</a>
        </li>
        <li>
          <a href="#gallery">Galería</a>
        </li>
        <li>
          <a href="#models">Nuestros Modelos</a>
        </li>
        <li>
          <a href="#specs">Especificaciones Técnicas</a>
        </li>
        <li>
          <a href="#process">Proceso</a>
        </li>
        <li>
          <a href="#contact">Contacto</a>
        </li>
      </ul>
    </nav>
  </header>

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
                <a href="models/c2.html">C2</a>
              </p>
              <img class="model__img" src="./img/C2_4x.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c4.html">C4</a>
              </p>
              <img class="model__img" src="./img/C4_4x.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c5.html">C5</a>
              </p>
              <img class="model__img" src="./img/C5_4x.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c6.html">C6</a>
              </p>
              <img class="model__img" src="./img/C6_4x.png" alt="">
            </div>
          </div>

        </div>
<!-- ************************************* -->
        <div id="model__selected" class="model__selected">
          <div class="model">
            <p class="model__name">
              <a href="models/c2.html">C2</a>
            </p>
            <img class="model__img" src="./img/C2_4x.png" alt="">
          </div>
        </div>

<!-- ************************************* -->
        <div class="models-sidebar right">

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c7.html">C7</a>
              </p>
              <img class="model__img" src="./img/C7_4x.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c8.html">C8</a>
              </p>
              <img class="model__img" src="./img/C8_4x.png" alt="">
            </div>
          </div>

          <div class="model__container">
            <div class="model">
              <p class="model__name">
                <a href="models/c9.html">C9</a>
              </p>
              <img class="model__img" src="./img/C9_4x.png" alt="">
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

    <div id="contact-ol" class="contact-ol">
      <section id="contact" class="contact">

        <div class="contact-form">
          <h3 class="section-title">Contactanos</h3>

          <div class="form-container">

            <?php if($msg != ''): ?>
              <div class="<?php echo $msgClass; ?>">
                <?php echo $msg; ?>
              </div>
            <?php endif ?>


            <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="POST">

              <label for="name"></label>
              <input class="" type="text" id="name" name="name" placeholder="Nombre" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">

              <label for="email"></label>
              <input class="" type="email" id="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

              <label for="message"></label>
              <textarea id="message" name="message" placeholder="Dejanos tu mensaje..."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>

              <input class="checkbox" type="checkbox" id="send-info" name="send-info" value="Yes">
              <label class="checkbox-label" for="send-info" value="checked">Quiero recibir la gacetilla</label>

              <div class="submit">
                <input type="submit" name="submit" value="Enviar">
              </div>

            </form>
          </div>

        </div>

        <div class="social">

          <a class="brand-title" href="#">
            CAS4
          </a>

          <div class="social-links">
            <a href="https://www.instagram.com/cas4prefab/" target="_blank">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/casacuatro/" target="_blank">
              <i class="fa-brands fa-facebook-square"></i>
            </a>
          </div>

        </div>

      </section>
    </div>

  </div>

</body>

</html>
