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
    <h2>Edit club meeting</h2>
<p><span class=\"error\">* required field</span></p>
<form action = \"handlerintroduce.php\" method=\"POST\">
Club Name: <br>
<input type = \"text\" name=\"clubname\" value=\"{$row['clubname']}\"/><br><br>
Club Password: <br>
<input type = \"password\" name=\"clubpassword\" /><br><br>
Club Sponsor Name: <br>
<input type = \"text\" name = \"clubsponsorname\" value = \"{$row['clubsponsorname']}\"/><br><br>
Club Sponsor Email: <br>
<input type = \"text\" name = \"clubsponsoremail\" value = \"{$row['clubsponsoremail']}\"/><br><br>
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
