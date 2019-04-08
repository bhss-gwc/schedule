<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
  if(!isset($_COOKIE['club-name'])){
  	//exit();
  	}


//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

$currentmonth = date("n");
$currentdate = date("j");

?>

<h2>Select the date and month you are setting the schedule for.</h2>

<?php
  echo '<SELECT name = "month">';
  if($currentmonth <= 8 and $currentmonth > 5){
    echo '<option value = "08">Aug</option>';
  }
  if($currentmonth <= 9 and $currentmonth > 5){
    echo '<option value = "09">Sep</option>';
  }
  if($currentmonth <= 10 and $currentmonth > 5){
    echo '<option value = "10">Oct</option>';
  }
  if($currentmonth <= 11 and $currentmonth > 5){
    echo '<option value = "11">Nov</option>';
  }
  if($currentmonth <= 12 and $currentmonth > 5){
    echo '<option value = "12">Dec</option>';
  }
  if($currentmonth <= 1){
    echo '<option value = "01">Jan</option>';
  }
  if($currentmonth <= 2){
    echo '<option value = "02">Feb</option>';
  }
  if($currentmonth <= 3){
    echo '<option value = "03">Mar</option>';
  }
  if($currentmonth <= 4){
    echo '<option value = "04">Apr</option>';
  }
  if($currentmonth <= 5){
    echo '<option value = "05">May</option>';
  }


echo '</select>';

echo '<SELECT name = "date">';
  for ($i = 1; $i < 32; $i++){
    echo '<option value = "' . $i . '">' . $i . '</option>';
  }
echo '</select>';
?>

<h2>Choose which schedule to apply for that day</h2>

<?php
echo '<SELECT name = "scheduletype">';//finish doing this select query/! defing $dbc-->
  $q = "SELECT schedule_type FROM schedule_change GROUP BY schedule_type";
  $r = @mysqli_query ($dbconnector, $q);
  if($r){
    if(mysqli_num_rows($r) > 0){
      echo '<select>';
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
			echo "<option value={$row['name']}>{$row['name']}</option>";
		}
		echo '</select>';
		mysqli_free_result ($r);
    }
  } else {
		echo '<p class="bg-danger">There are currently no schedules available to choose from</p>';
	}

?>
<h2>If you wish to create an entirely new schedule, click the button.</h2>
<form action = "handlermeetings.php" method="POST">
<!--Meeting Date: <br>
<input type = "text" name = "datemonth"/><br><br>
<input type = "text" name = "datemonth"/><br><br></!-->
<input type="radio" name="newornot"/>
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
