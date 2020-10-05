<?php
include("includes/db.inc");


$error=array();
if(empty($_POST['clubname'])){
  $error[] = 'Please enter Club name';
}
if(empty($_POST['clubpassword'])){
  $error[] = 'Please enter Club password';
}
echo "<pre>". print_r($error, TRUE) . "</pre>";
if(!empty($error)){
  foreach ($error as $e) {
    echo $e;
  }
echo "<p>Please try again.</p>";
exit();
}

$clubname = "";
if(isset($_POST['clubname'])){
  $clubname = $_POST['clubname'];
}

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Club Name: " . $clubname . "</p>";
echo "<p>Club Password: " . $_POST['clubpassword'] . "</p>";
echo "<p>Club Sponsor Name: " . $_POST['clubsponsorname'] . "</p>";
echo "<p>Club Sponsor Email: " . $_POST['clubsponsoremail'] . "</p>";
echo "<p>Club Meeting Location: " . $_POST['clubmeetinglocation'] . "</p>";
echo "<p>Club Meeting Description: " . $_POST['clubmeetingdescription'] . "</p>";

echo "</ul>";


$query = "INSERT INTO introduce_responses (clubname,clubpassword,clubsponsorname,clubsponsoremail,clubmeetinglocation,clubmeetingdescription,role) VALUES ('{$_POST['clubname']}', '{$_POST['clubpassword']}', '{$_POST['clubsponsorname']}', '{$_POST['clubsponsoremail']}', '{$_POST['clubmeetinglocation']}', '{$_POST['clubmeetingdescription']}', 'club')";

$query = "INSERT INTO introduce_responses (clubname,clubpassword,clubsponsorname,clubsponsoremail,clubmeetinglocation,clubmeetingdescription,role) VALUES (?, ?, ?, ?, ?, ?, 'club')";

$clean_clubname = mysqli_real_escape_string($dbconnector,$_POST['clubname']);
$clean_clubpassword = password_hash($_POST['clubpassword'], PASSWORD_DEFAULT);
echo $clean_clubpassword;
//$clean_clubpassword = mysqli_real_escape_string($dbconnector, $club_password);
$clean_clubsponsorname = mysqli_real_escape_string($dbconnector,$_POST['clubsponsorname']);
$clean_clubsponsoremail = mysqli_real_escape_string($dbconnector,$_POST['clubsponsoremail']);
$clean_clubmeetinglocation = mysqli_real_escape_string($dbconnector,$_POST['clubmeetinglocation']);
$clean_clubmeetingdescription = mysqli_real_escape_string($dbconnector,$_POST['clubmeetingdescription']);

//$user = $result->fetch_object();



if(isset($_POST['check']) and $_POST['check']=="update"){
  $query = "UPDATE introduce_responses 
    SET clubname=?,
        clubpassword=?,
        clubsponsorname=?,
        clubsponsoremail=?,
        clubmeetinglocation=?,
        clubmeetingdescription=?
    WHERE id={$_POST['id']}";
}
$stmt = $dbconnector->prepare($query);
$stmt->bind_param('ssssss', $clean_clubname, $clean_clubpassword, $clean_clubsponsorname, $clean_clubsponsoremail, $clean_clubmeetinglocation, $clean_clubmeetingdescription ); 
echo "<p>$query</p>";
// $result = mysqli_query($dbconnector, $query);
$result = $stmt->execute();
if($result == true){
  header("Location: displayclubinfo.php");
}else{
  echo "<p>Oops something is wrong. Insertion/updating failed.</p>";
}


?>

<?php
include("includes/footer.inc");
?>
