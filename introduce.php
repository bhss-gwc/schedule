<?php
include("includes/common.inc");
?>

<h2>Introduce Your Club</h2>
<p>This form should only be filled out once for each club. Typically the club leader should fill this out.<br>
The club name and club password that you enter will be the username and password used in the club login.</p>
<form action = "handlerintroduce.php" method="POST">
Club Name: <br>
	<input type = "text" name = "clubname"/><br><br>
Club Password: <br>
	<input type = "password" name = "clubpassword"/><br><br>
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
