<?php
include("includes/common.inc");
if(isset($_SESSION['user_id'])){
  header("Location: displaymeetings.php");
}
?>

<h2 align=center>Login to Your Club Account</h2>
<p align=center style="color:red;">Your login info is what you entered as the club name and club password when you filled out the "Introduce Your Club" form.</p>
<form action = "handlerlogin.php" method="POST">
<table align=center>
<tr><td><b>Username: </b>
<input type = "text" name = "clubname"/><br><br></td>
<tr><td><b>Password: </b>
<input type = "password" name = "clubpassword"/><br><br></td>

<tr><td><div style="text-align:center"><input type = "submit" value = "Submit" /></div></td>

</table>
</form>

<?php include("includes/footer.inc"); ?>
