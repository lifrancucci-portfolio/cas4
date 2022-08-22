<?php 
  $page_name = 'C2';
  $modules = '2 módulos';

  include '../includes/head.php';
?>

<body>

<!-- ************* HEADER ************* -->
<?php include '../includes/header.php'; ?>

<!-- ************* SIDEBAR ************* -->
<div class="page-container">

<?php include '../includes/sidebar.php'; ?>

<!-- ************* GALERIA MODELO ************* -->
  <section class="model-gallery">

    <div class="model-gallery__renders">
      <img src="../renders/frame_c2.jpg" alt="">
    </div>

    <div class="model-gallery__blueprints">
      <img src="../bp/bp_c2.jpg" alt="">
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
