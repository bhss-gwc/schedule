<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$error=array();
if(empty($_POST['dateofschedulechange'])){
  $error[] = 'Please enter the date of schedule change';
}
if(empty($_POST['1stperiod'])){
  $error[] = 'Please enter the time period for 1st period';
}
if(empty($_POST['2ndperiod'])){
  $error[] = 'Please enter the time period for 2nd period';
}
if(empty($_POST['3rdperiod'])){
  $error[] = 'Please enter the time period for 3rd period';
}
if(empty($_POST['4thperiod'])){
  $error[] = 'Please enter the time period for 4th period';
}
if(empty($_POST['5thperiod'])){
  $error[] = 'Please enter the time period for 5th period';
}
echo "<pre>". print_r($error, TRUE) . "</pre>";
if(!empty($error)){
  foreach ($error as $e) {
    echo $e;
  }
echo "<p>Please try again.</p>";
exit();
}

$clubname = $_COOKIE['club-name'];

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Date of schedule change: " . $_POST['dateofschedulechange'] . "</p>";
echo "<p>1st period: " . $_POST['1stperiod'] . "</p>";
echo "<p>2nd period: " . $_POST['2ndperiod'] . "</p>";
echo "<p>3rd period: " . $_POST['3rdperiod'] . "</p>";
echo "<p>4th period: " . $_POST['4thperiod'] . "</p>";
echo "<p>5th period: " . $_POST['5thperiod'] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $_POST['dateofschedulechange'] . ", " .$_POST['1stperiod'] . ", " . $_POST['2ndperiod'] . ", " . $_POST['3rdperiod'] . ", " . $_POST['4thperiod'] . ", " . $_POST['5thperiod'] . ", ";

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
$query = "INSERT INTO schedulechange (dateofschedulechange,1stperiod,2ndperiod,3rdperiod,4thperiod,5thperiod)
VALUES ('{$_POST['dateofschedulechange']}', '{$_POST['1stperiod']}', '{$_POST['2ndperiod']}', '{$_POST['3rdperiod']}', '{$_POST['4thperiod']}', '{$POST['5thperiod']}')";

echo "<p>$query</p>";
$result = mysqli_query($dbconnector, $query);
if($result){
echo "<p>Inserted data into table successfully.</p>";
}else{
echo "<p>Inserting data into table failed.</p>";
}


?>
</body>
</html>
