<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php

include("includes/common.inc");

$adminName = "admin";

  if(!isset($_SESSION['club-name'])){
  	exit();
  	}
  $isAdmin = ($_SESSION['club-name'] == $adminName);

if($isAdmin){
?>
  <h1>Select Irregular Schedule</h1>
  <form action = handlermeetings.php method = "POST">
    <input type = "button" name = "selectschedule"/><br>
    <input type = "submit" value = "submit" /><br>
  </form>
  <br>
  <h1>Create New Irregular Schedule</h1>
  <form action = handlermeetings.php method = "POST">
    <input type = "button" name = "createschedule"/><br>
    <input type = "submit" value = "submit" /><br>
  </form>
<?php
}

// define variables and set to empty values
$meetingdateErr = $meetingtimeErr = $clubmeetinglocationErr = $clubmeetingdescriptionErr = "";
$meetingdate = $meetingtime = $clubmeetinglocation = $clubmeetingdescription = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["meetingdate"])) {
    $meetindateErr = "Meeting date is required";
  } else {
    $meetingdate = test_input($_POST["meetingdate"]);
  }

  if (empty($_POST["meetingtime"])) {
    $meetingtimeErr = "Meeting time is required";
  } else {
    $meetingtime = test_input($_POST["meetingtime"]);
  }

  if (empty($_POST["clubmeetinglocation"])) {
    $clubmeetinglocationErr = "";
  } else {
    $clubmeetinglocation = test_input($_POST["clubmeetinglocation"]);
  }

  if (empty($_POST["clubmeetingdescription"])) {
    $clubmeetingdescriptionErr = "";
  } else {
    $clubmeetingdescription = test_input($_POST["clubmeetingdescription"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Enter information about your club meeting</h2>
<p><span class="error">* required field</span></p>
<form action = "handlermeetings.php" method="POST">
Meeting Date: <br>
<input type = "date" name = "meetingdate"/><br><br>
Start Time: <br>
<input type = "time" name = "starttime"/><br><br>
Stop Time: <br>
<input type = "time" name = "stoptime"/><br><br>
Club Meeting Location (optional): <br>
<input type = "text" name = "clubmeetinglocation"/><br><br>
Club Meeting Description (optional): <br>
<input type = "text" name = "clubmeetingdescription"/><br><br>

<input type = "submit" value = "submit" /><br>

 		</form>
</body>
</html>
