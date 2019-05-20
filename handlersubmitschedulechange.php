<?php
include("includes/header.inc");


$error=array();
if(empty($_POST['month'])){
  $error[] = 'Please enter Month';
}else{
  $month = $_POST['month'];
}
if(empty($_POST['date'])){
  $error[] = 'Please enter Day';
}else{
  $day = $_POST['date'];
}
if(empty($_POST['scheduletype'])){
  $error[] = 'Please enter Schedule Type';
}else{
  $schedule_type = $_POST['scheduletype'];
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
echo "<p>Schedule Type: " . $_POST['scheduletype'] . "</p>";

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
echo "<p>Inserted data into table successfully.</p>";
}else{
echo "<p>Inserting data into table failed.</p>";
}



include("includes/footer.inc");
?>
