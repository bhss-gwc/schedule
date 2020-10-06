<?php
include("includes/header.inc");
?>


<?php

$id = $_GET['id'];

$query = "SELECT * FROM meetings";
if(isset($id)){
  $query = "SELECT * FROM meetings WHERE id ='". $id ."'";
}

$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <h2 align=center>Edit Club Meeting</h2>
<form action = \"handlermeetings.php\" method=\"POST\">
<table align=center>
<tr><td><b>Meeting date: </b>
<input type = \"date\" name=\"meetingdate\" value=\"{$row['meetingdate']}\"/><br><br></td>
<tr><td><b>Start Time: </b>
<input type = \"time\" name=\"starttime\" value=\"{$row['starttime']}\"/><br><br>
<tr><td><b>Stop Time: </b>
<input type = \"time\" name = \"stoptime\" value = \"{$row['stoptime']}\"/><br><br>
<tr><td><b>Club Meeting Location</b>  (optional):
<input type = \"text\" name = \"clubmeetinglocation\" value = \"{$row['clubmeetinglocation']}\"/><br><br>
<tr><td><b>Club Meeting Description</b> (optional):
<input type = \"text\" name = \"clubmeetingdescription\" value = \"{$row['clubmeetingdescription']}\"/><br><br>

<input type = \"hidden\" name=\"check\" value = \"update\" />
<input type = \"hidden\" name=\"id\" value = \"{$row['id']}\" />
<tr><td><div style=\"text-align:center\"><input type=\"button\" value=\"Cancel\" onclick=\"history.back()\"/>
<input type = \"submit\" value = \"Submit\" /><br></div></td>

</table>
 		</form>";
  }
}


?>

<?php
include("includes/footer.inc");
?>
