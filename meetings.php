<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
  if(!isset($_COOKIE['club-name'])){
  	exit();
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
