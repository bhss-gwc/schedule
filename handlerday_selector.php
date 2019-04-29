<!DOCTYPE html>
<html>
<head>
</head>
<body>

$newornot = $_POST['newornot'];

<?php
  if(isset($newornot)){
  $cookie_name = "newschedule";
  $cookie_value = "yes";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header( 'Location: http://localhost/schedule/schedulechange.php' );

?>


</body>
</html>
