<?php

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != '') {

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['subject'];

    if(isset($_POST['send-info'] == 'checked')) {
      $sendInfo = "Enviar gacetilla";
    }

    $mailTo = 'lifrancucci@gmail.com';
    $headers = "De: ".$mailFrom;
    $txt = "Recibiste un correo de " .$name.".\r\n\n".$message;

    // mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.html?mailsend")

    $message_sent = true;

  }

}
?>
