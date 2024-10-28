<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thank You for Joining our Mailing List</title>
</head>
<body>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $doa = $_POST['doa'];
  

  $html_string = "<h3>Thank you Message</h3><p>Dear $name: <br><br> Thank you for contacting us. We have received your appointment request and will get back to you shortly. <br><br>The management</p>";

  echo $html_string;
?>
</body>
</html>
