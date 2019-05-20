<?php
include("includes/header.inc");

  if(!isset($_COOKIE['club-name'])){
  	//exit();
  	}


//connect to database
//MAKE THE FILE PRETTIER
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

$currentmonth = date("n");
$currentdate = date("j");

?>

<h2>Submit a Schedule Change</h2>
Select the month and day you are setting the schedule for:
<form action = "handlersubmitschedulechange.php" method="POST">

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


echo '<p>
  Choose which schedule to apply for that day:
</p>';


#check if this database check should be moved to handler
  $isEmpty  = true;
  $q = "SELECT schedule_type FROM schedulechange GROUP BY schedule_type";
  $r = @mysqli_query ($dbconnector, $q);
  if($r){
    if(mysqli_num_rows($r) > 0){
      $isEmpty  = false;
      echo '<SELECT name = "scheduletype">';
		  while ($row = mysqli_fetch_assoc($r)) {
			   echo "<option value={$row['schedule_type']}>{$row['schedule_type']}</option>";
		  }

		  echo '</select>';
		  mysqli_free_result ($r);
    } else {
	   	echo '<p class="bg-danger">There are currently no schedules available to choose from.</p>';
  	}
  }

  ?>



<br><br>Submit when finished.<br><br>
<input type = "submit" value = "submit" /><br>
</form>

<?php
include("includes/footer.inc");
?>
