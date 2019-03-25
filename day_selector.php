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

$currentmonth = ;//use php query thing
$currentdate = ;//use php query other thing

echo <SELECT name = "month">
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
  }if($currentmonth <= 6){
    echo '<option value = "06">Jun</option>';
  }
  if($currentmonth <= 7){
    echo '<option value = "07">Jul</option>';
  }
  if($currentmonth <= 8){
    echo '<option value = "08">Aug</option>';
  }
  if($currentmonth <= 9){
    echo '<option value = "09">Sep</option>';
  }
  if($currentmonth <= 10){
    echo '<option value = "10">Oct</option>';
  }
  if($currentmonth <= 11){
    echo '<option value = "11">Nov</option>';
  }
  if($currentmonth <= 12){
    echo '<option value = "12">Dec</option>';
  }

</select>

echo <SELECT name = "date">
  for ($i = 0; $i < 32; $i++){
    echo '<option value = $i>$i</option>';
  }
</select>

echo <SELECT name = "scheduletype"><!--finish doing this select query/!-->
  $schedulelist = SELECT schedule_type FROM schedule_change
  foreach($schedule in $schedulelist){

    GROUP BY schedule_type;
;
    echo '<option value = $schedulename>$schedulename</option>';
  }
<h1>Form: Enter the date and selected schedule</h1>
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
