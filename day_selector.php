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

<h1>Form: Enter the date and selected schedule</h1>
<form action = "handlermeetings.php" method="POST">
Meeting Date: <br>
<input type = "text" name = "date"/><br><br>
<input type="radio" name="newornot"
<?php if (isset($newornot)) echo "checked";?>

<select>
  <option name = "">Regular</option>
</option>


<input type = "submit" value = "submit" /><br>

 		</form>
    <?php
    if(isset($newornot)){
    $cookie_name = "newschedule";
    $cookie_value = "yes";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    header( 'Location: http://localhost/schedule/schedulechange.php' );
    }
    ?>
</body>
</html>
