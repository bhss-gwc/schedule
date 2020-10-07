<?php
include("includes/db.inc");
include("includes/common.inc");

$error=array();
if(empty($_POST['clubname'])){
  //  $error[] = 'Please enter Club name<br>';
		echo "<br><br><p align=center><font color=\"red\">Please enter Club name.</font></p>";
}
if(empty($_POST['clubpassword']) and !isset($_POST['check'])){
    // $error[] = 'Please enter Club password<br>';
		echo "<br><br><p align=center><font color=\"red\">Please enter Club password.</font></p>";    
}
// echo "<pre>". print_r($error, TRUE) . "</pre>";
if(!empty($error)){
  foreach ($error as $e) {
    echo $e;
  }
echo "<p>Please try again.</p>";
exit();
}

$clubname = "";
if(isset($_POST['clubname']) && $_POST['clubname'] != ""){
  $clubname = $_POST['clubname'];
  $_SESSION['club-name'] = $clubname;
}

/*
echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>Club Name: " . $clubname . "</p>";
echo "<p>Club Password: " . $_POST['clubpassword'] . "</p>";
echo "<p>Club Sponsor Name: " . $_POST['clubsponsorname'] . "</p>";
echo "<p>Club Sponsor Email: " . $_POST['clubsponsoremail'] . "</p>";
echo "<p>Club Leader Name: " . $_POST['clubleadername'] . "</p>";
echo "<p>Club's method of communication: " . $_POST['clubcommunication'] . "</p>";
echo "<p>Club Meeting Location: " . $_POST['clubmeetinglocation'] . "</p>";
echo "<p>Club Meeting Description: " . $_POST['clubmeetingdescription'] . "</p>";

echo "</ul>";
 */

$query = "INSERT INTO introduce_responses (clubname,clubpassword,clubsponsorname,clubsponsoremail,clubleadername,clubcommunication,clubmeetinglocation,clubmeetingdescription,role) VALUES ('{$_POST['clubname']}', '{$_POST['clubpassword']}', '{$_POST['clubsponsorname']}', '{$_POST['clubsponsoremail']}', '{$_POST['clubleadername']}', '{$_POST['clubcommunication']}', '{$_POST['clubmeetinglocation']}', '{$_POST['clubmeetingdescription']}', 'club')";

$query = "INSERT INTO introduce_responses (clubname,clubpassword,clubsponsorname,clubsponsoremail,clubleadername,clubcommunication,clubmeetinglocation,clubmeetingdescription,role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'club')";

$clean_clubname = mysqli_real_escape_string($dbconnector,$_POST['clubname']);
$clean_clubpassword = password_hash($_POST['clubpassword'], PASSWORD_DEFAULT);
// echo $clean_clubpassword;
//$clean_clubpassword = mysqli_real_escape_string($dbconnector, $club_password);
$clean_clubsponsorname = mysqli_real_escape_string($dbconnector,$_POST['clubsponsorname']);
$clean_clubsponsoremail = mysqli_real_escape_string($dbconnector,$_POST['clubsponsoremail']);
$clean_clubleadername = mysqli_real_escape_string($dbconnector,$_POST['clubleadername']);
$clean_clubcommunication = mysqli_real_escape_string($dbconnector,$_POST['clubcommunication']);
$clean_clubmeetinglocation = mysqli_real_escape_string($dbconnector,$_POST['clubmeetinglocation']);
$clean_clubmeetingdescription = mysqli_real_escape_string($dbconnector,$_POST['clubmeetingdescription']);

//$user = $result->fetch_object();


$check = 0;

if(isset($_POST['check']) and $_POST['check']=="update"){
  $check = 1;
  if(isset($_POST['clubpassword']) and $_POST['clubpassword'] != ""){
    $query = "UPDATE introduce_responses 
      SET clubname=?,
          clubpassword=?,
          clubsponsorname=?,
          clubsponsoremail=?,
          clubleadername=?,
          clubmeetingdescription=?
      WHERE id={$_POST['id']}";
  }else{
    $query = "UPDATE introduce_responses 
      SET clubname=?,
          clubsponsorname=?,
          clubsponsoremail=?,
          clubleadername=?,
          clubcommunication=?,
          clubmeetinglocation=?,
          clubmeetingdescription=?
      WHERE id={$_POST['id']}";
  }
}


$stmt = $dbconnector->prepare($query);
if($stmt == false){
  echo "Statement is not prepared";
}else{
  echo "Statement is prepared";
}


if(isset($_POST['clubpassword']) and $_POST['clubpassword'] != ""){
  if(!$stmt->bind_param('ssssssss', $clean_clubname, $clean_clubpassword, $clean_clubsponsorname, $clean_clubsponsoremail, $clean_clubleadername, $clean_clubcommunication, $clean_clubmeetinglocation, $clean_clubmeetingdescription )){
    echo "<br>Binding error";
  }
}else{
  if(!$stmt->bind_param('sssssss', $clean_clubname, $clean_clubsponsorname, $clean_clubsponsoremail, $clean_clubleadername, $clean_clubcommunication, $clean_clubmeetinglocation, $clean_clubmeetingdescription )){
    echo "<br>Binding error";
  }
}
// echo "<p>$query</p>";
// $result = mysqli_query($dbconnector, $query);
// $result = $stmt->execute();

if($stmt->execute()){
  /*
  if($check == 1){
    echo "Your club information has been successfully updated.";
  }else{
    echo "Your club information has been successfully added.";
  }
   */
  header("Location: displayclubinfo.php");
} else{
  echo "<p>Oops something is wrong. Insertion/updating failed.</p>" . $stmt->error;
}


?>

<?php
include("includes/footer.inc");
?>
