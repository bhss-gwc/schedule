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
    <h2>Edit club meeting</h2>
<p><span class=\"error\">* required field</span></p>
<form action = \"handlermeetings.php\" method=\"POST\">
Meeting Date: <br>
<input type = \"date\" name=\"meetingdate\" value=\"{$row['meetingdate']}\"/><br><br>
Start Time: <br>
<input type = \"time\" name=\"starttime\" value=\"{$row['starttime']}\"/><br><br>
Stop Time: <br>
<input type = \"time\" name = \"stoptime\" value = \"{$row['stoptime']}\"/><br><br>
Club Meeting Location (optional): <br>
<input type = \"text\" name = \"clubmeetinglocation\" value = \"{$row['clubmeetinglocation']}\"/><br><br>
Club Meeting Description (optional): <br>
<input type = \"text\" name = \"clubmeetingdescription\" value = \"{$row['clubmeetingdescription']}\"/><br><br>

<input type = \"hidden\" name=\"check\" value = \"update\" /><br>
<input type = \"hidden\" name=\"id\" value = \"{$row['id']}\" /><br>
<input type=\"button\" value=\"Cancel\" onclick=\"history.back()\"/>
<input type = \"submit\" value = \"Submit\" /><br>

 		</form>";
  }
}


?>

<?php
include("includes/footer.inc");
?>
