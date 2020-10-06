<?php
include("includes/header.inc");
?>


<?php

$id = $_GET['id'];

$query = "SELECT * FROM introduce_responses";
if(isset($id)){
  $query = "SELECT * FROM introduce_responses WHERE id ='". $id ."'";
}

$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <h2 align=center>Edit Club Info</h2>
<form action = \"handlerintroduce.php\" method=\"POST\">
<table align=center>
<tr><td><b>Club name: </b>
<input type = \"text\" name=\"clubname\" value=\"{$row['clubname']}\"/><br><br>
<tr><td><b>Club password: </b>
<input type = \"password\" name=\"clubpassword\" /><br><br>
<tr><td><b>Club sponsor name: </b>
<input type = \"text\" name = \"clubsponsorname\" value = \"{$row['clubsponsorname']}\"/><br><br>
<tr><td><b>Club sponsor email: </b>
<input type = \"text\" name = \"clubsponsoremail\" value = \"{$row['clubsponsoremail']}\"/><br><br>
<tr><td><b>Club leader(s) name(s): </b>
<input type = \"text\" name = \"clubleadername\" value = \"{$row['clubleadername']}\"/><br><br>
<tr><td><b>Club's method of communication: </b>
<input type = \"text\" name = \"clubcommunication\" value = \"{$row['clubcommunication']}\"/><br><br>
<tr><td><b>Club meeting location </b>(optional): 
<input type = \"text\" name = \"clubmeetinglocation\" value = \"{$row['clubmeetinglocation']}\"/><br><br>
<tr><td><b>Club meeting description </b>(optional): 
<input type = \"text\" name = \"clubmeetingdescription\" value = \"{$row['clubmeetingdescription']}\"/><br><br>
<input type = \"hidden\" name=\"check\" value = \"update\" />
<input type = \"hidden\" name=\"id\" value = \"{$row['id']}\" />
<tr><td><div style=\"text-align:center\"><input type=\"button\" value=\"Cancel\" onclick=\"history.back()\"/>
<input type = \"submit\" value = \"Submit\" /></div></td>

</table>
 		</form>";
  }
}


?>

<?php
include("includes/footer.inc");
?>
