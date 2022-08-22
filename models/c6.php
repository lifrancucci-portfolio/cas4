<?php 

  $page_name = 'C6';
  $modules = '6 módulos';

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

    <div class="model-gallery__renders">
      <img src="../renders/frame_c6.jpg" alt="">
      <img src="../renders/frame_c6-2.jpg" alt="">
    </div>

    <div class="model-gallery__blueprints">
      <img src="../bp/bp_c6.png" alt="">
    </div>

    <div class="model-gallery__pictures">
      <img src="../ph/ph_frame_c6-1.png" alt="">
      <img src="../ph/ph_frame_c6-2.png" alt="">
      <img src="../ph/ph_frame_c6-3.png" alt="">
    </div>

  </section>

  <!-- ************* CONTACTO ************* -->
  <div id="contact" class="model-contact">
    <?php include '../includes/contact.php' ?>
  </div>

</div>
</body>

<?php include '../includes/closing.php'; ?>