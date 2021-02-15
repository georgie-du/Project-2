<?php

  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['textarea'];

$mailTo = "contact@georgidev.me";
$headers = "From: ".$mailFrom;
$txt = "You have recceived an email from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html");

?>