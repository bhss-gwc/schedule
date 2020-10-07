<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php

include("includes/common.inc");

/*
$adminName = "admin";

  if(!isset($_SESSION['club-name'])){
  	exit();
  	}
$isAdmin = ($_SESSION['club-name'] == $adminName);
$isOfficer = ($_SESSION['role'] == 'officer');

if($isOfficer){
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

 */

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

<h2 align=center>Add Club Meeting Entry</h2>
<p align=center style="color:red;">After submitting, you will be able to edit this club meeting entry by clicking "Edit" on the <a href="displaymeetings.php">club meetings table</a>.</p>
<form action = "handlermeetings.php" method="POST">
<table align=center>
<tr><td><b>Meeting date: </b>
<input type = "date" name = "meetingdate"/><br><br></td><br>
<tr><td><b>Start time: </b>
<input type = "time" name = "starttime"/><br><br></td><br>
<tr><td><b>Stop time: </b>
<input type = "time" name = "stoptime"/><br><br></td><br>
<tr><td><b>Club meeting location</b> (optional):
<input type = "text" name = "clubmeetinglocation"/><br><br></td><br>
<tr><td><b>Club meeting description</b> (optional): 
<input type = "text" name = "clubmeetingdescription"/><br><br</td><br>

<tr><td><div style="text-align:center"><input type = "submit" value = "Submit" /><br></div></td>

</table>
</form>
</body>
</html>
