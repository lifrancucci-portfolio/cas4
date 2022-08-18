<?php 

  $page_name = 'C5';
  $modules = '5 módulos';

  include '../includes/head.php';

?>

<body>

<!-- ************* HEADER ************* -->
<?php include '../includes/header.php'; ?>

<div class="page-container">
<!-- ************* SIDEBAR ************* -->
  <?php include '../includes/sidebar.php'; ?>

  <!-- ************* GALERIA MODELO ************* -->
  <section class="model-gallery">

    <!-- <div class="model-gallery__renders">
      <img src="" alt="">
    </div> -->

    <div class="model-gallery__blueprints">
      <img src="../bp/bp_c5.png" alt="">
    </div>

    <!-- <div class="model-gallery__pictures">
      <img src="" alt="">
      <img src="" alt="">
    </div> -->

  </section>

  <!-- ************* CONTACTO ************* -->
  <div id="contact" class="model-contact">
    <?php include '../includes/contact.php' ?>
  </div>

</div>
</body>

<?php include '../includes/closing.php'; ?>