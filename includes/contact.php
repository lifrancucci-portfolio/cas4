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