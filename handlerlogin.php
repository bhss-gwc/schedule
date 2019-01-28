<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$clubname = $_POST['clubname'];
$clubpassword = $_POST['clubpassword'];

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

$query = "SELECT clubname FROM introduce_responses WHERE clubname = \"$clubname\" AND clubpassword = \"$clubpassword\"";
  //echo "$query";

$result = mysqli_query($dbconnector, $query);

if(mysqli_num_rows($result) > 0){
	#This should redirect to the meetings form and automatically tell the meetings form which club it is

  $cookie_name = "club-name";
  $cookie_value = $clubname;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

  header( 'Location: http://localhost/meetings.php' );
}else{
	echo "<p><font color=\"red\">Either the club name or password you entered is incorrect.</font></p>";
}

?>
</body>
</html>
