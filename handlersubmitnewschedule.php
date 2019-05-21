<?php
include("includes/header.inc");

$start_array = array();
$stop_array = array();

$error=array();
if(empty($_POST['month'])){
  $error[] = 'Please enter Month';
}else{
  $month = $_POST['month'];
}
if(isset($_POST['1stperiodstart'])){

  $start_array[0] = $_POST['1stperiodstart'];
}
if(isset($_POST['1stperiodstop'])){

  $stop_array[0] = $_POST['1stperiodstop'];
}
if(isset($_POST['2ndperiodstart'])){

  $start_array[1] = $_POST['2ndperiodstart'];
}
if(isset($_POST['2ndperiodstop'])){

  $stop_array[1] = $_POST['2ndperiodstop'];
}
if(isset($_POST['srtperiodstart'])){

  $start_array[2] = $_POST['srtperiodstart'];
}
if(isset($_POST['srtperiodstop'])){

  $stop_array[2] = $_POST['srtperiodstop'];
}
if(isset($_POST['3rdperiodstart'])){

  $start_array[3] = $_POST['3rdperiodstart'];
}
if(isset($_POST['3rdperiodstop'])){

  $stop_array[3] = $_POST['3rdperiodstop'];
}
if(isset($_POST['4thperiodstart'])){

  $start_array[4] = $_POST['4thperiodstart'];
}
if(isset($_POST['4thperiodstop'])){

  $stop_array[4] = $_POST['4thperiodstop'];
}
if(isset($_POST['5thperiodstart'])){

  $start_array[5] = $_POST['5thperiodstart'];
}
if(isset($_POST['5thperiodstop'])){

  $stop_array[5] = $_POST['5thperiodstop'];
}
if(empty($_POST['date'])){
  $error[] = 'Please enter Day';
}else{
  $day = $_POST['date'];
}
if(empty($_POST['newscheduletype'])){
  $error[] = 'Please enter New Schedule Type';
}else{
  $schedule_type = $_POST['newscheduletype'];
}

echo "<pre>". print_r($error, TRUE) . "</pre>";

echo $month, $day, $schedule_type;

if(!empty($error)){
  foreach ($error as $e) {
    echo $e;
  }
echo "<p>Please try again.</p>";
exit();
}

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Month: " . $_POST['month'] . "</p>";
echo "<p>Day: " . $_POST['date'] . "</p>";
echo "<p>New Schedule Type: " . $_POST['newscheduletype'] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $month . ", " . $day . ", " . $schedule_type;

$inputstring = $inputstring . PHP_EOL;
fwrite($fileconnecter, $inputstring);
fclose($fileconnecter);

//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if(!$dbconnector){
die("DB Connection Error.". mysqli_connect_error());
} else {
     echo "<p>DB Connection was successful.</p>";
}

$query = "INSERT INTO weirdschedules (month, day, schedule_type)
VALUES ('{$month_hash[$month]}', '{$day}', '{$schedule_type}')";

echo "<p>$query</p>";
$result = mysqli_query($dbconnector, $query);
if($result){
echo "<p>Inserted data into WeirdSchedule table successfully.</p>";
}else{
echo "<p>Inserting data into WeirdSchedule table failed.</p>";
}


for($i = 0; $i < 6 ; $i++){
  if(isset($start_array[$i]) && isset($stop_array[$i]) && $start_array[$i] != "" && $stop_array[$i] != ""){
    $period = $i + 1;
    if($i == 2){
      $period = "SRT/P+";
    }
    if($i > 2){
      $period = $i;
    }
    //echo "BABO: " . $start_array[$i] . "<br/>";
    $query2 = "INSERT INTO schedulechange (schedule_type, period, start, stop)
    VALUES ('{$schedule_type}', '{$period}', '{$start_array[$i]}', '{$stop_array[$i]}')";
    echo "<p>$query2</p>";
    $result2 = mysqli_query($dbconnector, $query2);
    if($result2){
    echo "<p>Inserted data into ScheduleChange table successfully.</p>";
    }else{
    echo "<p>Inserting data into ScheduleChange table failed.</p>";
    }
  }
}


include("includes/footer.inc");
?>
