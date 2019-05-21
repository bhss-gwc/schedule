<?php
include("includes/header.inc");
?>

<h2>Introduce Your Club</h2>

<form action = "handlerintroduce.php" method="POST">
Club Name: <br>
	<input type = "text" name = "clubname"/><br><br>
Club Password: <br>
	<input type = "text" name = "clubpassword"/><br><br>
Club Sponsor Name: <br>
<input type = "text" name = "clubsponsorname"/><br><br>
Club Sponsor Email: <br>
<input type = "text" name = "clubsponsoremail"/><br><br>
Club Meeting Location: <br>
<input type = "text" name = "clubmeetinglocation"/><br><br>
Club Meeting Description: <br>
<input type = "text" name = "clubmeetingdescription"/><br><br>

<input type = "submit" value = "submit" /><br>

</form>

<?php

include("includes/footer.inc");
?>
