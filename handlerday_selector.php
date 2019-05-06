<!DOCTYPE html>
<html>
<head>
</head>
<body>

$newornot = $_POST['newornot'];
$month = $_POST['month'];
$date = $_POST['date'];
$type = $_POST['scheduletype'];

<?php
//connect to database
//MAKE THE FILE PRETTIER
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

  if(isset($newornot)){
  $cookie_name = "newschedule";
  $cookie_value = "yes";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  header( 'Location: http://localhost/schedule/schedulechange.php' );
  }
  if(!isset($newornot)){
    $q = "SELECT schedule_type FROM weird_schedules WHERE month = $month AND day = $date";
    $r = @mysqli_query ($dbconnector, $q);
    if($r){
      if(mysqli_num_rows($r) > 0){
        $newQ = "UPDATE weird_schedules SET schedule_type = $type WHERE month = $month AND day = $date";
      }else{
        $newQ = "INSERT INTO weird_schedules (schedule_type, month, day) VALUES ($type, $month, $day)";
      }
    }
    $r = @mysqli_query ($dbconnector, $q);
    if(!$r){
      echo '<p class="bg-danger">There was an error trying to update the schedule.</p>';
    }

  }

?>


</body>
</html>
