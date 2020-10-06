<?php
include("includes/common.inc");
?>

<h2 align=center>Introduce Your Club</h2>
<p align=center style="color:red;">This form should only be filled out <b>once for each club</b>. Typically the club leader should fill this out.<br>
The club name and club password that you enter will be the username and password used in the <b>club login</b>.<br>
After submitting, you will be able to edit this club info by clicking "Edit" on the club info table.</p>
<form action = "handlerintroduce.php" method="POST">
<table align=center>
<tr><td><b>Club name</b> (ex: Chess Club): 
	<input type = "text" name = "clubname"/><br><br>
<tr><td><b>Club password</b> (choose a password you can share with future club leaders): 
	<input type = "password" name = "clubpassword"/><br><br>
<tr><td><b>Club sponsor name</b> (ex: Mrs. Johnson): 
<input type = "text" name = "clubsponsorname"/><br><br>
<tr><td><b>Club sponsor email:</b> 
<input type = "text" name = "clubsponsoremail"/><br><br>
<tr><td><b>Club leader(s) name(s):</b> 
<input type = "text" name = "clubleadername"/><br><br>
<tr><td><b>Club's method of communication</b> (ex: email, GroupMe link, Discord link): 
<input type = "text" name = "clubcommunication"/><br><br>
<tr><td><b>Club meeting location:</b> 
<input type = "text" name = "clubmeetinglocation"/><br><br>
<tr><td><b>Club meeting description</b> (optional): 
<input type = "text" name = "clubmeetingdescription"/><br><br>

<!--<input type="button" value="Cancel" onclick=\"history.back()\"/>-->
<tr><td><div style="text-align:center"><input type = "submit" value = "Submit" /><br></div></td>

</table>
</form>

<?php

include("includes/footer.inc");
?>
