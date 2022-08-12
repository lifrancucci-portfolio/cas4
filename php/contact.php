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
