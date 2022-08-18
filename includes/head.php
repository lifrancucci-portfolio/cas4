<?php

    $root = "/cas4/web/";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAS4 - <?php echo $page_name;?></title>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo $root; ?>css/reset.css">
  <link rel="stylesheet" href="<?php echo $root; ?>css/main.css">
  <link rel="stylesheet" href="<?php echo $root; ?>css/models.css">
  <link rel="stylesheet" href="<?php echo $root; ?>css/contact.css">

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
  <script src="<?php echo $root; ?>js/main.js" charset="utf-8"></script>
  <script src="<?php echo $root; ?>js/menu.js" charset="utf-8"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      contentLoaded();
      loadMenu();
    });
  </script>


</head>