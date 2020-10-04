<?php
include("includes/common.inc");

if(!empty($_POST['selectschedule'])){
  header( 'Location: submitschedulechange.php' );
}

if(!empty($_POST['createschedule'])){
  header( 'Location: submitnewschedule.php' );
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

$clubname = $_SESSION['club-name'];

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
$password = "root";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if(!$dbconnector){
die("DB Connection Error.". mysqli_connect_error());
} else {
 			 echo "<p>DB Connection was successful.</p>";
}
$query = "INSERT INTO meetings (meetingdate,starttime,stoptime,clubmeetinglocation,clubmeetingdescription,clubname)
VALUES ('{$_POST['meetingdate']}', '{$_POST['starttime']}', '{$_POST['stoptime']}', '{$_POST['clubmeetinglocation']}', '{$_POST['clubmeetingdescription']}', '$clubname')";

if(isset($_POST['check']) and $_POST['check']=="update"){
  $query = "UPDATE meetings
    SET meetingdate='{$_POST['meetingdate']}',
        starttime='{$_POST['starttime']}',
        stoptime='{$_POST['stoptime']}',
        clubmeetinglocation='{$_POST['clubmeetinglocation']}',
        clubmeetingdescription='{$_POST['clubmeetingdescription']}',
        clubname='$clubname'
    WHERE id={$_POST['id']}";
}
echo "<p>$query</p>";
$result = mysqli_query($dbconnector, $query);
if($result){
    header("Location: displaymeetings.php");
}else{
echo "<p>Oops something is wrong. Insertion/updating failed.</p>";
}


?>

<?php
include("includes/footer.inc");
?>
