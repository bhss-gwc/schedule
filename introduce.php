<?php
include("includes/common.inc");
?>

<script>
function check_input() {
  nn = document.getElementById('club_name').value;
  pn = document.getElementById('club_pass').value;
  if (nn == "" || pn == "") {
    alert('Club name and club password are both required.');
    return false;
  }
}
</script>

<h2 align=center>Introduce Your Club</h2>
<p align=center style="color:red;">This form should only be filled out <b>ONCE for each club</b>. Typically the club leader should fill this out.<br>
The club name and club password that you enter will be the username and password used in the <?php echo (isset($_SESSION['club-name'])?"club login":"<a href=\"login.php\">club login</a>"); ?>.<br>
After submitting, you will be able to edit this club info by clicking "Edit" on the <a href="displayclubinfo.php">club info table</a>.</p>
<form action = "handlerintroduce.php" method="POST">
<table align=center>
<tr><td><b>Club name</b> (ex: Chess Club): 
	<input id="club_name" type = "text" name = "clubname"/><br><br>
<tr><td><b>Club password</b> (choose a password you can share with future club leaders): 
	<input id="club_pass" type = "password" name = "clubpassword"/><br><br>
<tr><td><b>Club sponsor name</b> (ex: Mrs. Johnson): 
<input type = "text" name = "clubsponsorname"/><br><br>
<tr><td><b>Club sponsor email:</b> 
<input type = "text" name = "clubsponsoremail"/><br><br>
<tr><td><b>Club leader(s) name(s):</b> 
<input type = "text" name = "clubleadername"/><br><br>
<tr><td><b>Club's method of communication</b> (ex: insert your GroupMe link): 
<input type = "text" name = "clubcommunication"/><br><br>
<tr><td><b>Club meeting location:</b> 
<input type = "text" name = "clubmeetinglocation"/><br><br>
<tr><td><b>Club meeting description</b> (optional): 
<input type = "text" name = "clubmeetingdescription"/><br><br>

<!--<input type="button" value="Cancel" onclick=\"history.back()\"/>-->
<tr><td><div style="text-align:center"><input onclick="return check_input()" type = "submit" value = "Submit" /><br></div></td>

</table>
</form>

<?php

include("includes/footer.inc");
?>
