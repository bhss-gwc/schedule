<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php

  $error=array();
  if(empty($_POST['clubname'])){
  	$error[] = 'Please enter Club Name';
  }
  if(empty($_POST['clubpassword'])){
  	$error[] = 'Please enter Club Password';
  }
  if(empty($_POST['clubsponsorname'])){
  	$error[] = 'Please enter Club Sponsor Name';
  }
  if(empty($_POST['clubsponsoremail'])){
  	$error[] = 'Please enter Club Sponsor Email';
  }
  if(empty($_POST['clubmeetinglocation'])){
  	$error[] = 'Please enter Club Meeting Location';
  }
  if(empty($_POST['clubmeetingdescription'])){
  	$error[] = 'Please enter Club Meeting Description';
  }
  echo "<pre>". print_r($error, TRUE) . "</pre>";
  if(!empty($error)){
  	foreach ($error as $e) {
  		echo $e;
  	}
  echo "<p>Please try again.</p>";
  exit();
  }

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Club Name: " . $_POST['clubname'] . "</p>";
echo "<p>Club Password: " . $_POST['clubpassword'] . "</p>";
echo "<p>Club Sponsor Name: " . $_POST['clubsponsorname'] . "</p>";
echo "<p>Club Sponsor Email: " . $_POST['clubsponsoremail'] . "</p>";
echo "<p>Club Meeting Location: " . $_POST['clubmeetinglocation'] . "</p>";
echo "<p>Club Meeting Description: " . $_POST['clubmeetingdescription'] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $_POST['clubname'] . ", " . $_POST['clubpassword'] . ", " . $_POST['clubsponsorname'] . ", " .  $_POST['clubsponsoremail'] . ", " . $_POST['clubmeetinglocation'] . ", " . $_POST['clubmeetingdescription'] . ", ";

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
#ClubName,ClubPassword, ClubSponsorName,ClubSponsorInfo,ClubMeetingLocation,ClubMeetingDescription
$query_one = "SELECT clubname FROM introduce_responses WHERE clubname='{$_POST['clubname']}'";
$result_one = mysqli_query($dbconnector, $query_one);
  echo "<p>$query_one</p>";


if(mysqli_num_rows($result_one) > 0){
	  echo "<p>That club name is already taken. Please try again.</p>";
  	  exit();
}

$query2 = "INSERT INTO introduce_responses (clubname,clubpassword, clubsponsorname,clubsponsoremail,clubmeetinglocation,clubmeetingdescription)
VALUES ('{$_POST['clubname']}', '{$_POST['clubpassword']}', '{$_POST['clubsponsorname']}', '{$_POST['clubsponsoremail']}', '{$_POST['clubmeetinglocation']}', '{$_POST['clubmeetingdescription']}')";

echo "<p>$query2</p>";
$result2 = mysqli_query($dbconnector, $query2);
if($result2){
  echo "<p>Inserted data into table successfully.</p>";
}else{
  echo "<p>Inserting data into table failed.</p>";
}


?>
</body>
</html>
