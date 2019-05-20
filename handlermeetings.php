<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

if(!empty($_POST['selectschedule'])){
  header( 'Location: http://localhost/submitschedulechange.php' );
}

if(!empty($_POST['createschedule'])){
  header( 'Location: http://localhost/submitnewschedule.php' );
}

$error=array();
if(empty($_POST['meetingdate'])){
  $error[] = 'Please enter Meeting Date';
}
if(empty($_POST['starttime'])){
  $error[] = 'Please enter Start Time';
}
if(empty($_POST['stoptime'])){
  $error[] = 'Please enter Stop Time';
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
echo "<p>Club Name: " . $clubname . "</p>";
echo "<p>Meeting Date: " . $_POST['meetingdate'] . "</p>";
echo "<p>Start Time: " . $_POST['starttime'] . "</p>";
echo "<p>Stop Time: " . $_POST['stoptime'] . "</p>";
echo "<p>Club Meeting Location: " . $_POST['clubmeetinglocation'] . "</p>";
echo "<p>Club Meeting Description: " . $_POST['clubmeetingdescription'] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $_POST['meetingdate'] . ", " .$_POST['starttime'] . ", " . $_POST['stoptime'] . ", " . $_POST['clubmeetinglocation'] . ", " . $_POST['clubmeetingdescription'] . ", ";

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
$query = "INSERT INTO meetings (meetingdate,starttime,stoptime,clubmeetinglocation,clubmeetingdescription,clubname)
VALUES ('{$_POST['meetingdate']}', '{$_POST['starttime']}', '{$_POST['stoptime']}', '{$_POST['clubmeetinglocation']}', '{$_POST['clubmeetingdescription']}', '$clubname')";

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
