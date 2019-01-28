<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
$error=array();
if (empty($_POST['clubsponsorname'])){
	$error[] = 'Please enter Club Sponsor Name';
}
if(empty($_POST['clubsponsoremail'])){
	$error[] = 'Please enter Club Sponsor Email';
}
if(empty($_POST['clubmeetinglocation'])){
	$error[] = 'Please enter Club Meeting Location';
}
if(empty($_POST['clubmeetingdescription'])){
	$error[] = 'Please enter Club Default Meeting Description';
}
echo "<pre>". print_r($error, TRUE) . "</pre>";
if(isset($error)){
	foreach $e in $error {
		echo “<p>$e</p>”;
	}
echo “<p>Please try again.</p>”;
exit();
}

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Club Name: " . $_POST['clubname'] . "</p>";
echo "<p>Club Sponsor Name: " . $_POST['clubsponsorname'] . "</p>";
echo "<p>Club Sponsor Email: " . $_POST['clubsponsoremail'] . "</p>";
echo "<p>Club Default Meeting Location: " . $_POST['clubdefaultmeetinglocation'] . "</p>";
echo "<p>Club Default Meeting Description: " . $_POST['clubdefaultmeetingdescription'] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $_POST['clubname'] . ", " . $_POST['clubsponsorname'] . ", " .  $_POST['clubsponsoremail'] . ", " . $_POST['clubdefaultmeetinglocation'] . ", " . $_POST['clubdefaultmeetingdescription'] . ", ";

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
#ClubName,ClubSponsorName,ClubSponsorInfo,ClubDefaultMeetingLocation,ClubDefaultMeetingDescription
$query = "INSERT INTO introduce_responses (clubname,clubsponsorname,clubsponsoremail,clubdefaultmeetinglocation,clubdefaultmeetingdescription)
VALUES ('{$_POST['clubname']}', '{$_POST['clubsponsorname']}', '{$_POST['clubsponsoremail']}', '{$_POST['clubdefaultmeetinglocation']}', '{$_POST['clubdefaultmeetingdescription']}')";

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
