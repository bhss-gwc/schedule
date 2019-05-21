<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
$adminName = "admin";

  if(!isset($_COOKIE['club-name'])){
  	exit();
  	}
  $isAdmin = ($_COOKIE['club-name'] == $adminName);

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
?>

<h1>Form: Enter Information About The Meeting</h1>
<form action = "handlermeetings.php" method="POST">
Meeting Date: <br>
<input type = "text" name = "meetingdate"/><br><br>
Start Time: <br>
<input type = "text" name = "starttime"/><br><br>
Stop Time: <br>
<input type = "text" name = "stoptime"/><br><br>
Club Meeting Location (optional): <br>
<input type = "text" name = "clubmeetinglocation"/><br><br>
Club Meeting Description (optional): <br>
<input type = "text" name = "clubmeetingdescription"/><br><br>

<input type = "submit" value = "submit" /><br>

 		</form>
</body>
</html>
